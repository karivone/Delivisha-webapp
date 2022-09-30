<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @param - This file contains all the functions that run the dashboard page
 */
class Dashboard extends CI_Controller
{
    // Magic function
    public function __construct()
    {
        parent::__construct();
    }

    // This function loads the dashboard landing page
    public function index()
    {
        $data = array(
            'title' => 'Welcome to Delivisha Backend',
        );

        $this->template->load('admin', 'default', 'index', $data);
    }
}
