<?php

class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Search';
        $this->load->view('layout/header', $data);
        $this->load->view('search/index');
        $this->load->view('layout/footer');
		$this->load->view('home/homeScript.php');
    }
}
?>