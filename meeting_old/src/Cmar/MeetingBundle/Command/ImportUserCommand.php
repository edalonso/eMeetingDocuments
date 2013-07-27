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
class ImportUserCommand extends ContainerAwareCommand
{
  /**
   * @see Command
   */
  protected function configure()
  {
        $this
	  ->setName('cmar:import:user')
	  ->setDefinition(array(
				new InputArgument('ldap-server', InputArgument::REQUIRED, 'LDAP Server'),
				new InputArgument('ldap-user', InputArgument::REQUIRED, 'LDAP user'),
				new InputArgument('ldap-passwd', InputArgument::REQUIRED, 'LDAP password'),
				))
	  ->setDescription('CMar Import User command')
	  ->setHelp(<<<EOF
		    The <info>cmar:import user</info> command ..:

		    <info>./app/console cmar:import:user list</info>
EOF
		    );
  }



  /**
   * {@inheritdoc}
   */
  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $em = $this->getContainer()->get('doctrine.orm.entity_manager');

    $ds = ldap_connect($input->getArgument('ldap-server')); 
    ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
    if($ds){
      $r = ldap_bind($ds, $input->getArgument('ldap-user'), $input->getArgument('ldap-passwd'));
      //var_dump($r);
      $sr = ldap_search($ds, "ou=Usuarios,dc=campusdomar,dc=es", "(objectClass=organizationalPerson)");   
      $info = ldap_get_entries($ds, $sr);

      for ($i = 0; $i < $info["count"]; $i++){
	$output->write(" * " . $info[$i]["cn"][0] . " \t " . $info[$i]["edupersonprincipalname"][0]);
	try{
	  $u = new User();
	  $u->setLogin($info[$i]["cn"][0]);
	  //FIXME SET HASH
	  $u->setPassword($u->getLogin());
	  $u->setName($info[$i]["givenname"][0]);
	  $u->setSurname($info[$i]["sn1"][0] . " " . $info[$i]["sn2"][0]);
	  $u->setEmail($info[$i]["edupersonprincipalname"][0]);
	  
	  $em->persist($u);
	  $em->flush();
	  $output->writeln("\tOK");
	}catch(\Exception $e){
	  $output->writeln("\tKO");
	};
      }
      ldap_close($ds); 
    }

    $output->writeln("Usuarios guardados");

  }
}