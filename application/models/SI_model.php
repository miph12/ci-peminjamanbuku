<?php 

class SI_model extends CI_Model{
	public function get_buku(){
		$q = $this->db->query("SELECT * FROM buku");
		return $q;
	}

	public function bukuwhere($params){
		$this->db->where("id_buku",$params);
		$q = $this->db->get("buku");
		return $q;
	}

	public function get_kategori(){
		$q = $this->db->query("SELECT * FROM kategori");
		return $q;
	}

	public function queryAll($tb_name){
		$q = $this->db->get(tb_name);
		return $q;
	}
	public function querywhere($tb_name,$whereParams){
		$this->db->where($whereParams);
		$q = $this->db->get($tb_name);
		return $q;
	}
	public function querywhere($tb_name,$whereParams){
		$this->db->where($whereParams);
	}

	public function get_menu(){
		$q = $this->db->query("SELECT * FROM menu");
		return $q;
	}
}

 ?>