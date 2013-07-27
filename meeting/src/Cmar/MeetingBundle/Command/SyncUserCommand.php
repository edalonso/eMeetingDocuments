<?php

namespace Cmar\MeetingBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Cmar\MeetingBundle\Entity\User;

/**
 * Dumps pumukit user info.
 *
 * @author Ruben Gonzalez <rubenrua@teltek.es>
 */
class SyncUserCommand extends ContainerAwareCommand
{
  /**
   * @see Command
   */
  protected function configure()
  {
        $this
	  ->setName('cmar:sync:user')
	  ->setDefinition(array(
				new InputOption('force', null, InputOption::VALUE_NONE,	"Write info in Ado server"),
				new InputOption('force-delete', null, InputOption::VALUE_NONE, "Delete info in Ado server"),
				))
	  ->setDescription('CMar Sync User command')
	  ->setHelp(<<<EOF
		    The <info>cmar:import user</info> command ..:

		    <info>./app/console cmar:sync:user list</info>
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

    $diff = $this->diff($output);
    if ($input->getOption('force') === true) {
      $news = $this->createInAdo($diff, $output);
    }

  }


  /**
   *
   * @return array User
   */
  private function diff(OutputInterface $output)
  {
    $em = $this->getContainer()->get('doctrine.orm.entity_manager');
    $ado_factory = $this->getContainer()->get('cmar_meeting.ado_factory');

    $users = $em->getRepository('CmarMeetingBundle:User')->findAll();
    $users_bad = array();

    $output->writeln('<info>Checking users in ado</info>');
    foreach ($users as $user) {
      try {
          $output->write(sprintf('<info> > Checking user <comment>%s</comment> </info>', $user->getEmail()));
          $client = $ado_factory->getClient($user->getEmail(), $user->getPassword());
          //FIXME check metadata
          $output->writeln('<info> OK</info>');
      } catch(\LogicException $e) {
          $output->writeln('<info> KO</info>');
          $users_bad[] = $user;
      }
    }
    
    return $users_bad;
    
  }

  /**
   *
   * @return array User
   */
  private function createInAdo(array $users, OutputInterface $output)
  {
    $ado = $this->getContainer()->get('cmar_meeting.ado_admin');

    $users_news = array();
    
    $output->writeln('<info>Creating users in ado</info>');
    foreach($users as $user) {
      try {
          $output->write(sprintf('<info> > Creating user <comment>%s</comment> </info>', $user->getEmail()));
          $sal = $ado->principalUpdate($user->getLogin(), $user->getEmail(), $user->getPassword(), 
                                       $user->getName(), $user->getSurname(), "Automatically created user in meeting");
          
          //FIXME Check create OK
          $output->writeln('<info> OK</info>');
      } catch(\LogicException $e) {
          $output->writeln('<info> KO</info>');
      }
      $users_news[] = $user;
    }

    return $users_news;
  }
  
  
}