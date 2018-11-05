<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$data1['title'] = "Upload Image SJM";
		$data2['hello'] = "tutorial upload gambar dengan CI";
		$this->load->view('header', $data1, FALSE);
		$this->load->view('upload/upload');
		$this->load->view('footer');	
	}

	public function do_upload()
	{

		$config['upload_path'] 		= './uploads/';
		$config['allowed_types'] 	= 'gif|jpg|png';
		$config['max_size']  		= 1024;
		$config['max_width']  		= 1024;
		$config['max_height'] 		= 1000;
		$config['file_name']        = uniqid();
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload()){
			$title['title'] = "SJM UPLOAD IMAGE";
			$swal['gagal'] = "
							<script> swal({
								  title: 'Gagal',
								  text: 'Data gagal disimpan',
								  type: 'error',
								  showCancelButton: false,
								  closeOnConfirm: false,
								  showLoaderOnConfirm: true,
								},
								function(){
								  setTimeout(function(){
								    window.location.href= 'http://localhost/sjm_ci/upload';
								  }, 2000);
								});  

								</script>
							";
	
			$this->load->view('header', $title, FALSE);
			$this->load->view('upload/do_upload', $swal, FALSE);
			$this->load->view('footer');
		}
		else{
			$file = $this->upload->data();
			$data = array(
					'username_pelanggan' => $this->input->post('username_pelanggan'),
					'password_pelanggan' => $this->input->post('password_pelanggan'),
					'namalengkap' => $this->input->post('namalengkap'),
					'alamat' => $this->input->post('alamat'),
					'no_tlp' => $this->input->post('no_tlp'),
					'foto' => $file['file_name']
			);

			$this->user->tambah_user($data);

			$title['title'] = "SJM UPLOAD IMAGE";
			$swal['sukses'] = "<script> swal({
								  title: 'Sukses',
								  text: 'Data berhasil disimpan',
								  type: 'success',
								  showCancelButton: false,
								  closeOnConfirm: false,
								  showLoaderOnConfirm: true,
								},
								function(){
								  setTimeout(function(){
								    window.location.href= 'http://localhost/sjm_ci/upload';
								  }, 2000);
								});  

								</script>
							";
			$this->load->view('header', $title, FALSE);
			$this->load->view('upload/do_upload', $swal, FALSE);
			$this->load->view('footer');
		}

		// $this->upload->initialize($config);
	}

}

/* End of file Upload.php */
/* Location: ./application/controllers/Upload.php */
