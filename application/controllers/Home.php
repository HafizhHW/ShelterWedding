<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mhome');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->helper('url');
        // $this->load->view('V_Home');
        $this->load->view('V_Home2');
    }

    // public function Login()
    // {
    //     check_already_login();
    //     $this->load->view('Login');
    // }

    // public function week()
    // {

    //     $data['hasil']=$this->Mhome->get_month();
    //     $data['hasil']=$this->Mhome->get_week();
    //     // $data=array_merge($data1,$data2);
    //     // $data['report'] = $this->MHome->get_month();
    //     // var_dump($data['report']);
    //     $this->template->load('template', 'Home', $data) ;
    //     // $this->template->load('template', 'Home', compact('data1','data2','data3') ;
    // }

}
