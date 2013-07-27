<?php

namespace Cmar\MeetingBundle\Test\Entity;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Cmar\MeetingBundle\Entity\Meeting;
use Cmar\MeetingBundle\Entity\User;
use Cmar\MeetingBundle\Entity\Group;
use Cmar\MeetingBundle\Entity\Recording;

class MeetingRepositoryTest extends WebTestCase
{

    private $em;
    private $repo;

    public function setUp() 
    {
        //INIT TEST SUITE
        $kernel = static::createKernel();
        $kernel->boot();
        $this->em = $kernel->getContainer()
            ->get('doctrine.orm.entity_manager');
        $this->repo = $this->em
            ->getRepository('CmarMeetingBundle:Meeting');

        //DELETE DATABASE
        $this->em->createQuery("DELETE CmarMeetingBundle:Meeting m")->getResult();
        $this->em->createQuery("DELETE CmarMeetingBundle:Recording r")->getResult();
        $this->em->createQuery("DELETE CmarMeetingBundle:Group g")->getResult();
        $this->em->createQuery("DELETE CmarMeetingBundle:User u")->getResult();
    }

    public function testCreateMeeting()
    {
        
        $title = "Meeting for testCreateMeeting";
        
        $meeting = new Meeting();
        $meeting->setTitle($title);
        $meeting->setPublic(true);
        $meeting->setSecretSalt(rand());
        $meeting->setSalt(rand());

        $meeting->setState(Meeting::STATE_NOW);
        $this->em->persist($meeting);
        $this->em->flush();
        
        $this->assertEquals(1, count($this->repo->findAll()));
    }

    public function testRepositoryEmpty()
    {
        $this->assertEquals(0, count($this->repo->findAll()));
    }

    public function testFindByStateAndUser()
    {
      $user = $this->createUser("user");

      $duration = 30;
      $now = new \DateTime("now");
      $int = new \DateInterval("PT" . $duration . "M");
      $end = clone $now;
      $end->add($int);
      
      $title = "Meeting for testFindByStateAndUser";
      $datatime = '2009-02-17 11:00:00';
      $meeting_state = Meeting::STATE_NOW;

      $num_meeting = 4;
      for($r = 0; $r<$num_meeting; $r++){
          $meeting[$r] = $this->createMeeting($user, $title, $duration, $datatime, $meeting_state);

      }
      
      $neno = $this->createUser("neno");

      $datatime = '2009-02-14 15:00:00';
      $meeting[5] = $this->createMeeting($user, $title, $duration, $datatime, $meeting_state);
      
      $datatime = '2009-02-14 15:15:00';
      $meeting_state = Meeting::STATE_NEW;
      $meeting[6] = $this->createMeeting($user, $title, $duration, $datatime, $meeting_state);

      $datatime = '2009-02-14 15:20:00';
      $meeting[7] = $this->createMeeting($user, $title, 15, $datatime, $meeting_state);

      $datatime = '2009-02-14 15:40:00';
      $meeting[8] = $this->createMeeting($user, $title, $duration, $datatime, $meeting_state);

      $datatime = '2009-02-14 15:00:00';
      $meeting[9] = $this->createMeeting($neno, $title, 80, $datatime, $meeting_state);


      $this->em->flush();
    


      $this->assertEquals(9, count($this->repo->findAll()));
      $this->assertEquals(5, count($this->repo->findByStateAndUser(Meeting::STATE_NOW, $user)));
      $this->assertEquals(3, count($this->repo->findByStateAndUser(Meeting::STATE_NEW, $user)));
    }


