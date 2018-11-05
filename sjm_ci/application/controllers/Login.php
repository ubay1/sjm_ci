<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
	public function __construct(){
		parent::__construct();	
	}

	public function index()
	{
		if ($this->user->login()) {
			redirect('sjm'); // jika user sudah memiliki session maka akan di redirect ke controller sjm.
		}
		else
		{	
			 // set form validation
			 $this->form_validation->set_rules('username','username','required');
			 $this->form_validation->set_rules('password','password','required');

			//set message form validation
			 $this->form_validation->set_message('required', 
			 	' <div style="color:#B71515; background-color:#E06767; padding:5px; border-radius:10px;">
			 			<b><i class="mdi mdi-alert-circle"></i> {field}</b> harus diisi
			 	  </div>
			 	');
				 
			if ($this->form_validation->run() == FALSE) 
			{
				$this->load->view('login/login');
			}
			else
			{
				
				$username = $this->input->post('username', true); 
				// $username = $_POST['username];
				$password = $this->input->post('password', true);
				// $password = $_POSR['password];

					// disini kita memanggil model user_login dan method cek_login
					$check = $this->user->cek_login('user',array('username_pelanggan'=>$username), array('password_pelanggan'=>$password));

					if ($check == FALSE) 
					{	
						$data['error'] = "<script> swal('Gagal Authentikasi', 'Username/Password Salah','error'); </script>";	
						$this->load->view('login/login',$data, FALSE);
						
					}
					else
					{
						
						foreach ($check as $row) 
						{
							$session_data = array(
								'id_user'=>$row->id_user,
								'username_pelanggan'=>$row->username_pelanggan,
								'namalengkap'=>$row->namalengkap
							);

							// set session user dan redirect ke sjm
							$this->session->set_userdata( $session_data );
							redirect('sjm');
						}
						
					}
			}
		}
	}
	

}