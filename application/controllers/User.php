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
	
	public function __construct() {
		
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('user_model');
		
	}
	

	public function account() {
		
		$this->authRedirect();
        $data['title'] = 'Unifli - Account';
	    $data['content'] = 'backend/account';
	    $data['is_active_link'] = 'dashboard';
        $this->load->view($this->main_layout, $data);
	
	}
	
	public function profile() {
    
		$this->authRedirect();
		$data['title'] = 'Unifli - Profile';
	    $data['content'] = 'backend/profile';
	    $data['is_active_link'] = 'profile';
		$user_id = $_SESSION['user_id'];
		if($this->input->post()) {
			$post_data = array(
               'name' => $this->input->post('name'),
               'organisation' => $this->input->post('organisation'),
               'address' => $this->input->post('address'),
               'state' => $this->input->post('state'),
               'website' => $this->input->post('website'),
               'email' => $this->input->post('email'),
               'designation' => $this->input->post('designation'),
               'mobile' => $this->input->post('mobile'),
               'city' => $this->input->post('city'),
               'zip' => $this->input->post('zip'),
            );
			$this->user_model->update_user($post_data, $this->input->post('uuid'));	
			$data['success_message'] = 'User updated successfully.';
		}
		$user    = $this->user_model->get_user($user_id);
		$data['user'] = $user;
        $this->load->view($this->main_layout, $data);
	
	}
	
	public function dashboard()	{
	
		$this->authRedirect();
		$data['title'] = 'Unifli - Dashboard';
	    $data['content'] = 'backend/dashboard';
	    $data['is_active_link'] = 'dashboard';
        $this->load->view($this->main_layout, $data);
	
	}
	
	/**
	 * login function.
	 * 
	 * @access public
	 * @return void
	 */
	public function login() {
		
		$data['title'] = 'Unifli - Login';
	    $data['content'] = 'backend/login';
		$data['is_active_link'] = '';
		
        if($this->input->post()) {
			// load form helper and validation library
			$this->load->helper('form');
			$this->load->library('form_validation');
		
			// set validation rules
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
		
			if ($this->form_validation->run() == false) {
				
				// validation not ok, send validation errors to the view
				$data['error_message'] = 'Please enter valid username & password.';
				$this->load->view($this->login_layout, $data);
				
			} else {
				
				// set variables from the form
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				
				if ($this->user_model->resolve_user_login($username, $password)) {
					
					$user_id = $this->user_model->get_user_id_from_username($username);
					$user    = $this->user_model->get_user($user_id);
					
					// set session user datas
					$_SESSION['user_id']      = (int)$user->uuid;
					$_SESSION['username']     = (string)$user->username;
					$_SESSION['name']     = (string)$user->name;
					$_SESSION['logged_in']    = (bool)true;
					$_SESSION['is_active'] = (bool)$user->is_active;
					$_SESSION['user_access_id']     = (int)$user->user_access_id;
					redirect(base_url().'user','refresh');

					} else {
					
					// login failed
					$data['error_message'] = 'Wrong username or password.';
				
					// send error to the view
					$this->load->view($this->login_layout, $data);;
					
				}
			} 
					
		} else {
			
			$this->load->view($this->login_layout, $data);			

		}
	}
	
	public function index()	{

        if(!isset($_SESSION['logged_in'])) {
			//$this->login(); 
			redirect(base_url().'user/login','refresh'); 
		} else {
			if($_SESSION['user_access_id'] == 1) {
				
				$data['title'] = 'Unifli - Users';
				$data['content'] = 'backend/user/index';
				$data['is_active_link'] = 'user';
				$data['all_user'] = $this->user_model->get_all_user($_SESSION['user_id']);
				$this->load->view($this->main_layout, $data);
			
			} else { 
				
				$this->dashboard();
			
			}
		} 
	}
	
	public function create_user()	{

		$this->authRedirect();
		
		if($_SESSION['user_access_id'] == 1) {
			
			if($this->input->post()) {
				// load form helper and validation library
				$this->load->helper('form');
				$this->load->library('form_validation');

				// set validation rules
				$this->form_validation->set_rules('username', 'Username', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				$this->form_validation->set_rules('name', 'Name', 'required');
				$this->form_validation->set_rules('user_access', 'User Access', 'required');
				
				if ($this->form_validation->run() == false) {
				
				// validation not ok, send validation errors to the view
				$data['error_message'] = 'Please enter the required fields.';			
				} else {
				
					$post_data = array(
					   'name' => $this->input->post('name'),
					   'organisation' => $this->input->post('organisation'),
					   'user_access_id' => $this->input->post('user_access'),
					   'address' => $this->input->post('address'),
					   'state' => $this->input->post('state'),
					   'website' => $this->input->post('website'),
					   'email' => $this->input->post('email'),
					   'username' => $this->input->post('username'),
					   'password' => $this->input->post('password'),
					   'designation' => $this->input->post('designation'),
					   'mobile' => $this->input->post('mobile'),
					   'phone' => $this->input->post('phone'),
					   'city' => $this->input->post('city'),
					   'zip' => $this->input->post('zip'),
					   'users_created_date' => 'now()',
					   'users_updated_date' => 'now()',
					);
					$this->user_model->create_user($post_data);	
					$data['success_message'] = 'User created successfully.';
				}
			}

			$data['title'] = 'Unifli - Users';
			$data['content'] = 'backend/user/create_user';
			$data['is_active_link'] = 'user';
			$data['all_user_access'] = $this->user_model->get_user_access();
			$this->load->view($this->main_layout, $data);
		
		} else { 
			
			$this->dashboard();
		
		}
		
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

	/**
	* logout function.
	* 
	* @access public
	* @return void
	*/
	public function logout() {

		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			
		}
		$this->login();

	}
	
	public function authRedirect() {

		if(!isset($_SESSION['logged_in'])) {
			//$this->login(); 
			redirect(base_url().'user/login','refresh'); 
		}

	}


}
