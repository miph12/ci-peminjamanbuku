<?php 

class buku extends CI_Controller{
	public function index(){
		$q['hasil_query'] = $this->SI_model->get_buku();
		// print_r($q);
		$this->load->view('buku/tampil_buku',$q);
	}

	public function tambah_buku(){
		$q['hasil_query'] = $this->SI_model->get_kategori()->result();
		$this->load->view('buku/form_tambah',$q);
	}

	public function simpan_buku(){
		$in['id_kategori'] = $this->input->post("kategori");
		$in['judul'] = $this->input->post("judul");
		$in['pengarang'] = $this->input->post("pengarang");
		$in['penerbit'] = $this->input->post("penerbit");
		$in['harga'] = $this->input->post("harga");
		$in['halaman'] = $this->input->post("halaman");
		$in['stok'] = $this->input->post("stok");

		$this->db->insert("buku",$in);
		redirect('buku');
	}

	public function edit_buku($id){
		$q['hasil_query'] = $this->SI_model->get_kategori()->result();
		$get_buku['get_buku'] = $this->SI_model->bukuwhere($id)->row();
		$this->load->view('buku/form_edit',$q);
	}

	public function update_buku(){
		$id = $this->input->post("id_buku");
		$in['id_kategori'] = $this->input->post("kategori");
		$in['judul'] = $this->input->post("judul");
		$in['pengarang'] = $this->input->post("pengarang");
		$in['penerbit'] = $this->input->post("penerbit");
		$in['harga'] = $this->input->post("harga");
		$in['halaman'] = $this->input->post("halaman");
		$in['stok'] = $this->input->post("stok");

		$this->db->where("id_buku",$id);
		$this->db->update("buku",$id);
		redirect('buku');
	}

	public function hapus_buku($params){
		$this->db->delete("buku", array("id_buku"=>$params));
		redirect('buku');
	}
}

?>