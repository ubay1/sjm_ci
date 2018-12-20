<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sjm_admin extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    // index
	    public function index() {
	        if ($this->admin->adminlogin()) 
	        {
	        	$data['title'] = "Admin Page";
	        	$this->load->view('index_admin/header', $data, FALSE);
	        	$this->load->view('index_admin/main');
	        	$this->load->view('index_admin/footer');
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
	// end index

   // pesanan

	    public function datapesanan()
		{
			if ($this->admin->adminlogin()) 
			{
				$data['admin'] = $this->admin->tampildata_pesanan();
				$this->load->view('data_pesanan_admin/datapesanan',$data, FALSE);
				
			}
			else{

				redirect('login');
			}
		}

		public function butonprosespesanan()
		{
			if ($this->admin->adminlogin()) 
			{	
				$id_pesanan = $this->input->post('id_pesanan');
				$data2 = array(
					'respon_admin'=>$this->input->post('proses'),
					'waktu_pemesanan'=>$this->input->post('waktu_pemesanan'),
					'waktu_pengerjaan'=>$this->input->post('waktu_pengerjaan')
				);
				$this->admin->respon_admin($id_pesanan, $data2);

				$data3 = array(
					'id_pesanan'=>$this->input->post('id_pesanan'),
					'id_user'=>$this->input->post('id_user'),
					// 'namalengkap'=>$this->input->post('namalengkap'),
					'notif_text'=>$this->input->post('proses'),
					'notif_status'=>'0'
				);
				$this->admin->notif_pesanan($data3);
			}
			else{
				redirect('login');
			}
		}

		public function hapus_pesananuser()
		{
			if ($this->admin->adminlogin()) 
			{
				$uniq_id = $_GET['id'];
				$data['title'] = "SJM";
				$data['user']  = $this->admin->hapus_pesanan($uniq_id);

				$data['sukses'] = "<script> swal({
										  title:'',
										  text: 'pesanan telah dihapus',
										  type: 'success',
										  showCancelButton: false,
										  closeOnConfirm: false,
										  showLoaderOnConfirm: true,
										},
										function(){
										  setTimeout(function(){
										    window.location.href = 'http://localhost/sjm_all_update2/sjm_admin';
										  }, 2000);
										});  

									</script>";

					$data['gagal'] = "<script> swal({
										  title: '',
										  text: 'Pesanan gagal dihapus',
										  type: 'error',
										  showCancelButton: false,
										  closeOnConfirm: false,
										  showLoaderOnConfirm: true,
										  confirmButtonColor: '#E23131'
										},
										function(){
										  setTimeout(function(){
										    window.location.href = 'http://localhost/sjm_all_update2/sjm_admin';
										  }, 2000);
										});  

									</script>";

				$this->load->view('index_admin/header', $data, FALSE);
				$this->load->view('data_pesanan_admin/hapus_pesanan', $data,FALSE);
			}
			else
			{
				redirect('login');
			}
		}

		public function edit_pesananuser()
		{
			if ($this->admin->adminlogin()) 
			{
				$data['title']  = "Admin Page"; //ini dinamik data
				$data['user'] = $this->admin->tampilid_user();
				$data['mekanik'] = $this->admin->tampildata_mekanik();
				$this->load->view('index_admin/header', $data, FALSE);
				$this->load->view('data_pesanan_admin/edit_pesanan');
				$this->load->view('index_admin/footer');
			}
			else
			{
				redirect('login');
			}
		}


		public function prosesedit_pesanan()
		{
			if ($this->admin->adminlogin()) 
			{
				$uniq_id = $this->input->post('uniq_id');
				$update_pesanan = array(
					'nama_user'=>$this->input->post('nama_user'),
					'nama_mekanik'=>$this->input->post('nama_mekanik'),
					'waktu_pemesanan'=>$this->input->post('waktu_pemesanan'),
					'waktu_pengerjaan'=>$this->input->post('waktu_pengerjaan'),
					'kontak_mekanik'=>$this->input->post('kontak_mekanik')
				);

				$this->admin->edit_pesanan($uniq_id, $update_pesanan);

				$data['title']  = "Admin Page";
				$data['sukses'] = "<script> swal({
									  title:'',
									  text: 'Request telah dikirm',
									  type: 'success',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'http://localhost/sjm_all_update2/sjm_admin';
									  }, 2000);
									});  

								</script>";

				$data['gagal'] = "<script> swal({
									  title: '',
									  text: 'Request tidak terkirim',
									  type: 'error',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									  confirmButtonColor: '#E23131'
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'http://localhost/sjm_all_update2/sjm_admin';
									  }, 2000);
									});  

								</script>";

				$this->load->view('index_admin/header', $data, FALSE);
				$this->load->view('data_pesanan_admin/prosesedit_pesanan');
			}
			else
			{
				redirect('login');
			}
		}

	// end pesanan

	// pelanggan

		public function data_pelanggan()
		{
			if ($this->admin->adminlogin()) 
			{
				$data['title']  = "Admin Page"; //ini dinamik data

				// parsing data yang diambil dari model ke view
				$data2['user'] = $this->admin->tampildata_user();
				$this->load->view('index_admin/header', $data, FALSE);
				$this->load->view('data_pelanggan_admin/v_user', $data2, FALSE);
				$this->load->view('index_admin/footer');
			}
			else
			{
				redirect('login');
			}
		}

		public function edit_pelanggan()
		{
			if ($this->admin->adminlogin()) 
			{
				$data['title'] = "Edit pelanggan";
				$data['user']  = $this->admin->tampildata_user_from_id();
				$this->load->view('index_admin/header', $data, FALSE);
				$this->load->view('data_pelanggan_admin/edit_pelanggan');
				$this->load->view('index_admin/footer');
			}
			else{
				redirect('login');
			}
			
		}

		public function prosesedit_pelanggan()
		{
			if ($this->admin->adminlogin()) 
			{
				$id_user = $this->input->post('id_user');
				$data_user = array(
					'username_user'=> $this->input->post('username_user'),
					'password_user'=> $this->input->post('password_user'),
					'nama_user'    => $this->input->post('nama_user'),
					'alamat_user'  => $this->input->post('alamat_user'),
					'no_tlp_user'  => $this->input->post('no_tlp_user')
				);

				$this->admin->edit_pelanggan($id_user, $data_user);

				$data['title']  = "Admin Page";
				$data['sukses'] = "<script> swal({
									  title:'',
									  text: 'Data berhasil diperbaharui',
									  type: 'success',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'http://localhost/sjm_all_update2/sjm_admin/data_pelanggan';
									  }, 2000);
									});  

								</script>";

				$data['gagal'] = "<script> swal({
									  title: '',
									  text: 'Data gagal diperbaharui',
									  type: 'error',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									  confirmButtonColor: '#E23131'
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'http://localhost/sjm_all_update2/sjm_admin/data_pelanggan';
									  }, 2000);
									});  

								</script>";

				$this->load->view('index_admin/header', $data, FALSE);
				$this->load->view('data_pelanggan_admin/prosesedit_pelanggan');
				$this->load->view('index_admin/footer');

			}
			else
			{
				redirect('login');
			}
		}

		
		public function hapus_pelanggan()
		{
			if ($this->admin->adminlogin()) 
			{	
				$id_user = $_GET['id'];
				$data['title']  = "Admin Page"; //ini dinamik data
				$this->admin->hapus_pelanggan($id_user);

				$data['sukses'] = "<script> swal({
									  title:'',
									  text: 'pelanggan berhasil dihapus',
									  type: 'success',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'http://localhost/sjm_all_update2/sjm_admin/data_pelanggan';
									  }, 2000);
									});  

								</script>";

				$data['gagal'] = "<script> swal({
									  title: '',
									  text: 'Pelanggan gagal dihapus',
									  type: 'error',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									  confirmButtonColor: '#E23131'
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'http://localhost/sjm_all_update2/sjm_admin/data_pelanggan';
									  }, 2000);
									});  

								</script>";

				$this->load->view('index_admin/header', $data, FALSE);
				$this->load->view('data_pelanggan_admin/hapus_pelanggan');
			}
			else
			{
				redirect('login');
			}
		}

	// end pelanggan

	// mekanik
		public function data_mekanik()
		{
			if ($this->admin->adminlogin()) 
			{
				$data['title']  = "Admin Page"; //ini dinamik data

				// parsing data yang diambil dari model ke view
				$data2['user'] = $this->admin->tampildata_mekanik();
				$this->load->view('index_admin/header', $data, FALSE);
				$this->load->view('data_mekanik_admin/v_mekanik', $data2, FALSE);
				$this->load->view('index_admin/footer');
			}
			else
			{
				redirect('login');
			}
		}

		// tambah mekanik
		public function do_upload()
		{
			if ($this->admin->adminlogin()) 
			{
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = 1024;
				$config['file_name'] = uniqid();
				
				$this->load->library('upload', $config);
				
				if ( ! $this->upload->do_upload()){
					$data['gagal'] = "
										<script> swal({
											  title: '',
											  text: 'Data gagal disimpan, coba gunakan foto yang ukurannya kurang dari 1mb. terima kasih',
											  type: 'error',
											  showCancelButton: false,
											  closeOnConfirm: false,
											  showLoaderOnConfirm: true,
											  confirmButtonColor: '#E23131'
											},
											function(){
											  setTimeout(function(){
											    window.location.href = 'http://localhost/sjm_all_update2/sjm_admin/data_mekanik';
											  }, 2000);
											});  

										</script>
										";
						$data['title'] = "Tambah mekanik";
						$this->load->view('index_admin/do_upload', $data, FALSE);
				}
				else{
					$file = $this->upload->data();
					$data = array(
						'username_mekanik'=>$this->input->post('username'),
						'password_mekanik'=>$this->input->post('password'),
						'nama_mekanik'=>$this->input->post('nama_mekanik'),
						'kontak_mekanik'=>$this->input->post('kontak_mekanik'),
						'foto_mekanik'=>$file['file_name']
					);

					$this->admin->tambah_mekanik($data);
					$data['sukses'] = "
										<script> swal({
											  title: '',
											  text: 'Data sukses dibuat',
											  type: 'success',
											  showCancelButton: false,
											  closeOnConfirm: false,
											  showLoaderOnConfirm: true,
											},
											function(){
											  setTimeout(function(){
											    window.location.href = 'http://localhost/sjm_all_update2/sjm_admin/data_mekanik';
											  }, 2000);
											});  

										</script>
										";
						$data['title'] = "Tambah mekanik";
						$this->load->view('index_admin/do_upload', $data, FALSE);
				}
			}
			else
			{
				redirect('login');
			}
		}
		// end tambah mekanik

		// hapus mekanik
		public function hapus_mekanik()
		{
			if ($this->admin->adminlogin()) 
			{
				$id_mekanik = $_GET['id'];
				$this->admin->hapus_mekanik($id_mekanik);
				$data['title'] = 'hapus mekanik';
				$data['sukses'] = "<script> swal({
									  title:'',
									  text: 'Data sukses dihapus',
									  type: 'success',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'http://localhost/sjm_all_update2/sjm_admin/data_mekanik';
									  }, 2000);
									});  

								</script>";

				$data['gagal'] = "<script> swal({
									  title: '',
									  text: 'Data gagal dihapus',
									  type: 'error',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									  confirmButtonColor: '#E23131'
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'http://localhost/sjm_all_update2/sjm_admin/data_mekanik';
									  }, 2000);
									});  

								</script>";

				$this->load->view('index_admin/header', $data, FALSE);
				$this->load->view('data_mekanik_admin/hapus_mekanik');
				$this->load->view('index_admin/footer');
			}
			else
			{
				redirect('login');
			}
		}
		// end hapus mekanik

		// edit mekanik
		public function edit_mekanik()
		{
			if ($this->admin->adminlogin()) 
			{
				$data['title']   = "Edit Pelanggan";
				$id_mekanik = $_GET['id'];
				$data['mekanik'] = $this->admin->tampildata_mekanik_from_id($id_mekanik);
				$this->load->view('index_admin/header', $data, FALSE);
				$this->load->view('data_mekanik_admin/edit_mekanik');
				$this->load->view('index_admin/footer');
			}
			else
			{
				redirect('login');
			}
		}

		public function prosesedit_mekanik()
		{
			if ($this->admin->adminlogin()) 
			{
				$data['title'] = 'proses edit mekanik';
				$id_mekanik    = $this->input->post('id_mekanik');
				$data_mekanik  = array(
					'username_mekanik'=>$this->input->post('username_mekanik'),
					'password_mekanik'=>$this->input->post('password_mekanik'),
					'nama_mekanik'    =>$this->input->post('nama_mekanik'),
					'kontak_mekanik'  =>$this->input->post('kontak_mekanik')
				); 

				$this->admin->edit_mekanik($id_mekanik, $data_mekanik);
				$data['sukses'] = "<script> swal({
									  title:'',
									  text: 'data berhasil diperbaharui',
									  type: 'success',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'http://localhost/sjm_all_update2/sjm_admin/data_mekanik';
									  }, 2000);
									});  

								</script>";

				$data['gagal'] = "<script> swal({
									  title: '',
									  text: 'data gagal diperbaharui',
									  type: 'error',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									  confirmButtonColor: '#E23131'
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'http://localhost/sjm_all_update2/sjm_admin/data_mekanik';
									  }, 2000);
									});  

								</script>";

				$this->load->view('index_admin/header', $data, FALSE);
				$this->load->view('data_mekanik_admin/proses_edit_mekanik');
				$this->load->view('index_admin/footer');
			}
			else
			{
				redirect('login');
			}
		}
		// end edit mekanik

	// end mekanik


	// riwayat pesanan
		public function riwayat_pesanan()
		{
			if ($this->admin->adminlogin()) 
			{
				$data['title']  = "Admin Page"; //ini dinamik data

				// parsing data yang diambil dari model ke view
				$data2['riwayat'] = $this->admin->tampildata_riwayat_pesanan();
				$this->load->view('index_admin/header', $data, FALSE);
				$this->load->view('riwayat_pesanan_admin/riwayatpesanan', $data2, FALSE);
				$this->load->view('index_admin/footer');
			}
			else
			{
				redirect('login');
			}
		}
	// end riwayat pesanan

	
}
        

/* End of file Sjm_admin.php */
/* Location: ./application/controllers/Sjm_admin.php */