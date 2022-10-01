<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @param - This file contains methodes for loading all the front pages
 * @author - Dennis Otieno
 */
class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

	// Function for loading the landing page
    public function index()
    {
        $data = array(
            'title' => 'Welcome to Delivisha logistics',
        );
        $this->template->load('public', 'default', 'index', $data);
    }

    // Function for loading tracking page
    public function tracking()
    {
        $data = array(
            'title' => 'Welcome to Delivisha logistics',
        );

        $this->template->load('public', 'default', 'tracking/index', $data);
    }

    // Function for loading contact page
    public function contact()
    {
        $data = array(
            'title' => 'Talk to us, let us know how we can help.',
        );

        $this->template->load('public', 'default', 'contact/index', $data);
    }

	// This function is for sending message to the backend
	public function send_message()
	{
		// Check if request is AJAX
		if (!$this->input->is_ajax_request()) {
			return false;
		}

		// Get data from the form inputs and sanitize
		$data = array(
			'full_name' => html_escape($this->input->post('')),
			'email' => html_escape($this->input->post('')),
			'phone' => html_escape($this->input->post('')),
			'subject' => html_escape($this->input->post('')),
			'message' => html_escape($this->input->post(''))
		);

		// Call the model and pass data to it
	}

	// Function for loading orders page
	public function orders()
	{
		$data = array(
			'title' => 'Place your order and get it delivered',
		);

		$this->template->load('public', 'default', 'orders/index', $data);
	}
}
