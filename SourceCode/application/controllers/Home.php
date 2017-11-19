<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Hardware_model');
        $this->load->model('Member_model');
    }

    public function index()
    {
        $data['hardware'] = $this->Hardware_model->top_product();
        $this->load->view('Home',$data);
    }

    public function user()
    {
        $data['hardware'] = $this->Hardware_model->top_product();
        $this->load->view('user/Home',$data);
    }  
}