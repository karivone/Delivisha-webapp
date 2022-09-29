<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param - This function loads the landing page for the application
     * @author - Dennis Otieno
     */
    public function index()
    {
        $this->template->load('public', 'default', 'index');
    }
}
