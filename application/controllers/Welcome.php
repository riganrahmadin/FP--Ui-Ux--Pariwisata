<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
class Welcome extends CI_Controller {
	public function __construct() {
	    parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['title'] = 'Home';
		$this->load->view('layout/header', $data);
		$this->load->view('home/home.php');
		$this->load->view('layout/footer');
		$this->load->view('home/homeScript.php');
	}

	public function login(){
		$this->load->model('Madmin');
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => 'Kamu belum memasukan %s.'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Kamu belum memasukan %s.'));
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('admin/login');
		}else {
			// $cek = $this->Madmin->cek_login($u,$p);
			$cek = $this->db->get_where('tbl_admin', array('userName' => $u));
			if($cek->num_rows() >= 1 && password_verify($p, $cek->row()->password)){
			$data_session = array(
				'userName' => $u,
				'status'=>'login'
			);
			$this->session->set_userdata($data_session);
			redirect('adminpanel/dashboard');
		} else {
			$this->session->set_flashdata('flashLogin','Username atau password salah.');
			$this->load->view('admin/login');
		}
	}
	}

	public function logout()
    {
		$this->session->sess_destroy();
        redirect('adminpanel');
    }
}
