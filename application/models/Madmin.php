<?php
class Madmin extends CI_Model
{
	public function login($u, $p){
		$q = $this->db->get_where('user', array('userName'=>$u, 'password'=>$p));
		return $q;
	}

	public function getAllData($tabel){
		$q = $this->db->get($tabel);
		return $q;
	}

	public function insert($tabel, $data){
		$this->db->insert($tabel, $data);
	}

	public function getById($tabel, $id){
		return $this->db->get_where($tabel, $id);
	}

	public function update($tabel, $data, $pk, $id){
		$this->db->where($pk, $id);
		$this->db->update($tabel, $data);
	}

	public function delete($tabel, $id, $val){
		$this->db->delete($tabel, array($id => $val));
	}
}
