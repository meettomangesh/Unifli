<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class User_model extends CI_Model {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}
	
	/**
	 * create_user function.
	 * 
	 * @access public
	 * @param mixed $username
	 * @param mixed $email
	 * @param mixed $password
	 * @return bool true on success, false on failure
	 */
	public function create_user($data) {
		
		$data['password'] = $this->hash_password($data['password']);
		return $this->db->insert('users', $data);
		
	}
	
	public function update_user($data, $uuid) {
		
		$this->db->where('uuid', $uuid);
		return $this->db->update('users', $data);
		
	}
	
	
	/**
	 * resolve_user_login function.
	 * 
	 * @access public
	 * @param mixed $username
	 * @param mixed $password
	 * @return bool true on success, false on failure
	 */
	public function resolve_user_login($username, $password) {

		$this->db->select('password');
		$this->db->from('users');
		$this->db->where('username', $username);
		$hash = $this->db->get()->row('password');
		
		return $this->verify_password_hash($password, $hash);
		
	}
	
	/**
	 * get_user_id_from_username function.
	 * 
	 * @access public
	 * @param mixed $username
	 * @return int the user id
	 */
	public function get_user_id_from_username($username) {
		
		$this->db->select('uuid');
		$this->db->from('users');
		$this->db->where('username', $username);

		return $this->db->get()->row('uuid');
		
	}
	
	/**
	 * get_user function.
	 * 
	 * @access public
	 * @param mixed $user_id
	 * @return object the user object
	 */
	public function get_user($user_id) {
		
		$this->db->from('users');
		$this->db->join('users_acess','users.user_access_id = users_acess.user_acess_uuid');
		$this->db->where('uuid', $user_id);
		return $this->db->get()->row();
		
	}
	
	/**
	 * get_user_access function.
	 * 
	 * @access public
	 * @return object the user access object
	 */
	public function get_user_access() {
		$this->db->select(array('user_acess_uuid','acess_name'));
		$this->db->from('users_acess');
		return $this->db->get()->result();
		
	}
	
	/**
	 * get_user function.
	 * 
	 * @access public
	 * @param mixed $user_id
	 * @return object the user object
	 */
	public function get_all_user($user_id) {
		
		$this->db->from('users');
		$this->db->join('users_acess','users.user_access_id = users_acess.user_acess_uuid');
		$this->db->where_not_in('uuid', $user_id);
		return $this->db->get()->result();
		
	}
	
	
	/**
	 * hash_password function.
	 * 
	 * @access private
	 * @param mixed $password
	 * @return string|bool could be a string on success, or bool false on failure
	 */
	private function hash_password($password) {
		
		return password_hash($password, PASSWORD_BCRYPT);
		
	}
	
	/**
	 * verify_password_hash function.
	 * 
	 * @access private
	 * @param mixed $password
	 * @param mixed $hash
	 * @return bool
	 */
	private function verify_password_hash($password, $hash) {
		
		return password_verify($password, $hash);
		
	}
	
}
