<?php
/**
 * The class for managing Invoice/Receipt.
 *
 *
 * @author Mangesh Navale
 * @package Admin
 * @since 1.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Receipts extends MY_Controller {

	public function index()	{
        $data['title'] = 'Unifli - Invoicing / Receipts';
	    $data['content'] = 'backend/receipts';
        $this->load->view($this->main_layout, $data);
	}
}
