<?php 

class Kategori extends CI_Controller{
	public function pupuk()
	{
		$data['pupuk'] = $this->model_kategori->data_pupuk()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pupuk', $data);
		$this->load->view('templates/footer');
	}

	public function obat_hama()
	{
		$data['obat_hama'] = $this->model_kategori->data_obat_hama()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('obat_hama', $data);
		$this->load->view('templates/footer');
	}

	public function obat_gulma()
	{
		$data['obat_gulma'] = $this->model_kategori->data_obat_gulma()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('obat_gulma', $data);
		$this->load->view('templates/footer');
	}

	public function alat_pertanian()
	{
		$data['alat_pertanian'] = $this->model_kategori->data_alat_pertanian()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('alat_pertanian', $data);
		$this->load->view('templates/footer');
	}

}