<?php

class Login extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $data['title'] = 'Login';
        $this->load->view('layout/header', $data);
        $this->load->view('login/login.php');
        $this->load->view('layout/footer.php');
    }
}