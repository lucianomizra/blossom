<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class APP_Controller extends CI_Controller
{

  public
    $data = array();

  public function __construct()
  {
    parent::__construct();
    $this->load->config('app', TRUE);
  }

}