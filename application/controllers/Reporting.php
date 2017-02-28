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

class Reporting extends MY_Controller {

	public function index()	{
        $data['title'] = 'Unifli - Reporting';
	    $data['content'] = 'backend/reporting';
		$data['is_active_link'] = 'reporting';
        $this->load->view($this->main_layout, $data);
	}
	
}
