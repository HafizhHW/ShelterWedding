<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regist extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Regist');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('Register');
    }
}
