<?php
class MY_Controller extends CI_Controller {
 
  public $login_layout;
  public $main_layout;
 
  public function __construct()
  {
    parent::__construct();
    $this->login_layout = 'backend/layouts/login_main';
    $this->main_layout = 'backend/layouts/main';
  }
}
?>