<?php
class M_user extends CI_Model{
	function __construct(){
		$this->load->database();
	}

	//registrasi

	function simpanDataRegistrasi($namatabel,$data)
	{
		$res = $this->db->insert($namatabel,$data);
		return $res;
	}

	//-----------------------------------------------------------------------------------------------------------------------------------

	//Login Admin

	function cekDataAdmin($username,$password){	
		$query = $this->db->query("SELECT ID_USER FROM user WHERE USERNAME='$username' AND PASSWORD='$password'");
		$jumlah = $query->num_rows();
		if($jumlah == 1){
			$result = $query->result_array();
			foreach ($result as $r) {
						if ($r['ID_USER'] == 1) {
								$id = $r['ID_USER'];
								return $id;
							# code...
						}

				# code...
			}
		}
		else{
			$hasil = 0;
			return $hasil;
		}
	
	}
	
	//----------------------------------------------------------------------------------------------------------------------------------

	
	//Login Member

	function cekDataMember($username,$password){	
		$query = $this->db->query("SELECT ID_USER FROM user WHERE USERNAME='$username' AND PASSWORD='$password'");
		$jumlah = $query->num_rows();
		$id;
		if($jumlah == 1){
			$result = $query->result_array();
			foreach ($result as $r) {
						
								$id = $r['ID_USER'];
								
							# code...

				# code...
			}
			return $id;
		}
		else{
			$id = 0;
			return $id;
		}
	
	}

	//-----------------------------------------------------------------------------------------------------------------------------------
	
}