    public function testFindByStateAndGroup()
    {
      $user = $this->createUser("user");
      $group = $this->createGroup("Peces", array($user));

      $duration = 30;
      $now = new \DateTime("now");
      $int = new \DateInterval("PT" . $duration . "M");
      $end = clone $now;
      $end->add($int);
      
      $title = "Meeting for testFindByStateAndGroup";
      $datatime = '2009-02-17 11:00:00';
      $meeting_state = Meeting::STATE_NOW;

      $num_meeting = 4;
      for($r = 0; $r<$num_meeting; $r++){
          $meeting[$r] = $this->createMeetingGroup($user, $title, $duration, $datatime, $meeting_state, $group);
      }
      
      $user2 = $this->createUser("user2");
      $group2 = $this->createGroup("Peces2", array($user2));

      $datatime = '2009-02-14 15:00:00';
      $meeting[5] = $this->createMeetingGroup($user, $title, $duration, $datatime, $meeting_state, $group);
      
      $datatime = '2009-02-14 15:15:00';
      $meeting_state = Meeting::STATE_NEW;
      $meeting[6] = $this->createMeetingGroup($user, $title, $duration, $datatime, $meeting_state, $group);
      
      $datatime = '2009-02-14 15:20:00';
      $meeting[7] = $this->createMeetingGroup($user, $title, 15, $datatime, $meeting_state, $group2);
      
      $datatime = '2009-02-14 15:40:00';
      $meeting[8] = $this->createMeetingGroup($user2, $title, $duration, $datatime, $meeting_state, $group);
      
      $datatime = '2009-02-14 15:00:00';
      $meeting[9] = $this->createMeetingGroup($user2, $title, 80, $datatime, $meeting_state, $group2);
      
      
      $this->em->flush();
      
      
      $this->assertEquals(5, count($this->repo->findByStateAndGroup(Meeting::STATE_NOW, $group)));
      $this->assertEquals(2, count($this->repo->findByStateAndGroup(Meeting::STATE_NEW, $group)));
      //$this->assertEquals(2, count($this->repo->findByStateAndGroup(Meeting::STATE_NEW, $group)));//Esta consulta devuelve meetings donde el user está en group, sólo devuelve algo para user-group o user2-group2
      $this->assertEquals(2, count($this->repo->findByStateAndGroup(Meeting::STATE_NEW, $group2)));
      $this->assertEquals(0, count($this->repo->findByStateAndGroup(Meeting::STATE_NOW, $group2)));
    }

    public function testFindByStatesUserMonth()
    {
      $user = $this->createUser("user");
      $group = $this->createGroup("Peces", array($user));

      $duration = 30;
      $now = new \DateTime("now");
      $int = new \DateInterval("PT" . $duration . "M");
      $end = clone $now;
      $end->add($int);
      
      $title = "Meeting for testFindByStateAndUserGroup";
      $datatime = '2009-02-17 11:00:00';
      $meeting_state = Meeting::STATE_NOW;

      $num_meeting = 4;
      for($r = 0; $r<$num_meeting; $r++){
          $meeting[$r] = $this->createMeetingGroup($user, $title, $duration, $datatime, $meeting_state, $group);
      }
      
      $user2 = $this->createUser("user2");
      $group2 = $this->createGroup("Peces2", array($user2));

      $datatime = '2009-02-14 15:00:00';
      $meeting[5] = $this->createMeetingGroup($user2, $title, $duration, $datatime, $meeting_state, $group);
      
      $datatime = '2009-02-14 15:15:00';
      $meeting_state = Meeting::STATE_NEW;
      $meeting[6] = $this->createMeetingGroup($user, $title, $duration, $datatime, $meeting_state, $group);
      
      $datatime = '2009-02-14 15:20:00';
      $meeting[7] = $this->createMeetingGroup($user, $title, 15, $datatime, $meeting_state, $group2);
      
      $datatime = '2009-02-14 15:40:00';
      $meeting[8] = $this->createMeetingGroup($user2, $title, $duration, $datatime, $meeting_state, $group);
      
      $datatime = '2009-02-14 15:00:00';
      $meeting[9] = $this->createMeetingGroup($user2, $title, 80, $datatime, $meeting_state, $group2);
      
      
      $this->em->flush();
      $month = new \Datetime('2009-02-01 00:00:00');
      
      $this->assertEquals(6, count($this->repo->findByStatesUserAndMonth(array(Meeting::STATE_NOW, Meeting::STATE_NEW), $user, $month)));
      $this->assertEquals(3, count($this->repo->findByStatesUserAndMonth(array(Meeting::STATE_NEW, Meeting::STATE_NOW), $user2, $month)));
    }
    

