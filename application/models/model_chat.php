<?php 

class Model_chat extends CI_Model{

	public function chating()
	{
		$user =  $this->session->userdata('username');
		if($user == "admin"){
			$result = $this->db->get('tb_chating');
			if($result->num_rows() >= 0){
				return $result->result();
			} else {
				return false;
			}
		} else {
			$result = $this->db->get_where('tb_chating', array('nama' => $user));
			if($result->num_rows() >= 0){
				return $result->result();
			} else {
				return false;
			}
		}
	}

	public function tambah_pesan($data,$table){
		$this->db->insert($table,$data);
	}

}