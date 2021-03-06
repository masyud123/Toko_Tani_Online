<?php

class Dashboard_admin extends CI_Controller{
	
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1')
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

	public function index()
	{
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_ke_keranjang($id)
	{
		$barang = $this->model_barang->find($id);

		$data = array(
	        'id'      => $barang->id_brg,
	        'qty'     => 1,
	        'price'   => $barang->harga,
	        'name'    => $barang->nama_brg
	);

	$this->cart->insert($data);
	redirect('dashboard');
	}

	public function detail_keranjang()
	{
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('keranjang');
		$this->load->view('templates_admin/footer');
	}

	public function chat()
	{
		$data['chating'] = $this->model_chat->chating();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/chat_Admin', $data);
		$this->load->view('templates_admin/footer');
	}
} 