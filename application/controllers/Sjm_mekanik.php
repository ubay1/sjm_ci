
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sjm_mekanik extends CI_Controller 
{

    function __construct() {
        parent::__construct();
    }

    public function index() 
    {
    	if ($this->mekanik->mekaniklogin()) 
    	{	
    		$data['title'] = "SJM Mekanik";
    		$this->load->view('index_mekanik/header', $data, FALSE);
    		$this->load->view('index_mekanik/main');
    		$this->load->view('index_mekanik/footer');
    	}
    	else
    	{
    		redirect('login');
    	} 
    }

// data pesanan
    public function datapesanan()
	{
		if ($this->mekanik->mekaniklogin()) 
		{
			$data['user'] = $this->mekanik->tampildata_pesanan();
			$this->load->view('data_pesanan_mekanik/pesanan',$data, FALSE);
		}
		else{
			redirect('login');
		}
	}
// end data pesanan

// profil mekanik
	public function profil_mekanik()
	{
		if ($this->mekanik->mekaniklogin()) 
		{
			$data['title'] = "SJM Mekanik";
			$id_mekanik = $this->session->userdata('id_mekanik');
			$data2['profil'] = $this->mekanik->profil($id_mekanik);
			$this->load->view('index_mekanik/header', $data, FALSE);
			$this->load->view('profil_mekanik/profil', $data2, FALSE);
			$this->load->view('index_mekanik/footer');
		}
		else
		{
			redirect('login');
		}
	}

	public function riwayat_pekerjaan()
	{
		if ($this->mekanik->mekaniklogin()) 
		{
			$data2['riwayat'] = $this->mekanik->riwayat_pekerjaan();
			$this->load->view('profil_mekanik/riwayat_pekerjaan', $data2, FALSE);
		}
		else
		{
			redirect('login');
		}
	}

	public function proses_pekerjaanselesai()
	{
		if ($this->mekanik->mekaniklogin()) 
		{
			$no_pesanan = $this->input->post('no_pesanan');
			$update_pesanan = array(
				'waktu_pemesanan'=>$this->input->post('waktu_pemesanan'),
				'waktu_pengerjaan'=>$this->input->post('waktu_pengerjaan'),
				'status'=>$this->input->post('status')
			);
			$insert_history = array(
				'id_pesanan'=>$this->input->post('id_pesanan'),
				'no_pesanan'=>$this->input->post('no_pesanan'),
				'nama_mekanik'=>$this->input->post('nama_mekanik'),
				'nama_user'=>$this->input->post('nama_user'),
				'waktu_pemesanan'=>$this->input->post('waktu_pemesanan'),
				'waktu_pengerjaan'=>$this->input->post('waktu_pengerjaan'),
				'merk_kendaraan'=>$this->input->post('merk_kendaraan'),
				'plat_nomor'=>$this->input->post('plat_nomor'),
				'kendala_kendaraan'=>$this->input->post('kendala')
			);

			 $this->mekanik->insert_history($insert_history);
			 $this->mekanik->pesanan_selesai_dikerjakan($no_pesanan, $update_pesanan);

			$data['title']   = "pekerjaan selesai";
			$data['sukses'] = "<script> swal({
									  title:'',
									  text: 'status pekerjaan berhasil diperbaharui',
									  type: 'success',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'http://localhost/sjm_all_update2/sjm_mekanik';
									  }, 2000);
									});  

								</script>";

				$data['gagal'] = "<script> swal({
									  title: '',
									  text: 'status pekerjaan gagal diperbaharui',
									  type: 'error',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									  confirmButtonColor: '#E23131'
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'http://localhost/sjm_all_update2/sjm_mekanik';
									  }, 2000);
									});  

								</script>";

			$this->load->view('index_mekanik/header', $data, FALSE);
			$this->load->view('data_pesanan_mekanik/proses_pekerjaanselesai');
		}
		else
		{
			redirect('login');
		}
	}

// end profil

// logout
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

// Start Pesan
	// public function data_kotakpesan()
	// {
	// 	if ($this->mekanik->mekaniklogin()) 
	// 	{	
	// 		$data['title'] = "Data Kotak pesan";
	// 		$id_mekanik = $_SESSION['id_mekanik'];
	// 		$data2['pesan'] = $this->mekanik->ambil_pesan($id_mekanik);
	// 		$this->load->view('header', $data, FALSE);
	// 		$this->load->view('pesan/data_kotakpesan', $data2, FALSE);
	// 		$this->load->view('footer');
	// 	}
	// 	else{
	// 		redirect('login');
	// 	}
	// }

	// public function kotak_pesan()
	// {
	// 	if ($this->mekanik->mekaniklogin()) 
	// 	{	
	// 		$iduser = $_GET['p'];
	// 		$id_pesanan = $_GET['q'];
	// 		$data['title'] = "Kotak pesan";
	// 		$data2['user'] = $this->mekanik->tampildata_pemesan($iduser);
	// 		$data2['pesan'] = $this->mekanik->ambil_pesan($id_pesanan);
	// 		$this->load->view('header', $data, FALSE);
	// 		$this->load->view('pesan/kotakpesan', $data2, FALSE);
	// 		$this->load->view('footer');
	// 	}
	// 	else{
	// 		redirect('login');
	// 	}
	// }

	// public function proses_kirimpesan()
	// {
	// 	if ($this->mekanik->mekaniklogin()) 
	// 	{	
	// 		$tangkap_pesan = array(
	// 			'id_mekanik'=>$this->input->post('id_mekanik'),
	// 			'id_pesanan'=> $this->input->post('id_pesanan'),
	// 			'nama_user'=> $this->input->post('namapemesan'),
	// 			'isi_pesan'=>$this->input->post('isipesan')
	// 		);
	// 		$data['title'] = "proses kirim pesan";
	// 		$data2['pesan'] = $this->mekanik->simpan_pesan($tangkap_pesan);
	// 		// $data2['sukses'] = "<script> alert('pesan berhasil dikirim'); </script> window.location.href = 'http://localhost/sjm_ci_mekanik/sjm/kotak_pesan?p=17'";
	// 		// $data2['gagal'] = "<script> alert('pesan gagal dikirim'); </script> window.location.href = 'http://localhost/sjm_ci_mekanik/sjm/kotak_pesan?p=17'";

	// 		$this->load->view('header', $data, FALSE);
	// 		$this->load->view('footer');
	// 	}
	// 	else{
	// 		redirect('login');
	// 	}
	// }

	// public function ambil_pesan()
	// {
	// 	if ($this->mekanik->mekaniklogin()) 
	// 	{
	// 		$id_mekanik = $_SESSION['id_mekanik'];
	// 		$data2['pesan'] = $this->mekanik->ambil_pesan($id_mekanik);
	// 		$this->load->view('header');
	// 		$this->load->view('pesan/data_kotakpesan', $data2, FALSE);
	// 		$this->load->view('footer');
	// 	}
	// 	else{
	// 		redirect('login');
	// 	}
	// }

// End pesan



}
        

/* End of file Sjm_mekanik.php */
/* Location: ./application/controllers/Sjm_mekanik.php */