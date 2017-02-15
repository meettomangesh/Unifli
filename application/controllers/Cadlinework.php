<?php
/**
 * The class for managing Cad line work.
 *
 *
 * @author Mangesh Navale
 * @package Admin
 * @since 1.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadlinework extends MY_Controller {

	public function request_work()	{
        $data['title'] = 'Unifli - Request CAD Line Work';
	    $data['content'] = 'backend/request_work';
        $this->load->view($this->main_layout, $data);
	}
	
	public function work_application()	{
        $data['title'] = 'Unifli - CAD Linework Application';
	    $data['content'] = 'backend/work_application';
        $this->load->view($this->main_layout, $data);
	}
}
