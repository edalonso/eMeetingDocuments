<?php

namespace Cmar\MeetingBundle\Test\Entity;

use Cmar\MeetingBundle\Entity\Recording;
use Cmar\MeetingBundle\Entity\Meeting;

class RecordingTest extends \PHPUnit_Framework_TestCase
{

    public function testRecording()
    {
        $title = "title";
        $url = "123<>U45;";
        $date = new \DateTime("now");
        $meeting = new Meeting();
        
        $recording = new Recording();
        $recording->setTitle($title);
        $recording->setUrl($url);
        $recording->setDateCreated($date);
        $recording->setMeeting($meeting);

        $this->assertEquals($title, $recording->getTitle());
        $this->assertEquals($url, $recording->getUrl());
        $this->assertEquals($date, $recording->getDateCreated());
        $this->assertEquals($meeting, $recording->getMeeting());
    }
}