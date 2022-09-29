<?php
/**
 * This controller is for passing dynamic data into the front-end and the backend
 */

class My_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
}

class Admin_Controller extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
}

class Public_Controller extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
}