    public function testfindByStateAndNotUser()
    {
        $user = $this->createUser("user");
        $user2 = $this->createUser("user2");
        $num_meeting = 4;
        $title = "Meeting for findByStateAndNotUser";
        $datatime = '2009-02-17 11:00:00';
        $meeting_state = Meeting::STATE_NOW;
        $duration = 30;        

        for($r = 0; $r<$num_meeting; $r++){
            $meeting[$r] = $this->createMeeting($user, $title, $duration, $datatime, $meeting_state);            
        }

        $datatime = '2009-02-14 15:00:00';
        $meeting[5] = $this->createMeeting($user2, $title, $duration, $datatime, $meeting_state);
        
        $datatime = '2009-02-14 15:15:00';
        $meeting_state = Meeting::STATE_NEW;
        $meeting[6] = $this->createMeeting($user2, $title, $duration, $datatime, $meeting_state);
        
        $datatime = '2009-02-14 15:20:00';
        $meeting[7] = $this->createMeeting($user, $title, 15, $datatime, $meeting_state);
        
        $this->em->flush();

        $this->assertEquals(1, count($this->repo->findByStateAndNotUser(Meeting::STATE_NEW, $user2)));
        $this->assertEquals(1, count($this->repo->findByStateAndNotUser(Meeting::STATE_NEW, $user)));
        $this->assertEquals(4, count($this->repo->findByStateAndNotUser(Meeting::STATE_NOW, $user2)));
        $this->assertEquals(1, count($this->repo->findByStateAndNotUser(Meeting::STATE_NOW, $user)));

    }    
    

    public function testfindStarted()
    {
        $duration = 30;
        $user = $this->createUser("user");
        $num_meeting = 5;
        $title = "Meeting for testfindStarted";
        $datatime = '2012-01-05 10:30:00';
        $meeting_state = Meeting::STATE_SCHEDULED;
        
        for($r = 0; $r<$num_meeting; $r++){
            $meeting[$r] = $this->createMeeting($user, $title, $duration, $datatime, $meeting_state);
        }

        $datatime = '2011-01-05 10:30:00';
        $meeting_state = Meeting::STATE_NOW;//Compara el únicamente el estado
        
        for($r = $num_meeting; $r<$num_meeting+5; $r++){
            $meeting[$r] = $this->createMeeting($user, $title, $duration, $datatime, $meeting_state);
        }
        
        $this->em->flush();

        $this->assertEquals(5, count($this->repo->findStarted()));
    }    

    public function testfindFutureByOwner()
    {
        $duration = 30;
        $user = $this->createUser("user");
        $user2 = $this->createUser("user2");
        $num_meeting = 5;
        $title = "Meeting for testfindFutureByOwner";
        $datatime = '2012-01-05 10:30:00';
        $meeting_state = Meeting::STATE_SCHEDULED;//Compara la fecha y la hora
        
        for($r = 0; $r<$num_meeting; $r++){
            $meeting[$r] = $this->createMeeting($user, $title, $duration, $datatime, $meeting_state);
        }

        $datatime = '2013-01-05 10:30:00';
        $meeting_state = Meeting::STATE_SCHEDULED;
        
        for($r = $num_meeting; $r<$num_meeting+5; $r++){
            $meeting[$r] = $this->createMeeting($user, $title, $duration, $datatime, $meeting_state);
        }
        
        $this->em->flush();

        $this->assertEquals(5, count($this->repo->findFutureByOwner($user)));
        $this->assertEquals(0, count($this->repo->findFutureByOwner($user2)));
    }    

    public function testfindHistoricalByUser()
    {
        $duration = 30;
        $user = $this->createUser("user");
        $user2 = $this->createUser("user2");
        $num_meeting = 5;
        $title = "Meeting for testfindHistoricalByUser";
        $datatime = '2200-01-05 10:30:00';
        $meeting_state = Meeting::STATE_SCHEDULED;
        
        for($r = 0; $r<$num_meeting; $r++){
            $meeting[$r] = $this->createMeeting($user, $title, $duration, $datatime, $meeting_state);
        }

        $datatime = '2012-01-16 10:00:00';
        $meeting_state = Meeting::STATE_NOW;
        
        $ahora = new \DateTime("now");

        for($r = $num_meeting; $r<$num_meeting+5; $r++){
            $meeting[$r] = $this->createMeeting($user2, $title, $duration, $datatime, $meeting_state);
            //$meeting[$r]->setDate($ahora);
        }

        $datatime = '2010-01-05 10:30:00';
        $meeting_state = Meeting::STATE_NOW;
        
        for($r = $num_meeting+5; $r<$num_meeting+10; $r++){
            $meeting[$r] = $this->createMeeting($user2, $title, $duration, $datatime, $meeting_state);
        }
        
        $this->em->flush();
        $this->assertEquals(0, count($this->repo->findHistoricalByUser($user)));
        $this->assertEquals(10, count($this->repo->findHistoricalByUser($user2)));
    }    

