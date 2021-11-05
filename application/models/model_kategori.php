<?php

class Model_kategori extends CI_Model{

	public function data_pupuk(){
		return $this->db->get_where('tb_brg',array('kategori' => 'pupuk'));
	} 

	public function data_obat_hama(){
		return $this->db->get_where('tb_brg',array('kategori' => 'obat hama'));
	} 

	public function data_obat_gulma(){
		return $this->db->get_where('tb_brg',array('kategori' => 'obat gulma'));
	} 

	public function data_alat_pertanian(){
		return $this->db->get_where('tb_brg',array('kategori' => 'alat pertanian'));
	} 

	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('tb_brg');
		$this->db->like('nama_brg', $keyword);
		$this->db->or_like('keterangan', $keyword);
		$this->db->or_like('kategori', $keyword);
		return $this->db->get()->result();

	}
}