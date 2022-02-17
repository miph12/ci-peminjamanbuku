<?php 

class kategori extends CI_Controller{
	public function index(){
		$a['hasil_query'] = $this->SI_model->get_kategori();
		// print_r($q);
		$this->load->view('kategori/tampil_kategori',$a);
	}

	public function tambah_kategori(){
		$q['hasil_query'] = $this->SI_model->get_kategori()->result();
		$this->load->view('kategori/form_tambah',$q);
	}
}

 ?>