<?php

namespace Cmar\MeetingBundle\Test\Service;

use Cmar\MeetingBundle\Service\Ado;

class AdoTest extends \PHPUnit_Framework_TestCase
{

    public function testLogin()
    {
      $server = "https://ado.campusdomar.es";

      $client = new Ado($server, "sistemas@campusdomar.es", "212122kk00");
      $this->assertEquals($server, $client->getServer());
      $this->assertEquals(true, $client->login());
      $this->assertTrue(strlen($client->getSession()) > 0);
    }


    /**
     * @expectedException LogicException
     */
    public function testBadServer()
    {
      $server = "https://ado";
      $client = new Ado($server, "--", "--");
    }
}



