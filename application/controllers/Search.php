<?php

class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('layout/header', $data);
        $this->load->view('search/index');
        $this->load->view('layout/footer');
		$this->load->view('home/homeScript.php');
    }
}
?>