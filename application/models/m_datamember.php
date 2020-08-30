<?php
class M_datamember extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	
	public function retrieveDataMember($offset, $limit){
		$query = $this->db->query("SELECT * FROM user ORDER BY ID_USER ASC LIMIT $offset, $limit");
		$allcontact = $this->db->query("SELECT * FROM user");
		$jum = $allcontact->num_rows();
		$data = array(
				'allmember' => $query,
				'jumlah' => $jum
				);
		return $data;
	}

	public function profilMember($id){
		$query = $this->db->query("SELECT * FROM user WHERE ID_USER = '$id' ");
		$hasil = $query -> result_array();
		return $hasil;
	}

	public function simpanEditProfil($id,$nama,$username,$email){
		$query = $this->db->query("UPDATE user SET NAMA_LENGKAP = '$nama', USERNAME = '$username', EMAIL='$email' WHERE ID_USER = '$id'");
		return $query;
	}


	public function getDataHistory($id){
		$imt = $this->db->query("SELECT * FROM history_imt WHERE ID_USER = '$id'");
		$lemak = $this->db->query("SELECT * FROM history_lemak WHERE ID_USER = '$id' ");
		$hasil['imt'] = $imt->result_array();
		$hasil['lemak'] = $lemak->result_array();
		return $hasil;
	}

	public function konfirmasiHapusHistory($id){
		$hapus1 = $this->db->query("DELETE FROM history_imt WHERE ID_USER = '$id'");
		$hapus2 = $this->db->query("DELETE FROM history_lemak WHERE ID_USER = '$id'");
		// // $hasil1 = $hapus1->result_array();
		// $hasil2 = $hapus2->result_array();
		// return $id;
	}
	

	public function hapusMember($id){
		$this->db->query("DELETE FROM user WHERE ID_USER = '$id' ");
	}
	
	

}
?>