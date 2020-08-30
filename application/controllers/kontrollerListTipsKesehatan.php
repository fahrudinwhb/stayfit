<?php 

class KontrollerListTipsKesehatan extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		// $this->_is_logged_in();
		$this->load->helper(array('form','url'));
		$this->load->model('dataListTipsKesehatan');
		$this->load->library('session');
	}

	public function index(){
		if($this->uri->segment(3)==""){
			$offset=0;
		}else{
			$offset=$this->uri->segment(3);
		}
		$limit = 5;
		$data['tips_kes'] = $this->dataListTipsKesehatan->loadListTipsKesehatan($offset,$limit);

		$config = array();
		$config['base_url'] = base_url(). 'KontrollerTipsKesehatan/getListTipsKesehatan/';
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
		$config['total_rows'] = $data['tips_kes']['jumlah'];
		$this->pagination->initialize($config);
		$this->session->set_userdata('row', $this->uri->segment(3));

		$this->load->view('template/member/header_home_guest');
        $this->load->view('template/member/navbar_guest');
        $this->load->view('template/member/carousel');
        $this->load->view('halamanUtama', $data);
        $this->load->view('template/member/footer_guest');
	}

public function detailTips($id){
	if($id != null){
	$data['hasil'] = $this->dataListTipsKesehatan->getDataTipsKesehatan($id);

	$this->load->view('template/member/header_home');
	$id = $this->session->userdata('id');
	if($id == null){
        $this->load->view('template/member/navbar_guest');}
      else{$this->load->view('template/member/navbar_member_tips');}
        $this->load->view('halaman_detail_tips_kesehatan_guest', $data);
        $this->load->view('template/member/footer_guest');
    }
    else{
    	redirect('kontrollerListTipsKesehatan');
    }

}
	

	//List Tips Kesehatan

	public function getListTipsKesehatan(){
        
		
		if($this->uri->segment(3)==""){
			$offset=0;
		}else{
			$offset=$this->uri->segment(3);
		}
		$limit = 5;
		$data['tips_kes'] = $this->dataListTipsKesehatan->loadListTipsKesehatan($offset, $limit);
		
		$config = array();
		$config['base_url'] = base_url(). 'KontrollerTipsKesehatan/getListTipsKesehatan/';
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
		$config['total_rows'] = $data['tips_kes']['jumlah'];
		$this->pagination->initialize($config);
		$this->session->set_userdata('row', $this->uri->segment(3));
		
		$id = $this->session->userdata('id');
		if ($id ==1){

		$data['judul'] = "Produk | Administrator";
 		$this->load->view('template/admin/header', $data);
		$this->load->view('template/admin/nav');
		$this->load->view('interfaceListTipsKesehatan', $data);
		$this->load->view('template/admin/footer');

		} else {
			$this->load->view('template/member/header_home', $data);
			$this->load->view('template/member/navbar_member_tips');
			$this->load->view('listTipsKesehatanMember', $data);
			$this->load->view('template/member/footer_guest');
		}
		
	}


	public function getDataTipsKesehatan(){
        if($this->session->flashdata('gagal') == true){
            echo "<script>alert('Data harus di isi semua')</script>";
        }
		$data['error'] = "";
		$data['judul'] = "Tambah Produk | Administrator";
		$this->load->view('template/admin/header', $data);
		$this->load->view('template/admin/nav');
		$this->load->view('interfaceTambahTips', $data);
		$this->load->view('template/admin/footer');
	}

	public function getIdTipsKesehatan($id){
		$data['edit'] = $this->dataListTipsKesehatan->getDataTipsKesehatan($id);
		$this->load->view('template/admin/header', $data);
		$this->load->view('template/admin/nav');
		$this->load->view('edit_tips', $data);
		$this->load->view('template/member/footer_guest');
	}

	public function getIdHapusTips($id){
		$data['edit'] = $this->dataListTipsKesehatan->hapusTips($id);
		redirect('kontrollerListTipsKesehatan/getListTipsKesehatan');
	}

	public function editTipsKesehatan(){
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$this->dataListTipsKesehatan->simpanEditTipsKesehatan($id,$judul,$isi);
		redirect('kontrollerListTipsKesehatan/getListTipsKesehatan');
	}
	
	public function submitDataTipsKesehatan(){
        $config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('gambar_tips'))
		{
			
//			$isi = array(
//				"JUDUL" => 'jpno',
//				"GAMBAR_TIPS" => 'lalala.png',
//				"ISI" => 'solasido'
//				);
//			$this->dataListTipsKesehatan->simpanTipsKesehatan($isi);
            $this->session->set_flashdata('gagal',true);
            redirect('kontrollerListTipsKesehatan/getDataTipsKesehatan');
            
		}
		else
		{
			$dok = $this->upload->data();
			
			$gambar = $dok['file_name'];
			$input_nama_produk= $this->input->post('judul');
			$input_deskripsi= $this->input->post('isi');
			$ganti = array("'");
			$oleh = "&#039;";
			$judul = str_replace($ganti, $oleh, $input_nama_produk);
			$isi = str_replace($ganti, $oleh, $input_deskripsi);
			$isi = array(
				"JUDUL" => $judul,
				"GAMBAR_TIPS" => $gambar,
				"ISI" => $isi
				);
			$this->dataListTipsKesehatan->simpanTipsKesehatan($isi);
			
			$this->session->set_flashdata('info', "Produk berhasil ditambahkan.");
			redirect('KontrollerListTipsKesehatan/getListTipsKesehatan');

		// $data['error'] = $this->upload->display_errors();
		// $data['judul'] = "Tambah Produk | Administrator";
		// $this->load->view('template/admin/header', $data);
		// $this->load->view('template/admin/nav');
		// $this->load->view('interfaceTambahTips', $data);
		// $this->load->view('template/admin/footer');	
		// return $this->m_user->simpanDataRegistrasi('user',$data);
		}
		   
	
	}

	//-----------------------------------------------------------------------------------------------------------------------------

	public function halamanMember(){

		
        $this->load->view('halamanUtamaMember');
     


	}
}


	
	
	

 ?>