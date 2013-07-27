<?php

namespace Cmar\MeetingBundle\Test\Entity;

use Cmar\MeetingBundle\Entity\Meeting;
use Cmar\MeetingBundle\Entity\User;
use Cmar\MeetingBundle\Entity\Recording;

class MeetingTest extends \PHPUnit_Framework_TestCase
{


    public function testPastMeeting()
    {
        $meeting = new Meeting();
        $meeting->setState(Meeting::STATE_FINISHED);

        $this->assertFalse($meeting->isNow());
        $this->assertFalse($meeting->isStarted());
    }

    /* public function testMeeting()
    {
        $title = "title";
        $description = "123<>U45;";
        $int = new \DateInterval("PT30M");
        $int = \DateInterval::createFromDateString("30 minutes");
        $date = new \DateTime("now");
        $date->sub($int);
        $duration = 60;
        $finishDate = clone $date;
        $finishDate->add(\DateInterval::createFromDateString($duration . " minutes"));
        $public = true;
        $owner = new User();
        $url = "http://ado.google.com/rubenrua";
    
        $meeting = new Meeting();

        $this->assertEquals(Meeting::STATE_NEW, $meeting->getState());

        $meeting->setState(Meeting::STATE_SCHEDULED);
        $meeting->setTitle($title);
        $meeting->setDescription($description);
        $meeting->setDate($date);
        $meeting->setDuration($duration);
        $meeting->setPublic($public);
        $meeting->setOwner($owner);
        $meeting->setUrl($url);
       
        $this->assertEquals(Meeting::STATE_SCHEDULED, $meeting->getState());
        $this->assertEquals($title, $meeting->getTitle());
        $this->assertEquals($description, $meeting->getDescription());
        $this->assertEquals($date, $meeting->getDate());
        $this->assertEquals($date->format("Y-m-d\TH:i"), $meeting->getStringDate());
        $this->assertEquals($date->format("r"), $meeting->getStringDate("r"));
        $this->assertEquals($duration, $meeting->getDuration());
        $this->assertEquals($finishDate, $meeting->getFinishDate());
        $this->assertEquals($finishDate, $meeting->getFinishDateAsDatePlusDuration());
        $this->assertEquals($meeting->getFinishDateAsDatePlusDuration(), $meeting->getFinishDate());
        $this->assertEquals($finishDate->format("r"), $meeting->getStringFinishDate("r"));
        $this->assertEquals($public, $meeting->getPublic());
        $this->assertEquals($owner, $meeting->getOwner());
        $this->assertEquals($url, $meeting->getUrl());

        $this->assertTrue($meeting->isNow());
        $this->assertFalse($meeting->isFinished());
        $this->assertTrue($meeting->isStarted());
        $this->assertEquals(0, $meeting->getDateStatus());
    }


    public function testPastMeeting()
    {
        $int = \DateInterval::createFromDateString("61 minutes");
        $date = new \DateTime("now");
        $date->sub($int);
        $duration = 60;
    
        $meeting = new Meeting();
        $meeting->setDate($date);
        $meeting->setDuration($duration);

        $this->assertFalse($meeting->isNow());
        $this->assertTrue($meeting->isFinished());
        $this->assertTrue($meeting->isStarted());
        $this->assertEquals(1, $meeting->getDateStatus());
    }


    public function testFutureMeeting()
    {
        $date = new \DateTime("tomorrow");
        $duration = 60;
    
        $meeting = new Meeting();
        $meeting->setDate($date);
        $meeting->setDuration($duration);

        $this->assertFalse($meeting->isNow());
        $this->assertFalse($meeting->isFinished());
        $this->assertFalse($meeting->isStarted());
        $this->assertEquals(-1, $meeting->getDateStatus());
    }

    
    public function testUsersInMeeting()
    {
        $meeting = new Meeting();
        $user1 = new User();
        $user2 = new User();
        $user3 = new User();
        
        $this->assertEquals(0, count($meeting->getUsers()));
        
        $meeting->addUser($user1);
        $meeting->addUser($user2);
        $meeting->addUser($user3);
        $this->assertEquals(3, count($meeting->getUsers()));
        
        $meeting->removeUser($user2);
        $this->assertEquals(2, count($meeting->getUsers()));
        
        $this->assertTrue($meeting->containsUser($user1));
        $this->assertFalse($meeting->containsUser($user2));
    }



    public function testRecordingsInMeeting()
    {
        $meeting = new Meeting();
        $recording1 = new Recording();
        $recording2 = new Recording();
        $recording3 = new Recording();
        
        $this->assertEquals(0, count($meeting->getRecordings()));
        
        $meeting->addRecording($recording1);
        $meeting->addRecording($recording2);
        $meeting->addRecording($recording3);
        $this->assertEquals(3, count($meeting->getRecordings()));
        
        $meeting->removeRecording($recording2);
        $this->assertEquals(2, count($meeting->getRecordings()));
        
        $this->assertTrue($meeting->containsRecording($recording1));
        $this->assertFalse($meeting->containsRecording($recording2));
        }*/


    
    /**
     * @expectedException LogicException
     */
    /*
    public function testSetFutureDate()
    {
        $date = new \DateTime("tomorrow");
        
        $meeting = new Meeting();
        $meeting->setFinishDate($date);
        }*/
}