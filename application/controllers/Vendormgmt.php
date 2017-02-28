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

class Vendormgmt extends MY_Controller {

	public function index()	{
        $data['title'] = 'Unifli - Vendor Management';
	    $data['content'] = 'backend/vendormgmt';
		$data['is_active_link'] = 'vendor_mgmt';
        $this->load->view($this->main_layout, $data);
	}
	
}
