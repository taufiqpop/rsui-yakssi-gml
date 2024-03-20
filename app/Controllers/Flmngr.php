<?php

namespace App\Controllers;

class Flmngr extends BaseController
{
    protected $flmngrModel;

    public function __construct()
    {
        $this->flmngrModel = new \EdSDK\FlmngrServer\FlmngrServer::flmngrRequest(['dirFiles' => '/var/www/rsui-yakssi/files']);
    }
    
    public function flmngr()
    {
    }
}
