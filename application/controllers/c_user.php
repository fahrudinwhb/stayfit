<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_user');
		$this->load->library('session');
	}

	


	//registrasi

	public function registrasi()
	{

		$this->load->view('v_registrasi');
	}

	function getDataRegistrasi() {
		$upload_data;
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('foto'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_registrasi');
		}
		else
		{
			$upload_data = $this->upload->data();
			// print_r($upload_data);
			redirect('kontrollerListTipsKesehatan/halamanMember');
			$data=array(
			'nama_lengkap'=>$this->input->post('form-name'),
			'username'=>$this->input->post('form-username'),
			'password'=>$this->input->post('form-password'),
			'email'=>$this->input->post('form-email'),
			'jenis_kelamin'=>$this->input->post('form-jeniskelamin'),
			'foto'=> $upload_data['file_name']
			
			
			
		);
			return $this->m_user->simpanDataRegistrasi('user',$data);
			// $this->load->view('halamanUtamaMember');

		}
	 	

	} 
	//------------------------------------------------------------------------------------------------------------------------------------


	//Login Admin
	public function form_login()
	{
		$this->load->view('halaman_login_admin');
	}

	

	function getDataLoginAdmin(){		
		
			$username = $this->input->post('username');
		    $password = $this->input->post('password');
			
		$cek= $this->m_user->cekDataAdmin($username,$password);
		if($cek != null){
			$x=$this->session->set_userdata('id', $cek);			
			redirect('c_datamember/getDataMember');
		}else{
			redirect('c_user/form_login');
		}
	}

	//----------------------------------------------------------------------------------------------------------------------------------------


	//Logout Admin

	function keluar($status){
		if ($this->session->userdata('id') != null ){
		$this->session->unset_userdata('id');
		$this->session->sess_destroy();
		redirect('kontrollerListTipsKesehatan/index');
		}
		else{
			if($status == '1'){
			redirect('c_user/form_login');
			}
			else{
			redirect('c_user/form_login_member');
			}
		}
	}

	//----------------------------------------------------------------------------------------------------------------------------------------


	//Login Member

	public function form_login_member()
	{
		$this->load->view('halaman_login_member');
	}

	

	function getDataLoginMember(){		
		
			$username = $this->input->post('username');
		    $password = $this->input->post('password');
			
		$cek= $this->m_user->cekDataMember($username,$password);
		if($cek != 0){
			$x=$this->session->set_userdata('id',$cek);			
			redirect('kontrollerListTipsKesehatan/halamanMember');
		}else{
			redirect('c_user/form_login_member');
		}
	}





	


}
