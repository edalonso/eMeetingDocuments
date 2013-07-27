<?php

namespace Cmar\MeetingBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Cmar\MeetingBundle\Entity\Meeting;
use Cmar\MeetingBundle\Entity\Recording;

/**
 * Dumps pumukit user info.
 *
 * @author Ruben Gonzalez <rubenrua@teltek.es>
 */
class SyncRecCommand extends ContainerAwareCommand
{
  /**
   * @see Command
   */
  protected function configure()
  {
      $this
	  ->setName('cmar:sync:rec')
	  ->setDefinition(array(
				))
	  ->setDescription('CMar Sync Recordings command')
	  ->setHelp(<<<EOF
		    The <info>cmar:import user</info> command ..:

		    <info>./app/console cmar:sync:rec</info>
EOF
		    );
  }



  /**
   * {@inheritdoc}
   */
  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $em = $this->getContainer()->get('doctrine.orm.entity_manager');
    $ado = $this->getContainer()->get('cmar_meeting.ado_admin');    

    $meetings = $em->getRepository('CmarMeetingBundle:Meeting')->findAll();

    foreach ($meetings as $meeting){
        if ($meeting->getState() == Meeting::STATE_NOW){
            $recordings = array();
            $auxRecordings = $meeting->getRecordings();

            $parse = parse_url($meeting->getUrl());
            $xml = $ado->get('sco-by-url', array('url-path' => $parse["path"]));
            
            $sco_id = (string) $xml->{'sco'}->attributes()->{"sco-id"};
            
            $xml = $ado->get('sco-expanded-contents', array('sco-id' => $sco_id, 'filter-icon' => 'archive', 'sort-date-begin' => 'desc'));
            if ($xml->{'expanded-scos'}->{'sco'}->{'name'} != ''){//Si hay grabaciones                                                                                                                                                       
                foreach($xml->{'expanded-scos'}->{'sco'} as $a) {
                    $recording = array();
                    $recording["TITLE"] = $a->{'name'};
                    $recording["URL"] = $ado->getServer() . $a->{'url-path'};
                    $recording["DATETIMECREATED"] = \DateTime::createFromFormat('Y-m-d\TH:i:s.uP', (string) $a->{'date-created'});
                    $recording["DATETIMEMODIFIED"] = \DateTime::createFromFormat('Y-m-d\TH:i:s.uP', (string) $a->{'date-modified'});
                    $recordings[] = $recording;
                    
                    $xml = $ado->get('permissions-update', array('acl-id'  => (integer) $a->attributes()->{'sco-id'}, 'principal-id' => 'public-access', 'permission-id' => 'view'));
                    
                }
                foreach($recordings as $recording){
                    $copy = true;
                    foreach ($auxRecordings as $auxRecording){
                        if ($auxRecording->getTitle() == $recording["TITLE"] AND $copy){
                            $copy = false;
                        }
                    }
                    if ($copy AND ($recording["DATETIMECREATED"] != $recording["DATETIMEMODIFIED"])){//Se copia si ya acabo de grabar
                        $recording1 = new Recording;
                        $recording1->setTitle($recording["TITLE"]);
                        $recording1->setUrl($recording["URL"]);
                        $recording1->setDateCreated($recording["DATETIMECREATED"]);
                        $recording1->setMeeting($meeting);
                        $em->persist($recording1);
                    }
                }
                $em->persist($meeting);
            }
        }
    }

    $em->flush();
  }
  
}