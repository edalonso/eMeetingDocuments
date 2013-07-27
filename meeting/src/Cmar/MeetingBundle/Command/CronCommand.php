<?php

namespace Cmar\MeetingBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Cmar\MeetingBundle\Entity\Meeting;
use Cmar\MeetingBundle\Entity\User;

/**
 * Dumps pumukit user info.
 *
 * @author Ruben Gonzalez <rubenrua@teltek.es>
 */
class CronCommand extends ContainerAwareCommand
{
  /**
   * @see Command
   */
  protected function configure()
  {
        $this
	  ->setName('cmar:meeting:cron')
	  ->setDefinition(array(
                          ))
	  ->setDescription('Cmar meeting cron: Change the state of the meetings')
	  ->setHelp(<<<EOF
		    The <info>cmar:import user</info> command ..:

		    <info>./app/console cmar:metting:cron</info>
		    
		    Edit /etc/crontab to add que next line

		    <info>*  *    * * *   www-data     /var/www/cmar_meeting/app/console cmar:meeting:cron</info>
EOF
		    );
  }



  /**
   * {@inheritdoc}
   */
  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $logger = $this->getContainer()->get('logger');
    $em = $this->getContainer()->get('doctrine.orm.entity_manager');
    $meetingService = $this->getContainer()->get('cmar_meeting');    

    $logger->info("Exec cmar meeting cron");

    //Meeting end
    $meetings_to_end = $em->getRepository('CmarMeetingBundle:Meeting')->findFinished();

    $output->writeln("Meetings to end:");
    $logger->info("Meetings to end:");
    foreach ($meetings_to_end as $meeting) {
        //FIXME refact in a service
        $meetingService->stop($meeting);

        $output->writeln(" > " . $meeting->getId() . " - \"" . $meeting->getTitle() . "\" " . $meeting->getStringFinishDate());
        $logger->info(" > " . $meeting->getId() . " - \"" . $meeting->getTitle() . "\" " . $meeting->getStringFinishDate());
    }

    //Meeting start
    $meetings_to_start = $em->getRepository('CmarMeetingBundle:Meeting')->findStarted();
    $output->writeln("Meetings to start:");
    $logger->info("Meetings to start:");
    foreach ($meetings_to_start as $meeting) {
        //FIXME try catch
        $meetingService->start($meeting);

        $output->writeln(" > " . $meeting->getId() . " - \"" . $meeting->getTitle() . "\" " . $meeting->getStringDate());
        $logger->info(" > " . $meeting->getId() . " - \"" . $meeting->getTitle() . "\" " . $meeting->getStringDate());
    }
  }

  
}