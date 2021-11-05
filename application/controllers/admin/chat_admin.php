<?php

class Chat_admin extends CI_Controller{

	public function chat()
		{
			$data['chating'] = $this->model_chat->chating();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/chat_Admin', $data);
			$this->load->view('templates_admin/footer');
		}

	public function tulis_psn()
	{
		$nama			= $this->input->post('nama');
		$pesan			= $this->input->post('pesan');

		$data = array( 
			'nama'	 		=> $nama, 
			'pesan' 		=> $pesan
		);

		$this->model_barang->tambah_pesan($data, 'tb_chating');
		redirect('admin/chat_admin/chat');
	}
}