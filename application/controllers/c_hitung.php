<?php 

class C_hitung extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		// $this->_is_logged_in();
		$this->load->helper(array('form','url'));
		$this->load->model('m_hitung');
		$this->load->library('session');

	}

	public function index()
    {
        $this->load->view('template/member/header_home');
        $this->load->view('template/member/navbar_member_imt');
        $this->load->view('halamanHitungIMT');
        $this->load->view('template/member/footer_guest');
    }

    public function fitness(){
        $this->load->view('template/member/header_home');
        $this->load->view('template/member/navbar_program_fitness');
        $this->load->view('halamanProgramFitness');
        $this->load->view('template/member/footer_guest');
    }

    public function hitung_fitnes(){
        $data = array();
        if(isset($_POST['submit'])){
            $tujuan = $_POST['tujuan'];;
            if(isset($_POST['check1'])){
                $data[0] = $_POST['check1'];
            }
            else{
                $data[0] = 0;   
            }
            if(isset($_POST['check2'])){
                $data[1] = $this->input->post('check2');
            }
            else{
                $data[1] = 0;   
            }
            if(isset($_POST['check3'])){
                $data[2] = $_POST['check3'];
            }
            else{
                $data[2] = 0;   
            }
        }
        // $data[3] = $_POST['checkbox1'];
        // $data[4] = $_POST['checkbox2'];
        // $data[5] = $_POST['checkbox3'];
        else{
            $_POST['submit'] = $tujuan = $data[0] = $data[1] = $data[2] =  0;
        }
        $durasi = (($tujuan * 7000) - ($data[0]+$data[1]+$data[2])) / 1000;
        $hasil = array(
                    'tujuan' => $tujuan,
                    'data' => $data,
                    'durasi' => $durasi);
        $this->load->view('template/member/header_home');
        $this->load->view('template/member/navbar_program_fitness');
        $this->load->view('halaman_hasil_fitnes',$hasil);
        $this->load->view('template/member/footer_guest');
    }


        public function hasilIMT()
    {
        $range;
        $solusi;
        $tinggi = $this->input->post('tinggi');
        $tinggi_meter = ($tinggi / 100);
        $berat = $this->input->post('berat');
        $hasil = ($berat / ($tinggi_meter*$tinggi_meter));

        if($hasil <20){
            $range = 'berat badan kurang';
            $solusi = $this->m_hitung->getSolusi(1);

        }
        elseif ($hasil >= 20 && $hasil <25 ) {
            $range = 'normal';
            $solusi = $this->m_hitung->getSolusi(2);
        }
        elseif ($hasil >= 25 && $hasil <30 ) {
            $range = 'normal tinggi';
            $solusi = $this->m_hitung->getSolusi(3);
        }
         elseif ($hasil >= 30 && $hasil <33 ) {
            $range = 'gemuk';
            $solusi = $this->m_hitung->getSolusi(4);
        }
         elseif ($hasil >= 33 ) {
            $range = 'Sangat Gemuk';
            $solusi = $this->m_hitung->getSolusi(5);
        }

        $data = array(
                'hasil' => $hasil,
                'range' => $range,
                'solusi' => $solusi
            );

        $this->load->view('template/member/header_home');
        $this->load->view('template/member/navbar_member_imt');
        $this->load->view('halaman_hasil_imt',$data);
        $this->load->view('template/member/footer_guest');
    }

    public function simpanDataIMT($hasil){
        $id = $this->session->userdata('id');
        $simpan = $this->m_hitung->simpanIMT($hasil,$id);
        redirect('c_hitung/index');
    }

    public function lemak()
    {
        $this->load->view('template/member/header_home');
        $this->load->view('template/member/navbar_member_lemak');
        $this->load->view('halamanHitungLemak');
        $this->load->view('template/member/footer_guest');
    }

    public function hitungLemak(){
        $range;
        $solusi;
        $berat = $this->input->post('berat');
//        $berat = $this->input->post('67');
        $tinggi = $this->input->post('tinggi');
//        $tinggi = $this->input->post('176');
        $tinggi_meter = ($tinggi / 100);
//        $tinggi_meter = (176 / 100);
        $umur = $this->input->post('umur');
//        $umur = $this->input->post(21);
        $kelamin = $this->input->post('optradio');
//        $kelamin = $this->input->post(0);

        $IMT = ($berat / ($tinggi_meter*$tinggi_meter));
//        $IMT = (67 / (1.76*$1.76));
        $hasil = (1.2 * $IMT) + (0.23 * $umur) - (10.8 * $kelamin) - 5.4;

        if($kelamin == 0){
            if($umur>=20 && $umur <=40){
                if($hasil <21){
                                $range = 'underfat';
                                $solusi = $this->m_hitung->getSolusiLemak(1);

                                }
                elseif ($hasil >= 21 && $hasil <33 ) {
                                $range = 'healthy';
                                $solusi = $this->m_hitung->getSolusiLemak(2);
                        }
                elseif ($hasil >= 33 && $hasil <39 ) {
                                $range = 'overweight';
                                $solusi = $this->m_hitung->getSolusiLemak(3);
                        }
                elseif ($hasil >=39) {
                                $range = 'obese';
                                $solusi = $this->m_hitung->getSolusiLemak(4);
                        }

            }
            elseif ($umur>=41 && $umur <=60) {
                if($hasil <23){
                                $range = 'underfat';
                                $solusi = $this->m_hitung->getSolusiLemak(1);

                                }
                elseif ($hasil >= 23 && $hasil <35 ) {
                                $range = 'healthy';
                                $solusi = $this->m_hitung->getSolusiLemak(2);
                        }
                elseif ($hasil >= 35 && $hasil <40 ) {
                                $range = 'overweight';
                                $solusi = $this->m_hitung->getSolusiLemak(3);
                        }
                elseif ($hasil >=40) {
                                $range = 'obese';
                                $solusi = $this->m_hitung->getSolusiLemak(4);
                        }
                
            }
            elseif ($umur>=61 && $umur <=79) {
                 if($hasil <24){
                                $range = 'underfat';
                                $solusi = $this->m_hitung->getSolusiLemak(1);

                                }
                elseif ($hasil >= 24 && $hasil <36 ) {
                                $range = 'healthy';
                                $solusi = $this->m_hitung->getSolusiLemak(2);
                        }
                elseif ($hasil >= 36 && $hasil <42 ) {
                                $range = 'overweight';
                                $solusi = $this->m_hitung->getSolusiLemak(3);
                        }
                elseif ($hasil >=42) {
                                $range = 'obese';
                                $solusi = $this->m_hitung->getSolusiLemak(4);
                        }
                # code...
            }
        }
        else{
             if($umur>=20 && $umur <=40){
                if($hasil <8){
                                $range = 'underfat';
                                $solusi = $this->m_hitung->getSolusiLemak(1);

                                }
                elseif ($hasil >= 8 && $hasil <19 ) {
                                $range = 'healthy';
                                $solusi = $this->m_hitung->getSolusiLemak(2);
                        }
                elseif ($hasil >= 19 && $hasil <25 ) {
                                $range = 'overweight';
                                $solusi = $this->m_hitung->getSolusiLemak(3);
                        }
                elseif ($hasil >=25) {
                                $range = 'obese';
                                $solusi = $this->m_hitung->getSolusiLemak(4);
                        }

            }
            elseif ($umur>=41 && $umur <=60) {
                if($hasil <11){
                                $range = 'underfat';
                                $solusi = $this->m_hitung->getSolusiLemak(1);

                                }
                elseif ($hasil >= 11 && $hasil <22 ) {
                                $range = 'healthy';
                                $solusi = $this->m_hitung->getSolusiLemak(2);
                        }
                elseif ($hasil >= 22 && $hasil <27 ) {
                                $range = 'overweight';
                                $solusi = $this->m_hitung->getSolusiLemak(3);
                        }
                elseif ($hasil >=27) {
                                $range = 'obese';
                                $solusi = $this->m_hitung->getSolusiLemak(4);
                        }
                
            }
            elseif ($umur>=61 && $umur <=79) {
                 if($hasil <13){
                                $range = 'underfat';
                                $solusi = $this->m_hitung->getSolusiLemak(1);

                                }
                elseif ($hasil >= 13 && $hasil <25 ) {
                                $range = 'healthy';
                                $solusi = $this->m_hitung->getSolusiLemak(2);
                        }
                elseif ($hasil >= 25 && $hasil <30 ) {
                                $range = 'overweight';
                                $solusi = $this->m_hitung->getSolusiLemak(3);
                        }
                elseif ($hasil >=30) {
                                $range = 'obese';
                                $solusi = $this->m_hitung->getSolusiLemak(4);
                        }
                # code...
            }

        }

        $data =array(
            'hasil' => $hasil,
            'range' => $range,
            'solusi' => $solusi
            );

        $this->load->view('template/member/header_home');
        $this->load->view('template/member/navbar_member_lemak');
        $this->load->view('halamanHasilLemak',$data);
        $this->load->view('template/member/footer_guest');


    }

    public function simpanDataLemak($hasil){
        $id = $this->session->userdata('id');
        $simpan = $this->m_hitung->simpanLemak($hasil,$id);
        redirect('c_hitung/lemak');
    }
	
}




	
	
	

 ?>