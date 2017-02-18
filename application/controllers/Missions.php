<?php
/**
 * The class for managing Missions.
 *
 *
 * @author Mangesh Navale
 * @package Admin
 * @since 1.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Missions extends MY_Controller {

	public function index()	{
        $data['title'] = 'Unifli - Missions';
	    $data['content'] = 'backend/missions';
		$data['is_active_link'] = 'missions';
        $this->load->view($this->main_layout, $data);
	}
	
	public function create_mission()	{
        $data['title'] = 'Unifli - Create Mission';
	    $data['content'] = 'backend/create_mission';
		$data['is_active_link'] = 'missions';
        $this->load->view($this->main_layout, $data);
	}
	
	public function mission_analyze()	{
        $data['title'] = 'Unifli - Create Mission';
	    $data['content'] = 'backend/mission_analyze';
		$data['is_active_link'] = 'missions';
        $this->load->view($this->main_layout, $data);
	}
	
}
