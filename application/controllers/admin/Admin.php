<?php 

class Admin extends CI_Controller{

    public function index(){ {
            $data['title'] = 'Admin';
            $this->load->view('admin/adminkelolaakun');

        }
    }
    public function wisata(){
        $data['title'] = 'Admin';
        $this->load->view('admin/adminwisata');
    }
}
?>