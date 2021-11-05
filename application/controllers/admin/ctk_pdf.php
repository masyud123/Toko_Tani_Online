<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctk_pdf extends CI_Controller {
	function __construct(){
		parent::__construct();
		require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
	}

	public function pdf(){
		$data['pesanan'] = $this->model_invoice->tampil_pesanan()->result();
		$dompdf = new Dompdf();

		$html = $this->load->view('admin/ctk_pdf', $data, true);
		$dompdf->load_html($html);
		$dompdf->set_paper('A4', 'potrait');
		$dompdf->render();
		$pdf = $dompdf->output();
		$dompdf->stream('Laporan Pembelian.pdf', array("Attachment" =>false));

	}
}   