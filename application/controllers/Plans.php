<?php
/**
 * The class for managing Plans.
 *
 *
 * @author Mangesh Navale
 * @package Admin
 * @since 1.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Plans extends MY_Controller {

	public function index()	{
        $data['title'] = 'Unifli - Plans';
	    $data['content'] = 'backend/plans';
		$data['is_active_link'] = 'plans';
        $this->load->view($this->main_layout, $data);
	}
}
