<?php

class Details extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('Madmin');
    }
    public function index()
    {
        $data = array(
            'title' => 'Details',
        );
        $this->load->view('layout/header', $data);
        $this->load->view('details/index');
        $this->load->view('layout/footer');
        $this->load->view('details/detailsScript');
    }
}
?>