    public function testfindByStatesAndUser()
    {
        $duration = 30;
        $user = $this->createUser("user");
        $user2 = $this->createUser("user2");
        $num_meeting = 5;
        $title = "Meeting for testfindFutureByOwner";
        $datatime = '2012-01-05 10:30:00';
        $meeting_state = Meeting::STATE_FINISHED;//Compara la fecha y la hora
        
        for($r = 0; $r<$num_meeting; $r++){
            $meeting[$r] = $this->createMeeting($user, $title, $duration, $datatime, $meeting_state);
        }

        $datatime = '2013-01-05 10:30:00';
        $meeting_state = Meeting::STATE_SCHEDULED;
        
        for($r = $num_meeting; $r<$num_meeting+5; $r++){
            $meeting[$r] = $this->createMeeting($user2, $title, $duration, $datatime, $meeting_state);
        }
        
        $this->em->flush();

        $this->assertEquals(5, count($this->repo->findByStatesAndUser(array($meeting_state, Meeting::STATE_FINISHED), $user)));
        $this->assertEquals(5, count($this->repo->findByStatesAndUser(array($meeting_state, Meeting::STATE_FINISHED), $user2)));
        $this->assertEquals(0, count($this->repo->findByStatesAndUser(array(Meeting::STATE_NOW, Meeting::STATE_NEW), $user2)));
    }



    public function testfindByStatesAndUserGroup()
    {
      $user = $this->createUser("user");
      $group = $this->createGroup("Peces", array($user));

      $duration = 30;
      $now = new \DateTime("now");
      $int = new \DateInterval("PT" . $duration . "M");
      $end = clone $now;
      $end->add($int);
      
      $title = "Meeting for testFindByStateAndUserGroup";
      $datatime = '2009-02-17 11:00:00';
      $meeting_state = Meeting::STATE_NOW;

      $num_meeting = 4;
      for($r = 0; $r<$num_meeting; $r++){
          $meeting[$r] = $this->createMeetingGroup($user, $title, $duration, $datatime, $meeting_state, $group);
      }
      
      $user2 = $this->createUser("user2");
      $group2 = $this->createGroup("Peces2", array($user2));

      $datatime = '2009-02-14 15:00:00';
      $meeting[5] = $this->createMeetingGroup($user2, $title, $duration, $datatime, $meeting_state, $group);
      
      $datatime = '2009-02-14 15:15:00';
      $meeting_state = Meeting::STATE_NEW;
      $meeting[6] = $this->createMeetingGroup($user, $title, $duration, $datatime, $meeting_state, $group);
      
      $datatime = '2009-02-14 15:20:00';
      $meeting[7] = $this->createMeetingGroup($user, $title, 15, $datatime, $meeting_state, $group2);
      
      $datatime = '2009-02-14 15:40:00';
      $meeting[8] = $this->createMeetingGroup($user2, $title, $duration, $datatime, $meeting_state, $group);
      
      $datatime = '2009-02-14 15:00:00';
      $meeting[9] = $this->createMeetingGroup($user2, $title, 80, $datatime, $meeting_state, $group2);
      
      
      $this->em->flush();
      $month = new \Datetime('2009-02-01 00:00:00');
      
      $this->assertEquals(5, count($this->repo->findByStatesAndUserGroup(array(Meeting::STATE_NOW, Meeting::STATE_NEW), $user, $group)));
      $this->assertEquals(1, count($this->repo->findByStatesAndUserGroup(array(Meeting::STATE_NEW, Meeting::STATE_NOW), $user2, $group2)));
      $this->assertEquals(1, count($this->repo->findByStatesAndUserGroup(array(Meeting::STATE_NEW, Meeting::STATE_NOW), $user, $group2)));
      $this->assertEquals(2, count($this->repo->findByStatesAndUserGroup(array(Meeting::STATE_NEW, Meeting::STATE_NOW), $user2, $group)));
    }
    

