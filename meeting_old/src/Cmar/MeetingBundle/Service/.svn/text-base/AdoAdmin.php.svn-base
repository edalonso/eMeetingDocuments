<?php

namespace Cmar\MeetingBundle\Service;

use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 *
 */
class AdoAdmin extends Ado implements AdoAdminInterface
{
    protected $recordings_folder_id;

    public function __construct($server, $user, $password, $recordings_folder_id, LoggerInterface $logger = null) 
    {
        parent::__construct($server, $user, $password, $logger);
        $this->recordings_folder_id = intval($recordings_folder_id);
    }

    /**
     *
     */
    public function getMyList()
    {
        $xml = $this->get('report-my-meetings');   
        $aux = array();
    
        foreach($xml->{'my-meetings'}->{'meeting'} as $a){
            $aux[] = array("name" => $a->{"name"}, "sco" => $a->attributes()->{"sco-id"});
        }
    
        return $aux;
    }  
  
    /**
     *
     */
    public function getArchive($sco_id){
        $xml = $this->get('sco-expanded-contents', array('sco-id' => $sco_id,
                                                         'filter-icon' => 'archive', 'sort-date-begin' => 'desc'));
		      
        return ($xml->{'expanded-scos'}->{'sco'});
    }

    /**
     * Return permision_id {view, denied} 
     */
    public function getStatus($sco_id)
    {
        $xml = $this->get('permissions-info', array('acl-id' => $sco_id, "principal-id" => "public-access"));
        
        return "" . ($xml->{"permission"}["permission-id"]);
    }

    /**
     *
     */
    public function getScoContents($sco_id)
    {
        $xml = $this->get('sco-contents', array('sco-id' => $sco_id));
    
        return $xml;
    }

    /**
     *
     */
    public function getCommonInfo()
    {
        $xml = $this->get('common-info');
    
        return $xml;
    }

    /**
     *
     */
    public function getScoByUri($uri)
    {
        $xml = $this->get('sco-by-url', array('uri-path' => $uri));
    
        return $xml;
    }
  
  
    /**
     * Return sco shorcuts
     *
     * @return SimpleXMLElement if type is null
     *         string with cso_id if type is "shared-meeting-templates", "my-meeting-templates", 
     *                "my-meetings", "my-content", "content", "user-content", "meetings", "user-meetings", 
     *		    "account-custom", "forced-archives" or  "chat-transcripts"
     */
    function getScoShortcuts($type = null)
    {
        $xml = $this->get('sco-shortcuts');

        if(null === $type){
            return $xml;
        }
    
        $sco_id = null;
        foreach($xml->{'shortcuts'}->{'sco'} as $a) {
            if ($type === (string)$a->attributes()->{'type'}) {
                $sco_id = (string)$a->attributes()->{"sco-id"};
            }
        }    
    
        if(null === $sco_id){
            throw new \LogicException('Ado Service Exception');
        }

        return $sco_id;
    }
  

    /**
     * Create a Meeting
     *
     * @param string $name, 
     * @param string $path, 
     * @param \DateTime $date_begin
     * @param \DateTime $date_end
     * @param string $user_email
     * @param boolen $public
     * @param
     *
     * @return string
     */
    public function createMeeting($name, $path, \DateTime $date_begin, $user_email, $public = true)
    {
        //FIXME check now <? date_begin < date_end

        $sco_id = $this->getScoShortcuts('meetings');
        $user_id = $this->principalFindByEmail($user_email); //FIXME try exception

        $params = array('type' => 'meeting', 'name' => $name, 'folder-id' => $sco_id, 
                        'date-begin' => $date_begin->format("Y-m-d\TH:i"), 
                        'url-path' => $path);    

        //CHECK path repeat.
        $xml = $this->get('sco-update', $params);

    

        if(null === $acl_id = (string) $xml->{'sco'}->attributes()->{"sco-id"}){
            throw new \LogicException('Ado Service Exception');
        }


        //Permissions public access

        //$public_perm = $public ? 'mini-host': 'denied';
        //TODO de momento todas las reuniones en el ADO son públicas para que cualquier usuario pueda acceder
        $public_perm = 'mini-host';
        $xml = $this->get('permissions-update', array('acl-id' => $acl_id, 
                                                      'principal-id' => 'public-access', 
                                                      'permission-id' => $public_perm)
                          );

        //Permissions user
        $xml2 = $this->get('permissions-update', array('acl-id' => $acl_id, 
                                                       'principal-id' => $user_id,
                                                       'permission-id' => 'host')
                           );


        return $this->getServer() . "/" . $path;
        //return $acl_id;
    }



    /**
     * Delete a Meeting
     *
     * @param string $sco_id, 
     * @return 
     */
    public function deleteMeeting($id)
    {
        //FIXME check now <? date_begin < date_end
        $params = array('sco_id' => $id);
        $xml = $this->get('sco-delete', $params);
    
        return $xml;
    }


