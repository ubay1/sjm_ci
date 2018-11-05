<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller {

	public function index()
	{
		if (! $this->user->login()) {
			redirect('login');
		}
		
		$data['title'] = "Referesnsi Lathan CI";

		$this->load->view('header', $data, FALSE);
		$this->load->view('latihan/lat1');
		$this->load->view('footer');
	}

	public function form()
	{	
		$this->form_validation->set_rules('nama', 'nama', 'required|min_length[5]|max_length[12]');

		$this->form_validation->set_message('required','{field} harus disi gan');
		$this->form_validation->set_message('min_length','{field} minimal 5 karakter');
		$this->form_validation->set_message('max_length','{field} maximal 12 karakter');

		if ($this->form_validation->run() == FALSE) {
			$data['error_send'] = "Nampaknya ada yang error gan";
			$data2['title'] = "Referesnsi Lathan CI";
			$this->load->view('header', $data2, FALSE);
			$this->load->view('latihan/lat1', $data, FALSE);
			$this->load->view('footer');
		} else {
			$data['sukses_send'] = "<div style='color:blue; font-weight:bold;'>Sukses kirim gan </div>";
			$data2['title'] = "Referesnsi Lathan CI";	
			$this->load->view('header', $data2, FALSE);
			$this->load->view('latihan/lat1', $data, FALSE);
			$this->load->view('footer');
		}
	}

}

/* End of file Latihan.php */
/* Location: ./application/controllers/Latihan.php */
