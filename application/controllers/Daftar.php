<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function index()
	{
		if ($this->user->login()) {
			redirect('sjm');
		}
		else{
			$this->load->view('login_user/daftar');
		}
	}


	public function do_upload()
	{
		if ($this->user->login()) 
		{
			redirect('sjm');
		}
		else
		{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = 1024;
			$config['file_name']   = uniqid();
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				$data['gagal'] = "
								<script> swal({
									  title: '',
									  text: 'Data gagal disimpan, coba gunakan foto yang ukurannya dibawah 1mb. terima kasih',
									  type: 'error',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									  confirmButtonColor: '#E23131'
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'http://localhost/sjm_all_update2/login';
									  }, 2000);
									});  

								</script>
								";
				$data['title'] = "Regist Page";
				$this->load->view('login_user/do_upload', $data, FALSE);
			}
			else
			{
				$file = $this->upload->data();
				$data = array(
						'username_user' => $this->input->post('username_user'),
						'password_user' => $this->input->post('password_user'),
						'nama_user'     => $this->input->post('nama_user'),
						'alamat_user' 	=> $this->input->post('alamat_user'),
						'no_tlp_user'	=> $this->input->post('no_tlp_user'),
						'foto_user' 	=> $file['file_name'] // file name didapat dari $config diatas
						//konfig diatas sama seperti kita mengirim $_POST['username_user'].
				);

				$this->user->tambah_user($data); //konfig ini sama seperti membuat query INSERT INTO
				$data['sukses'] = "
								<script> swal({
									  title: '',
									  text: 'Data sukses dibuat, silahkan login untuk melakukan pesanan',
									  type: 'success',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									},
									function(){
									  setTimeout(function(){
									    window.location.href = 'http://localhost/sjm_all_update2/login';
									  }, 2000);
									});  

								</script>
								";
				$data['title'] = "Regist Page";
				$this->load->view('login_user/do_upload', $data, FALSE);
			}
		}
	}

}

/* End of file Daftar.php */
/* Location: ./application/controllers/Daftar.php */
