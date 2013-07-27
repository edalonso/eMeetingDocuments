<?php

namespace Cmar\MeetingBundle\Service;

use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 *
 */
class AdoFactory
{
    private $server;
    private $logger;    

    
    public function __construct($server, LoggerInterface $logger = null) 
    {
        $this->server = $server;
        $this->logger = $logger;
    }

    /**
     *
     * @return Ado Service
     */
    //FIXME A service or static function????
    public function getClient($user, $password)
    {
        if (null !== $this->logger) {
            $this->logger->info(sprintf('AdoFactory: create new client to %s', $user));
        }
        
        return new Ado($this->server, $user, $password, $this->logger);
    }
    
}

