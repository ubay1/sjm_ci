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
			 $this->form_validation->set_rules('hakakses','hakakses','required');

			//set message form validation
			 $this->form_validation->set_message('required', 
			 	' <div style="color:#B71515; background-color:#E06767; padding:5px; border-radius:10px;">
			 			<b><i class="mdi mdi-alert-circle"></i> {field}</b> harus diisi
			 	  </div>
			 	');
				 
			if ($this->form_validation->run() == FALSE) 
			{
				$this->load->view('login_user/login');
			}
			else
			{
				
				$username = $this->input->post('username', true); 
				// $username = $_POST['username];
				$password = $this->input->post('password', true);
				// $password = $_POST['password];
				$hakakses   = $this->input->post('hakakses', true);


				// cek ketika user memilih hak akses sebagai customer
				if ($hakakses == 'cs') 
				{
					// disini kita memanggil model user_login dan method cek_login
					$check = $this->user->cek_login('user',array('username_user'=>$username), array('password_user'=>$password));

					if ($check == FALSE) 
					{	
						$data['error'] = "<script> 
									swal({
									  title: '',
									  text: 'username/password yang anda masukan tidak cocok',
									  type: 'error',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									  confirmButtonColor: '#E23131'
									});
						</script>";	
						$this->load->view('login_user/login',$data, FALSE);
						
					}
					else
					{
						
						foreach ($check as $row) 
						{
							$session_data = array(
								'id_user'=>$row->id_user,
								'username_user'=>$row->username_user,
								'nama_user'=>$row->nama_user
							);

							// set session user dan redirect ke sjm
							$this->session->set_userdata( $session_data );
							redirect('sjm');
						}
						
					}
				}
				elseif($hakakses == 'adm')
				{
					$cekadmin = $this->admin->cek_adminlogin($username, $password);

		      		if ($cekadmin==FALSE) {
		      			$data['error'] = "<script> 
		      				swal({
									  title: '',
									  text: 'username/password yang anda masukan tidak cocok',
									  type: 'error',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									  confirmButtonColor: '#E23131'
									});
		      			</script>";
		      			$this->load->view('login_user/login',$data, FALSE);
		      		}
		      		else{
		      			foreach ($cekadmin as $row)
		      			{
		      				$session_data = array(
		      					'id_admin'=>$row->id_admin
		      				);
		      			}
		      			
		      			$this->session->set_userdata( $session_data );
		      			redirect('sjm_admin');
		      		}
				}

				else
				{
					$cekmekanik = $this->mekanik->cek_mekaniklogin($username, $password);

		      		if ($cekmekanik==FALSE) 
		          	{
		      			$data['error'] = "<script>
		      				swal({
									  title: '',
									  text: 'username/password yang anda masukan tidak cocok',
									  type: 'error',
									  showCancelButton: false,
									  closeOnConfirm: false,
									  showLoaderOnConfirm: true,
									  confirmButtonColor: '#E23131'
									});
		      			 </script>";
		      			$this->load->view('login_user/login',$data, FALSE);
		      		}
		      		else
		          	{
		      			foreach ($cekmekanik as $row)
		      			{
		      				$session_data = array(
		      					'id_mekanik'=>$row->id_mekanik,
		                		'nama_mekanik'=>$row->nama_mekanik
		      				);
		      			}
		      			
		      			$this->session->set_userdata( $session_data );
		      			redirect('sjm_mekanik');
		      		}
				}
			}
		}
	}
	

}