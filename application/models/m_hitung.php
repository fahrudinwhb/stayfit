<?php
class M_hitung extends CI_Model{
	function __construct(){
		$this->load->database();
	}

	function getSolusi($id){
		$solusi;
		$query = "SELECT SOLUSI_IMT FROM IMT WHERE ID_IMT = '$id'";
		$result = $query = $this->db->query($query);
		foreach ($result->result_array() as $r) {
			$solusi = $r['SOLUSI_IMT'];
		}
		return $solusi;
	}

	function getSolusiLemak($id){
		$solusi;
		$query = "SELECT SOLUSI_LEMAK FROM PRESENTASE_LEMAK WHERE ID_LEMAK = '$id'";
		$result = $query = $this->db->query($query);
		foreach ($result->result_array() as $r) {
			$solusi = $r['SOLUSI_LEMAK'];
		}
		return $solusi;
	}
	
	function simpanIMT($hasil,$id){
		$row = array(
				'ID_USER' => 'ID_USER',
				'HISTORY_IMT' => 'HISTORY_IMT'
			);
		$value = array(
				'ID' => $id,
				'HASIL' => $hasil
			);
		$res = "INSERT INTO history_imt (ID_USER,HISTORY_IMT) VALUES ('$id' , $hasil)";
		$run = $this->db->query($res);
		return $run;
	}

	function simpanLemak($hasil,$id){
		$row = array(
				'ID_USER' => 'ID_USER',
				'HISTORY_IMT' => 'HISTORY_IMT'
			);
		$value = array(
				'ID' => $id,
				'HASIL' => $hasil
			);
		$res = "INSERT INTO history_lemak (ID_USER,HISTORY_LEMAK) VALUES ('$id' , $hasil)";
		$run = $this->db->query($res);
		return $run;
	}
}