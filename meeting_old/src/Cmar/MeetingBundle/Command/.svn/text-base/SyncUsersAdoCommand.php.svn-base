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
class SyncUsersAdoCommand extends ContainerAwareCommand
{
  /**
   * @see Command
   */
  protected function configure()
  {
      $this
	  ->setName('cmar:sync:userADO')
	  ->setDefinition(array(
				))
	  ->setDescription('CMar Sync User ADO command')
	  ->setHelp(<<<EOF
		    The <info>cmar:import user</info> command ..:

		    <info>./app/console cmar:sync:userADO</info>
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
      
      $xml = $ado->get('principal-list');

      foreach ($xml->{'principal-list'}->{'principal'} as $xml1) {
          if ($xml1->{"description"} == "User created as guest"){
              $email = $xml1->{'email'};
              $pos1 = \strrpos($email, "-");
              $pos2 = \strrpos($email, "@");
              $dateCreated = (int) \substr($email, $pos1+1, $pos2-3) + 2000000;//Fecha de creación del usuario incrementada en un día
              $date_now = 'now'|date('YmdHis');
              $now = (int) substr($date_now, 3, strlen($date_now));
              if ($now > $dateCreated) {
                  $id = (int) $xml1->attributes()->{'principal-id'};
                  $xml = $ado->get('principals-delete', array('principal-id' => $id));
              }
          }
      }
  }
}