<?php
/**
 * The class for managing Login specific actions.
 *
 *
 * @author Akshay Nagare
 * @package Admin
 * @since 1.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function index()	{
        $data['title'] = 'Unifli - Login';
	    $data['content'] = 'backend/login';
        $this->load->view($this->login_layout, $data);
	}
   
}
