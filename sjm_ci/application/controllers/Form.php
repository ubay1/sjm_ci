<?php

class Form extends CI_Controller {

        public function index()
        {       
                // set_rules berfungsi untuk validasi data yang dikirim, fieldlabel ini akan dikembalikan ke form yang akan di validasi
                $this->form_validation->set_rules('username', 'Username', array('required','min_length[5]','max_length[10]'));
                $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[10]');
                $this->form_validation->set_rules('passconf', 'passconf', 'trim|required|matches[password]');
                $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');

                $this->form_validation->set_message('required', '<div style="background:red; color:#fff; padding:5px; border-radius:10px; width:300px;">{field} harus diisi </div>');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('test_validate/logins');
                }
                else
                {       
                        $ses = array('nama'=>'ubay');
                        $this->session->set_userdata( $ses );
                        $this->load->view('test_validate/formsuccess');
                }
        }
}