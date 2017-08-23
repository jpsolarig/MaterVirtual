<?php defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CMS_Controller{
 
  public function __construct()
  {
    parent::__construct();
  }
    
  public function index()
  {
    $url = 'admin/login/';
    $this->data = array(
      'titulo' => 'Login',
      'inicio' => $url.'login',
      'url' => $url,
      'jss' => array('js/'.$url.'login.js')
    );
        
    $this->load->view($url.'plantilla', $this->data);
  }	
}
