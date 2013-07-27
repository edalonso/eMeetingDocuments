<?php

namespace Cmar\MeetingBundle\Service;

use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 *
 */
class Ado
{
    protected $cookie;
    protected $server;
    protected $user;
    protected $password;
    protected $logger;

    public function __construct($server, $user, $password, LoggerInterface $logger = null) 
    {
        $this->server = $server;
        $this->user = $user;
        $this->password = $password;
    
        $this->logger = $logger;

        $this->login();
    }

    /**
     *
     */
    public function setCookie($cookie)
    {
        $this->cookie = $cookie;
    }

    /**
     * Return the Ado Connect cookie 
     * 
     * @return string like "BREEZESESSION=breezns37frrg5fnmvp49;HttpOnly;secure;path=/"
     */
    public function getCookie()
    {
        return $this->cookie;
    }


    /**
     *
     */
    public function getServer()
    {
        return $this->server;
    }


    /**
     * Return the Ado Connect session
     * 
     */
    public function getSession()
    {
        $xml = $this->get("common-info");

        return (string) $xml->{'common'}->{'cookie'};
    }


    /**
     *
     */
    public function login()
    {
        $data = array('login' => $this->user, 'password' => $this->password);
        $ch = curl_init($this->server . '/api/xml?action=login&' . http_build_query($data));
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        preg_match_all('#Set-Cookie: (.*)#', $result, $matches);
        $body = @simplexml_load_string(mb_substr($result, curl_getinfo($ch, CURLINFO_HEADER_SIZE)));

        curl_close($ch);

        if ($status === 200 && isset($matches[1][0]) && $body){
            if($body->{"status"}->attributes()->{"code"} != "no-data"){
                $this->cookie = $matches[1][0];
                return true;
            }
            throw new \LogicException('Ado Service Exception in login, status code:' . 
                                      $status . " (" . $body->{"status"}->attributes()->{"code"} . ")");
        }
        throw new \LogicException('Ado Service Exception in login, status code:' . $status);
    }

    /**
     *
     */
    public function get($action, $parameters = array())
    {
        $url = $this->server . '/api/xml?action=' . $action;
        if (0 !== count($parameters)) {
            $url .= ('&' . http_build_query($parameters));
        }
    
        $ch = curl_init($url);
    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_COOKIE, $this->cookie);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
        $result = curl_exec($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        //var_dump($result);

        if (null !== $this->logger) {
            $this->logger->debug(sprintf('Ado: Response %s on calling %s: %s', $status, $url, $result));
        }

        if ($status !== 200) {
            if (null !== $this->logger) {
                $this->logger->err('Ado Service Exception connecting to server');
            }
            throw new \LogicException('Ado Service Exception connecting to server');
        }

        if (!$xml = simplexml_load_string($result)){
            if (null !== $this->logger) {
                $this->logger->err('Ado Service Exception parsing XML');
            }
            throw new \LogicException('Ado Service Exception parsing XML');
        }

        if ("ok" !== (string)$xml->{'status'}->attributes()->{'code'}){
            $message = 'Ado Service Exception in status response, code: ' . 
                $xml->{'status'}->attributes()->{'code'} . ' in ' . $action . '"' .
                $result . '"';
            if (null !== $this->logger) {
                $this->logger->err($message);
            }
            throw new \LogicException($message);
        }

        return $xml;
    }
 
}

