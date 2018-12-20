<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->usertabel = 'admin';
	}

	public function Adminlogin()
	{
		return $this->session->has_userdata('id_admin');
	}

	public function Cek_adminlogin($username, $password)
	{
		$query = $this->db->query("SELECT * FROM admin WHERE username_admin='$username' && password_admin='$password'");
		if ($query->num_rows() == 0) {
			return false;
		}
		else{
			return $query->result();
		}
	}

    // data customer
	  public function Tampildata_user()
    {
      $query = $this->db->query("SELECT * FROM user");
      return $query->result();
    }

    public function Tampildata_user_from_id()
    {
      $id_user = $_GET['id'];
      $query = $this->db->query("SELECT * FROM user WHERE id_user=$id_user");
      return $query->result();
    }

    public function Tampilid_user()
    {
      $no_pesanan = $_GET['id'];
      $query = $this->db->query("SELECT * FROM data_pesanan WHERE no_pesanan='$no_pesanan'");
      return $query->result();
    }

    public function Edit_pelanggan($id_user, $data_user)
    {
      $this->db->where('id_user', $id_user);
      $this->db->update('user',$data_user);
    }

    public function Hapus_pelanggan($id_user)
    {
      $this->db->where('id_user',$id_user);
      $this->db->delete('user');
    }

    // end data customer


    // data mekanik
     public function Tampildata_mekanik()
    {
      $query = $this->db->query("SELECT * FROM mekanik");
      return $query->result();
    }

     public function Tambah_mekanik($data)
    {
      $this->db->insert('mekanik', $data);
    }

    public function Tampildata_mekanik_from_id($id_mekanik)
    {
     
      $query = $this->db->query("SELECT * FROM mekanik WHERE id_mekanik=$id_mekanik");
      return $query->result();
    }

    public function Edit_mekanik($id_mekanik, $data_mekanik)
    {
      $this->db->where('id_mekanik', $id_mekanik);
      $this->db->update('mekanik',$data_mekanik);
    }

    public function Hapus_mekanik($id_mekanik)
    {
      $this->db->where('id_mekanik',$id_mekanik);
      $this->db->delete('mekanik');
    }

    // end data mekanik


    // data pesanan
    public function Tampildata_pesanan()
    {
      $query = $this->db->query("SELECT * FROM data_pesanan ORDER BY id_pesanan DESC");
      return $query->result();
    }

    public function Tampildata_riwayat_pesanan()
    {
      $query = $this->db->query("SELECT * FROM riwayat_pesanan ORDER BY id_riwayat_pesanan DESC");
      return $query->result();
    }

    public function Respon_admin($id_pesanan, $update_pesanan)
    {
      $this->db->where('id_pesanan', $id_pesanan);
      $this->db->update('data_pesanan', $update_pesanan);
    }

    public function Notif_pesanan($notif)
    {
      $this->db->insert('notifikasi', $notif);
    }

     public function Edit_pesanan($no_pesanan, $update_pesanan)
    {
      $this->db->where('no_pesanan', $no_pesanan);
      $this->db->update('data_pesanan', $update_pesanan);
    }

    public function Hapus_pesanan($no_pesanan)
    {
      $this->db->where('no_pesanan', $no_pesanan);
      $this->db->delete('data_pesanan');
    }

    public function Pesanan_user($data)
    { 
      $this->db->insert('data_pesanan', $data);
    }
    // end data pesanan

}

/* End of file Admin_login.php */
/* Location: ./application/models/Admin_login.php */

/* End of file Admin_login.php */
/* Location: ./application/models/Admin_login.php */