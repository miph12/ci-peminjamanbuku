<?php 

class menu extends CI_controller{
	public function index(){
		$q['hasil_query'] = $this->SI_model->get_menu();
		$this->load->view('menu/tampil_menu',$q);
	}

	public function tambah_menu(){
		$q['hasil_query'] = $this->SI_model->get_menu()->result();
		$this->load->view('menu/form_tambah');
	}

	public function simpan_menu(){
		$in['nm_menu'] = $this->input->post("menu");
		$in['link'] = $this->input->post("link");
		$in['status'] = $this->input->post("status");
		$in['aktif'] = $this->input->post("aktif");
		$in['urutan'] = $this->input->post("urutan");
		$in['subdari'] = $this->input->post("subdari");
		$in['costome_style'] = $this->input->post("costume_style");

		$this->db->insert("menu",$in);
		redirect('menu');
	}
}


?>