    public function testfindByStatesUserAndMonthGroup()
    {
      $user = $this->createUser("user");
      $group = $this->createGroup("Peces", array($user));

      $duration = 30;
      $now = new \DateTime("now");
      $int = new \DateInterval("PT" . $duration . "M");
      $end = clone $now;
      $end->add($int);
      
      $title = "Meeting for testFindByStateAndUserGroup";
      $datatime = '2009-02-17 11:00:00';
      $meeting_state = Meeting::STATE_NOW;

      $num_meeting = 4;
      for($r = 0; $r<$num_meeting; $r++){
          $meeting[$r] = $this->createMeetingGroup($user, $title, $duration, $datatime, $meeting_state, $group);
      }
      
      $user2 = $this->createUser("user2");
      $group2 = $this->createGroup("Peces2", array($user2));

      $datatime = '2009-02-14 15:00:00';
      $meeting[5] = $this->createMeetingGroup($user2, $title, $duration, $datatime, $meeting_state, $group);
      
      $datatime = '2009-02-14 15:15:00';
      $meeting_state = Meeting::STATE_NEW;
      $meeting[6] = $this->createMeetingGroup($user, $title, $duration, $datatime, $meeting_state, $group);
      
      $datatime = '2009-02-14 15:20:00';
      $meeting[7] = $this->createMeetingGroup($user, $title, 15, $datatime, $meeting_state, $group2);
      
      $datatime = '2009-02-14 15:40:00';
      $meeting[8] = $this->createMeetingGroup($user2, $title, $duration, $datatime, $meeting_state, $group);
      
      $datatime = '2009-01-14 15:00:00';
      $meeting[9] = $this->createMeetingGroup($user2, $title, 80, $datatime, $meeting_state, $group2);
      
      
      $this->em->flush();
      $month = new \Datetime('2009-02-01 00:00:00');
      
      $this->assertEquals(5, count($this->repo->findByStatesUserAndMonthGroup(array(Meeting::STATE_NOW, Meeting::STATE_NEW), $user, $group, $month)));
      $this->assertEquals(0, count($this->repo->findByStatesUserAndMonthGroup(array(Meeting::STATE_NEW, Meeting::STATE_NOW), $user2, $group2, $month)));
      $this->assertEquals(1, count($this->repo->findByStatesUserAndMonthGroup(array(Meeting::STATE_NEW, Meeting::STATE_NOW), $user, $group2, $month)));
      $this->assertEquals(2, count($this->repo->findByStatesUserAndMonthGroup(array(Meeting::STATE_NEW, Meeting::STATE_NOW), $user2, $group, $month)));

      $month = new \Datetime('2009-01-01 00:00:00');
      $this->assertEquals(1, count($this->repo->findByStatesUserAndMonthGroup(array(Meeting::STATE_NEW, Meeting::STATE_NOW), $user2, $group2, $month)));
    }

    public function testFindMonthsANDRecordings()
    {
        $duration = 30;
        $now = new \DateTime("now");
        $int = new \DateInterval("PT" . $duration . "M");
        $end = clone $now;
        $end->add($int);
        
        $title = "Meeting for testCreateMeeting";
        
        $user = $this->createUser("user");
        $user2 = $this->createUser("user2");


        $duration = 30;
        $now = new \DateTime("now");
        $int = new \DateInterval("PT" . $duration . "M");
        $end = clone $now;
        $end->add($int);
        
        $title = "Meeting for testFindMonthsANDRecordings";
        $datatime = '2009-02-17 11:00:00';
        $meeting_state = Meeting::STATE_NOW;

        $meeting= $this->createMeeting($user, $title, $duration, $datatime, $meeting_state);
       

        $recording = new Recording();
        $recording->setTitle($title);
        $recording->setDateCreated(new \DateTime("now"));
        $recording->setMeeting($meeting);

        $meeting->setState(Meeting::STATE_NOW);
        $this->em->persist($meeting);


        $this->em->flush();
        
        $this->assertEquals(1, count($this->repo->findMonthsAndRecordings(array(Meeting::STATE_NOW, Meeting::STATE_CANCELLED), $user)));
        $this->assertEquals(0, count($this->repo->findMonthsAndRecordings(array(Meeting::STATE_NOW, Meeting::STATE_CANCELLED), $user2)));
    }

    public function testFindMonthsANDRecordingsGroup()
    {
        $duration = 30;
        $now = new \DateTime("now");
        $int = new \DateInterval("PT" . $duration . "M");
        $end = clone $now;
        $end->add($int);
        
        $title = "Meeting for testCreateMeeting";
        
        $user = $this->createUser("user");
        $group = $this->createGroup("Peces", array($user));
        $user2 = $this->createUser("user2");
        $group2 = $this->createGroup("Peces2", array($user2));

        $duration = 30;
        $now = new \DateTime("now");
        $int = new \DateInterval("PT" . $duration . "M");
        $end = clone $now;
        $end->add($int);
        
        $title = "Meeting for testFindMonthsANDRecordingsGroup";
        $datatime = '2009-02-17 11:00:00';
        $meeting_state = Meeting::STATE_NOW;

        $meeting = $this->createMeetingGroup($user, $title, $duration, $datatime, $meeting_state, $group);
        $meeting2 = $this->createMeetingGroup($user2, $title, $duration, $datatime, $meeting_state, $group2);
       

        $recording = new Recording();
        $recording->setTitle($title);
        $recording->setDateCreated(new \DateTime("now"));
        $recording->setMeeting($meeting);

        $recording2 = new Recording();
        $recording2->setTitle($title);
        $recording2->setDateCreated(new \DateTime("now"));
        $recording2->setMeeting($meeting2);

        $meeting->setState(Meeting::STATE_NOW);
        $meeting2->setState(Meeting::STATE_NEW);
        $this->em->persist($meeting);
        $this->em->persist($meeting2);


        $this->em->flush();
        
        $this->assertEquals(1, count($this->repo->findMonthsAndRecordingsGroup($user, $group)));
        $this->assertEquals(1, count($this->repo->findMonthsAndRecordingsGroup($user2, $group2)));

        $this->assertEquals(0, count($this->repo->findMonthsAndRecordingsGroup($user2, $group)));

    }



