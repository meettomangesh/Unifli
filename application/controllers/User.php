<?php
/**
 * The class for managing Login specific actions.
 *
 *
 * @author Mangesh Navale
 * @package Admin
 * @since 1.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function account()	{
        $data['title'] = 'Unifli - Account';
	    $data['content'] = 'backend/account';
	    $data['is_active_link'] = 'dashboard';
        $this->load->view($this->main_layout, $data);
	}
	
	public function profile()	{
        $data['title'] = 'Unifli - Profile';
	    $data['content'] = 'backend/profile';
	    $data['is_active_link'] = 'profile';
        $this->load->view($this->main_layout, $data);
	}
	
	 public function dashboard()	{
        $data['title'] = 'Unifli - Dashboard';
	    $data['content'] = 'backend/dashboard';
	    $data['is_active_link'] = 'dashboard';
        $this->load->view($this->main_layout, $data);
	}
	
	public function login()	{
        $data['title'] = 'Unifli - Login';
	    $data['content'] = 'backend/login';
		$data['is_active_link'] = '';
        $this->load->view($this->login_layout, $data);
	}
	
	public function index()	{
        /*$data['title'] = 'Unifli - Login';
	    $data['content'] = 'backend/login';
		$data['is_active_link'] = '';
        $this->load->view($this->login_layout, $data);*/
		$this->login();
	}
	
	public function forget_password()	{
        /*$data['title'] = 'Unifli - Forget Password';
	    $data['content'] = 'backend/forget_password';
		$data['is_active_link'] = '';
        $this->load->view($this->login_layout, $data);*/
		$this->login();
	}
	
	public function reset_password()	{
        /*$data['title'] = 'Unifli - Reset Password';
	    $data['content'] = 'backend/reset_password';
		$data['is_active_link'] = '';
        $this->load->view($this->login_layout, $data);*/
		$this->login();
	}
	
	
}
