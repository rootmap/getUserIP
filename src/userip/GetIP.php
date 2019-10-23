<?php 
namespace GetIP;

class GetIP
{
    /**
     * get IP address of the user
     *
     * @return void
     */
    public static function getIPAddress()
    {
        return $_SERVER['REMOTE_ADDR'];
    }
}