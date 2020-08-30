<?php 

class DataListTipsKesehatan extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}


	
	public function loadListTipsKesehatan($offset, $limit){
		$query = $this->db->query("SELECT * FROM tips_kesehatan ORDER BY DATE_TIPS ASC LIMIT $offset, $limit");
		$all_tips = $this->db->query("SELECT * FROM tips_kesehatan");
		$jum = $all_tips->num_rows();
		$data = array(
				'alltips' => $query,
				'jumlah' => $jum
				);
		return $data;
	}

	public function getDataTipsKesehatan($id){
		$query = $this->db->query("SELECT * FROM tips_kesehatan WHERE ID_TIPS = $id");
		$hasil = $query -> result_array();
		return $hasil;
	}

	public function simpanTipsKesehatan($data){
		// $query = $this->db->query("INSERT INTO produk VALUES('', '$judul', '$gambar', '$isi', NOW())");
		$res = $this->db->insert('tips_kesehatan',$data);
		return $res;
	}

	public function simpanEditTipsKesehatan($id,$judul,$isi){
		$query = $this->db->query("UPDATE tips_kesehatan SET JUDUL = '$judul', ISI = '$isi' WHERE ID_TIPS = '$id'");

	}

	public function HapusTips($id){
		$query = $this->db->query("DELETE FROM tips_kesehatan WHERE ID_TIPS = '$id'");

	}
	
	
}
	
	
	
 ?>