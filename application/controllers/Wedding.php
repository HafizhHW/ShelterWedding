<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wedding extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('Package\V_wedding');
    }
}
