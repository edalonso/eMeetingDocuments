<?php

namespace Cmar\MeetingBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Cmar\MeetingBundle\Entity\User;

/**
 * Test ado connect conectivity
 *
 * @author Ruben Gonzalez <rubenrua@teltek.es>
 */
class MeetingTestCommand extends ContainerAwareCommand
{
  /**
   * @see Command
   */
  protected function configure()
  {
        $this
	  ->setName('cmar:test:meeting')
	  ->setDefinition(array())
	  ->setDescription('CMar test ado connect conectivity command')
	  ->setHelp(<<<EOF
		    The <info>cmar:test:meeting</info> command ..:

		    <info>./app/console cmar:test:meeting</info>
EOF
		    );
  }



  /**
   * {@inheritdoc}
   */
  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $ado = $this->getContainer()->get('cmar_meeting.ado_admin');

    $ado->login();
    $out = $ado->getCommonInfo();
    $output->writeln("Connection OK to \"" . (string)$out->{"common"}->{"host"} . "\"");

  }
}