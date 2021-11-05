<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Lanjutan extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '2')
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Anda Belum Login!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
					redirect('auth/login');
		}
	}

	public function bayar()
	{
		$data['bayaran'] = $this->model_invoice->tampil_bayar();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('hal_bayar', $data);
		$this->load->view('templates/footer');
	}
  
	public function tambah_gb()
	{
		$nama			= $this->input->post('nama');
		$gambar			= $_FILES['gambar']['name'];
		if ($gambar	=''){}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';
 
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar gagal diupload";
			} else {
				$gambar=$this->upload->data('file_name');
			}
		}

		$data = array( 
			'nama'	 		=> $nama, 
			'gambar' 		=> $gambar
		);

		$this->model_barang->tambah_bukti($data, 'tb_pembayaran');
		redirect('lanjutan/bayar');
	}

	public function hapus ($id)
	{
		$where = array('id_gb' => $id);
		$this->model_invoice->hapus($where,'tb_pembayaran');
		redirect('lanjutan/bayar');
	}

	public function riwayat_belanja()
	{
		$data['riwayat'] = $this->model_invoice->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('riwayat_belanja', $data);
		$this->load->view('templates/footer');

	}

	public function detail($id_invoice)
	{
		$data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
		$data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_belanja', $data);
		$this->load->view('templates/footer');

	}

}