    /**
     * Delete a Meeting by URL
     *
     * @param string $url, 
     * @return array Recording
     */
    public function deleteMeetingByUrl($url)
    {
        //FIXME check now <? date_begin < date_end

        $parse = parse_url($url);
        $xml = $this->get('sco-by-url', array('url-path' => $parse["path"]));

        if(null === $sco_id = (string) $xml->{'sco'}->attributes()->{"sco-id"}){
            throw new \LogicException('Ado Service Exception');
        }

        $recordings = array();

        $xml = $this->get('sco-expanded-contents', array('sco-id' => $sco_id, 'filter-icon' => 'archive', 'sort-date-begin' => 'desc'));
        if ($xml->{'expanded-scos'}->{'sco'}->{'name'} != ''){//Si hay grabaciones
            foreach($xml->{'expanded-scos'}->{'sco'} as $a) {
                //TODO user un array en vez de clase Recording. AdoAdmin no tiene que entiender de entidades.
                /*$this->logger->info("Valor de var1: " . $a->{'url-path'});
                  $this->logger->info("Valor de var2: " . $a->{'name'});
                  $this->logger->info("Valor de var3: " . $a->{'date-created'});
                  $this->logger->info("Valor de var4: " . $a->attributes()->{'display-seq'});
                  $this->logger->info("Valor de var5: " . $a->attributes()->{'sco depth'});
                  $this->logger->info("Valor de var6: " . $a->attributes()->{'sco-id'});
                  $this->logger->info("Valor de var7: " . $a->attributes()->{'folder-id'});
                  $this->logger->info("Valor de var8: " . $a->attributes()->{'source-sco-id'});
                  $this->logger->info("Valor de var9: " . $a->attributes()->{'source-sco-type'});*/
                $recording = array();
                $recording["TITLE"] = $a->{'name'};
                $recording["URL"] = $this->server . $a->{'url-path'};
                $recording["DATETIMECREATED"] = \DateTime::createFromFormat('Y-m-d\TH:i:s.uP', (string) $a->{'date-created'});
                $recordings[] = $recording;

                $xml = $this->get('sco-update', array('name' => substr($a->{'date-created'} . " ".$a->{'name'}, 0, 55), 'sco-id' => (integer) $a->attributes()->{'sco-id'}));
                $xml = $this->get('sco-move', array('folder-id' => $this->recordings_folder_id, 'sco-id' => (integer) $a->attributes()->{'sco-id'}));
                $xml = $this->get('permissions-update', array('acl-id'  => (integer) $a->attributes()->{'sco-id'}, 'principal-id' => 'public-access', 'permission-id' => 'view'));
            }
        }

        $xml = $this->get('sco-delete', array('sco-id' => $sco_id));
    
        return $recordings;
    }



    /**
     *
     */
    public function principalFindByEmail($email)
    {
        //FIXME Check if User exists
        $out = $this->get('principal-list-by-field', array('value' => $email));

        return (string) $out->{'principal-list'}->{'principal'}->attributes()->{'principal-id'};
    }

    /**
     *
     */
    public function principalFindByName($name)
    {
        //FIXME Check if User exists
        $out = $this->get('principal-list', array('filter-name' => $name));

        return (string) $out->{'principal-list'}->{'principal'}->attributes()->{'principal-id'};
    }


    /**
     *
     * Lista de todos los usuarios en Ado, podemos comprobar si son creados por meeting si el campo description es: Automatically created user in meeting
     */
    public function principalList()
    {
        $xml = $this->get('principal-list');   
        $aux = array();
    
        foreach($xml->{'principal-list'}->{'principal'} as $a){
            $aux[] = array("name" => $a->{"name"}, "login" => $a->{"login"},
                           "email" => $a->{"email"}, "id" => $a->attributes()->{"principal-id"}, "description" => $a->{"description"});
        }
    
        return $aux;
    }


    /**
     *
     */
    public function changeNickName($login, $email, $password, $first_name, $last_name, $principal_id = null)
    {
        if (!is_null($principal_id)) {
            $params = array('type' => 'user', 'has-children' => 'false', 'send-email ' => 'false', 'login' => $login, 
                            'email' => $email, 'password' => $password, 'first-name' => $first_name,
                            'last-name' => $last_name);
            
            
            $params['principal-id'] = $principal_id;
            $xml = $this->get('principal-update', $params);
        }
              
        return ($xml);
    }


    /**
     *
     */
    public function principalUpdate($login, $email, $password, $first_name, $last_name, $description, $principal_id = null)
    {
        $params = array('type' => 'user', 'has-children' => 'false', 'send-email ' => 'false', 'login' => $login, 
                        'email' => $email, 'password' => $password, 'first-name' => $first_name,
                        'last-name' => $last_name, 'description' => $description);
        if (!is_null($principal_id)) {
            $params['principal-id'] = $principal_id;
        }
        $xml = $this->get('principal-update', $params);
		      
        return ($xml);
    }

    /**
     *
     */
    public function principalDelete($id)
    {
        $xml = $this->get('principals-delete', array('principal-id' => $id));
		      
        return ($xml);
    }

    /**
     *
     */
    public function reportActiveMeetings()
    {
        $xml = $this->get('report-active-meetings');
		      
        return ($xml);
    }
}

