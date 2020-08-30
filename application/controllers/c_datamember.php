<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_datamember extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_datamember');
		$this->load->library('session');
	}

	

	public function getDataMember(){
		
		if($this->uri->segment(3)==""){
			$offset=0;
		}else{
			$offset=$this->uri->segment(3);
		}
		$limit = 30;
		$data['member'] = $this->m_datamember->retrieveDataMember($offset, $limit);
	
		$config = array();
		$config['base_url'] = base_url(). 'interfaceListMember';
		$config['per_page'] = $limit;
		$config['uri_segment'] = 3;
		$config['num_links'] = 5;
		
		$config['first_tag_open'] = '<li>';
		$config['first_link'] = 'First';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href>';
		$config['cur_tag_close'] = '</a></li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_link'] = 'Last';
		$config['last_tag_close'] = '</li>';
		$config['total_rows'] = $data['member']['jumlah'];
		$this->pagination->initialize($config);
		$this->session->set_userdata('row', $this->uri->segment(3));
		
		$data['judul'] = "Produk | Administrator";
		$this->load->view('interfaceListMember',$data);
 		$this->load->view('template/admin/header', $data);
		$this->load->view('template/admin/nav');
		$this->load->view('template/admin/footer');
	}

	public function getIdMember($id){
		$this->m_datamember->hapusMember($id);
		$this->session->set_flashdata('info', "Contact berhasil dihapus.");
		redirect('c_datamember/getDataMember');
	}


	public function editProfilMember($id){
		$data['edit'] = $this->m_datamember->profilMember($id);
		$this->load->view('template/member/header_home');
        $this->load->view('template/member/navbar_history_kesehatan');
		$this->load->view('editprofil', $data);
		$this->load->view('template/member/footer_guest');
	}


	public function konfirmasiEditProfil(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$email = $this->input->post('email');

		$update = $this->m_datamember->simpanEditProfil($id,$nama,$username,$email);
		redirect('c_datamember/history');
	}

	public function history(){
		$id = $this->session->userdata('id');
		$data['profil'] = $this->m_datamember->profilmember($id);
		$data['history'] = $this->m_datamember->getDataHistory($id);
		$this->load->view('template/member/header_home');
        $this->load->view('template/member/navbar_history_kesehatan');
        $this->load->view('halamanHistoryKesehatan', $data);
        $this->load->view('template/member/footer_guest');
	}

	public function hapusHistory($id){
		$this->m_datamember->konfirmasiHapusHistory($id);
		redirect('c_datamember/history');

	}
}
?>