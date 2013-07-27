<?php

namespace Cmar\MeetingBundle\Service;

/**
 *
 */
interface AdoAdminInterface
{
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
    public function createMeeting($name, $path, \DateTime $date_begin, $user_email, $public = true);

    /**
     * Delete a Meeting by URL
     *
     * @param string $url, 
     * @return 
     */
    public function deleteMeetingByUrl($url);

}

