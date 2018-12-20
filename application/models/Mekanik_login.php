<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mekanik_login extends CI_Model 
{ 
    public function __construct(){
    }

    public function Mekaniklogin(){
      // cek session
      // return isset($_SESSION['id_user']);
      // return $this->session->has_userdata('id_mekanik');
       return $this->session->userdata('id_mekanik');
    }

    public function Cek_mekaniklogin( $username, $password)
    {
       $query = $this->db->query("SELECT * FROM mekanik WHERE username_mekanik='$username' AND password_mekanik='$password'");

       if ($query->num_rows() == 0) {
           return false;
       }
       else{
           return $query->result();
       }
    }

    public function Tampildata_pesanan()
    {
      $nama = $_SESSION['nama_mekanik']; 
      $query = $this->db->query("SELECT * FROM data_pesanan
                                WHERE nama_mekanik='$nama' ORDER BY id_pesanan DESC");
      return $query->result();
    }

     // profil mekanik
    public function Profil($id_mekanik)
    {
      $query = $this->db->query("SELECT * FROM mekanik WHERE id_mekanik=$id_mekanik");
      return $query->result();
    }

    public function Riwayat_pekerjaan()
    {
      $nama_mekanik = $_SESSION['nama_mekanik']; 
      $query = $this->db->query("SELECT * FROM riwayat_pekerjaan WHERE nama_mekanik='$nama_mekanik' ORDER BY id_riwayat_kerja DESC");
      return $query->result();
    }

    public function Pesanan_selesai_dikerjakan($no_pesanan, $update_pesanan)
    {
      $this->db->where('no_pesanan',$no_pesanan);
      $this->db->update('data_pesanan',$update_pesanan);
    }

    public function Insert_history($insert_history)
    {
      $this->db->insert('riwayat_pekerjaan',$insert_history);
    }
    // end profil

    // PEsan
    // public function Tampildata_pemesan($iduser)
    // {
    //   $query = $this->db->query("SELECT * FROM data_pesanan WHERE id_user=$iduser ORDER BY id_pesanan DESC");
    //   return $query->result();
    // }

    // public function Simpan_pesan($tangkap_pesan)
    // {
    // 	$this->db->insert('message', $tangkap_pesan);
    // }

    // public function Ambil_pesan($id_mekanik)
    // {
    //   $query = $this->db->query("SELECT * FROM message WHERE id_mekanik=$id_mekanik");
    //   return $query->result();
    // }
    // end pesan

   
}


?>