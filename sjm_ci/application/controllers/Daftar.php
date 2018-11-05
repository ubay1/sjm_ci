<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function index()
	{
		if ($this->user->login()) {
			redirect('sjm');
		}
		else{
			$this->load->view('login/daftar');
		}
	}

	public function do_upload()
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
				$data['gagal'] = "
								<script> swal({
									  title: 'Gagal',
									  text: 'Data gagal disimpan, coba gunakan foto yang ukurannya dibawah 1mb dengan lebar 1000px dan panjang 768px. terima kasih',
									  type: 'error',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'http://localhost/sjm_ci/login';
									  }, 2000);
									});  

								</script>
								";
				$data['title'] = "Regist Page";
				$this->load->view('login/do_upload', $data, FALSE);
			}
			else
			{
				$file = $this->upload->data();
				$data = array(
						'username_pelanggan' => $this->input->post('username_pelanggan'),
						'password_pelanggan' => $this->input->post('password_pelanggan'),
						'namalengkap' => $this->input->post('namalengkap'),
						'alamat' => $this->input->post('alamat'),
						'no_tlp' => $this->input->post('no_tlp'),
						'foto' => $file['file_name']
						//konfig diatas sama seperti kita mengirim $_POST['username_pelanggan'].
				);

				$this->user->tambah_user($data); //konfig ini sama seperti membuat query INSERT INTO
				$data['sukses'] = "
								<script> swal({
									  title: 'Sukses',
									  text: 'Data sukses dibuat, silahkan login untuk melakukan pesanan',
									  type: 'success',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'http://localhost/sjm_ci/login';
									  }, 2000);
									});  

								</script>
								";
				$data['title'] = "Regist Page";
				$this->load->view('login/do_upload', $data, FALSE);
			}
		}
		else
		{
			redirect('login');
		}
	}

}

/* End of file Daftar.php */
/* Location: ./application/controllers/Daftar.php */
