<?php
/**
 * The class for managing Tickets.
 *
 *
 * @author Mangesh Navale
 * @package Admin
 * @since 1.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets extends MY_Controller {

	public function index()	{
        $data['title'] = 'Unifli - Raise a Ticket';
	    $data['content'] = 'backend/tickets';
	    $data['is_active_link'] = 'tickets';
        $this->load->view($this->main_layout, $data);
	}
	
	public function support()	{
        $data['title'] = 'Unifli - Support';
	    $data['content'] = 'backend/support';
	    $data['is_active_link'] = 'support';
        $this->load->view($this->main_layout, $data);
	}
}
