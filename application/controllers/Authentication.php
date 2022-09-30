<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
* @param - This file runs all the authentication functions for the login and registration
* @author - Dennis Otieno
*/
class Authentication extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    // This functions loads the login page
    public function index()
    {
        $this->template->load('public', 'default', 'auth/login');
    }

    // This function loads the registration page
    public function registration()
    {
        $this->template->load('public', 'default', 'auth/signup');
    }
}
