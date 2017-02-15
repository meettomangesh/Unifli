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
        $this->load->view($this->main_layout, $data);
	}
}
