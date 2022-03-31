<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Package extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('M_Package');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('Package/V_package');
    }
}