    public function testfindMonthsByUser()
    {
        $duration = 30;
        $now = new \DateTime("now");
        $int = new \DateInterval("PT" . $duration . "M");
        $end = clone $now;
        $end->add($int);
        
        $title = "Meeting for findMonthsByUser";
        
        $user = $this->createUser("user");
        $group = $this->createGroup("Peces", array($user));
        $user2 = $this->createUser("user2");
        $group2 = $this->createGroup("Peces2", array($user2));

        $duration = 30;
        $now = new \DateTime("now");
        $int = new \DateInterval("PT" . $duration . "M");
        $end = clone $now;
        $end->add($int);
        
        $title = "Meeting for testfindMonthsByUser";
        $datatime = '2009-02-17 11:00:00';
        $meeting_state = Meeting::STATE_NOW;

        $meeting = $this->createMeetingGroup($user, $title, $duration, $datatime, $meeting_state, $group);
        $meeting2 = $this->createMeetingGroup($user2, $title, $duration, $datatime, $meeting_state, $group2);
       

        $recording = new Recording();
        $recording->setTitle($title);
        $recording->setDateCreated(new \DateTime("now"));
        $recording->setMeeting($meeting);

        $recording = new Recording();
        $recording->setTitle($title);
        $recording->setDateCreated(new \DateTime("now"));
        $recording->setMeeting($meeting2);

        $meeting->setState(Meeting::STATE_NOW);
        $meeting2->setState(Meeting::STATE_NEW);
        $this->em->persist($meeting);
        $this->em->persist($meeting2);


        $this->em->flush();
        
        $this->assertEquals(1, count($this->repo->findMonthsByUser($user)));
        $this->assertEquals(1, count($this->repo->findMonthsByUser($user2)));

    }

    private function createMeeting($user, $title, $duration, $datatime_string, $meeting_state)
    {

        $meeting = new Meeting();
        $meeting->setTitle($title);
        $meeting->setDescription($duration . "minutes immediate test meeting");
        //      var_dump($datatime_string);      
        $datatime = \DateTime::createFromFormat('Y-m-d H:i:s', $datatime_string);
        
        $meeting->setDate($datatime);
        $meeting->setPublic(true);
        $meeting->setState($meeting_state);
        $meeting->setOwner($user);
        $meeting->setSalt(rand());
        $meeting->setSecretSalt(rand());
        
        $this->em->persist($meeting);
        return $meeting;
    }

    private function createMeetingGroup($user, $title, $duration, $datatime_string, $meeting_state, $group)
    {

        $meeting = new Meeting();
        $meeting->setTitle($title);
        $meeting->setDescription($duration . "minutes immediate test meeting");
        //      var_dump($datatime_string);      
        $datatime = \DateTime::createFromFormat('Y-m-d H:i:s', $datatime_string);
        
        $meeting->setDate($datatime);
        $meeting->setPublic(true);
        $meeting->setState($meeting_state);
        $meeting->setOwner($user);
        $meeting->setSecretSalt(rand());
        $meeting->setSalt(rand());
        $meeting->setGroup($group);
        
        $this->em->persist($meeting);
        return $meeting;
    }

    private function createUser($name)
    {
        $user = new User();
        $user->setLogin($name);
        $user->setName($name);
        $user->setSurname($name);
        $user->setEmail($name);  
        $user->setPassword($name);
        
        $this->em->persist($user);
        return $user;
    }


    private function createGroup($name, $user)
    {
        $group = new Group();
        $group->setType($name);
        $group->setName($name);
        $group->setKey($name);
        $group->setDescription($name);
        $group->setUsers($user);
        
        $this->em->persist($group);
        return $group;
    }
}