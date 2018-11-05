<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sjm extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();	
		$this->load->helper('array');	
		$this->load->helper('html');
		$this->load->helper('language');
		$this->load->helper('string');
		$this->load->helper('text');
		$this->load->helper('form');
		$this->load->library('profil');
	}
	
	public function index()
	{
		if ($this->user->login()) 
		{
			
			$data['title']  = "SJM"; //ini dinamik data

			$this->load->view('header', $data, FALSE);
			$this->load->view('main');
			$this->load->view('footer');	
		}
		else{
			redirect('login');
		}
		
	}

	public function profil()
	{
		if ($this->user->login()) 
		{
			$data['title']  = "SJM"; //ini dinamik data

			// parsing data yang diambil dari model ke view
			$data2['user'] = $this->user->tampildata_user();
	 		$data2['pesanan'] = $this->user->tampildata_pesanan();
			$this->load->view('header', $data, FALSE);
			$this->load->view('profil/profil', $data2, FALSE);
			$this->load->view('footer');
		}
		else
		{
			redirect('login');
		}

	}

	public function servisumum()
	{
		if ($this->user->login()) 
		{
			$data['title']  = "SJM"; //ini dinamik data
			$data['user'] = $this->user->tampildata_user();
			$this->load->view('header', $data, FALSE);
			$this->load->view('servis/servisumum');
			$this->load->view('footer');
		}
		else
		{
			redirect('login');
		}
	}

	public function servisdarurat()
	{
		if ($this->user->login()) 
		{
			$data['title']  = "SJM"; //ini dinamik data
			$data['user'] = $this->user->tampildata_user();
			$this->load->view('header', $data, FALSE);
			$this->load->view('servis/servisdarurat');
			$this->load->view('footer');
		}
		else
		{
			redirect('login');
		}
	}	

	public function pesananumum()
	{

		if ($this->user->login()) 
		{
			$data = array(
				'id_user' => $this->input->post('id_user'), 
				'namalengkap'=> $this->input->post('namalengkap'),
				'alamat'=>$this->input->post('alamat'),
				'no_tlp'=>$this->input->post('no_tlp'),
				'merk_kendaraan'=>$this->input->post('merk_kendaraan'),
				'jenis_pesanan'=>$this->input->post('jenis_pesanan'),
				'waktu_pemesanan'=>date('Y-m-d H:i:s', strtotime($this->input->post('waktu_pemesanan'))),
				'waktu_pengerjaan'=>date('Y-m-d H:i:s', strtotime($this->input->post('waktu_pengerjaan'))),
				'kendala_kendaraan'=>$this->input->post('kendala'),
				'status'=>$this->input->post('status'),
			);

			$this->user->pesanan_user($data);

			$data2['sukses'] = "<script> swal({
									  title: 'Sukses',
									  text: 'Pesanan anda telah terkirim, kami akan segera memprosesnya. harap periksa selalu handphone/komputer anda untuk melihat informasi yang akan kami kirimkan kepada anda mengenai pesanan anda. terima kasih',
									  type: 'success',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'http://localhost/sjm_ci/sjm/profil';
									  }, 2000);
									});  

								</script>";

			$data2['gagal'] = "<script> swal({
									  title: 'Gagal Order',
									  text: 'Terjadi kesalahan',
									  type: 'error',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'http://localhost/sjm_ci/sjm/profil';
									  }, 2000);
									});  

								</script>";
			$data2['title'] = 'Proses Order';

			$this->load->view('header', $data2, FALSE);
			$this->load->view('servis/pesananumum',$data2, FALSE);
		}
		else
		{
			redirect('login');
		}
	}

	public function ubahfoto_user()
	{
		if ($this->user->login()) 
		{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = 1024;
			$config['max_width']  = 1000;
			$config['max_height']  = 768;
			$config['file_name']   = uniqid();
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				$data2['gagal'] = "
								<script> 
									swal({
									  title: 'Gagal',
									  text: 'Data gagal disimpan, coba gunakan foto yang ukurannya dibawah 1mb dengan lebar 1000px dan panjang 768px. terima kasih',
									  type: 'error',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'profil';
									  }, 2000);
									});  

								</script>
								";

				$data2['title'] = "Ubah Foto";
				$this->load->view('header', $data2, FALSE);
				$this->load->view('profil/ubahfoto_user');
			}
			else
			{
				$file = $this->upload->data();
				$data = array('foto'=>$file['file_name']);

				$this->user->editfoto_user($data);
				$data2['sukses'] = "
								<script> swal({
									  title: 'Sukses',
									  text: 'Foto profil sukses diganti',
									  type: 'success',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'profil';
									  }, 2000);
									});  

								</script>
								";

				$data2['title'] = "Ubah Foto";
				$this->load->view('header', $data2, FALSE);
				$this->load->view('profil/ubahfoto_user');
			}
		}
		else
		{
			redirect('login');
		}
	}

	public function ubahdata_user()
	{	
		if ($this->user->login()) 
		{
			$data['data_user'] = $this->user->tampildata_user();
			$data['title'] = 'Ubah Data';
			$this->load->view('header', $data, FALSE);
			$this->load->view('profil/ubahdata');
			$this->load->view('footer');
		}
		else
		{
			redirect('login');
		}
	}

	public function proses_ubahdatauser()
	{
		if ($this->user->login()) 
		{
			$data = array( 
						   'namalengkap'=>$this->input->post('namalengkap'),
						   'alamat'=>$this->input->post('alamat'),
						   'no_tlp'=>$this->input->post('no_tlp')
					);
			$this->user->edit_user($data);

			$data2['sukses'] = "<script> swal({
									  title: 'Sukses',
									  text: 'Data Sukses diupdate.',
									  type: 'success',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'ubahdata_user';
									  }, 2000);
									});  

								</script> 
							";

			$data['gagal'] = "
								<script> swal({
									  title: 'Gagal',
									  text: 'Data gagal diupdate.',
									  type: 'error',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'ubahdata_user';
									  }, 2000);
									});  

								</script>
								";

			$data2['title']  = "Proses Ubah data";
			$this->load->view('header', $data2, FALSE);
			$this->load->view('profil/proses_ubahdatauser');
			$this->load->view('footer');
		}
		else
		{
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

	public function peraturansjm()
	{
		if ($this->user->login()) 
		{
			$data['title']  = "SJM"; //ini dinamik data
			$this->load->view('header', $data, FALSE);
			$this->load->view('menutambahan/peraturansjm');
			$this->load->view('footer');
		}
		else
		{
			redirect('login');
		}
	}

	public function daftarharga()
	{
		if ($this->user->login()) 
		{
			$data['title'] = "SJM"; //ini dinamik data
			$this->load->view('header', $data, FALSE);
			$this->load->view('menutambahan/daftarharga');
			$this->load->view('footer');
		}
		else
		{
			redirect('login');
		}
	}

}
