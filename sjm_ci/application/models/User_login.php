<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_login extends CI_Model 
{ 
    public function __construct(){
      $this->usertabel = 'user';
    }

    public function Login(){
      // cek session
      // return isset($_SESSION['id_user']);
      return $this->session->has_userdata('id_user');
    }

    public function Cek_login($table, $username, $password)
    {
       $this->db->select("*");
       $this->db->from($table);
       $this->db->where($username);
       $this->db->where($password);
       $query = $this->db->get();

       if ($query->num_rows() == 0) {
           return false;
       }
       else{
           return $query->result();
       }
    }

    public function Tampildata_user()
    {
      $id_user = $_SESSION['id_user'];
      $query = $this->db->query("SELECT * FROM user WHERE id_user=$id_user");
      return $query->result();
    }

    public function Tampildata_pesanan()
    {
      $id_user = $_SESSION['id_user'];
      $query = $this->db->query("SELECT * FROM data_pesanan WHERE id_user=$id_user ORDER BY id_pesanan DESC");
      return $query->result();
    }

    public function Tambah_user($data)
    {
      // insert into user 
      $this->db->insert('user', $data);   
    }

    public function Edit_user($data)
    {
      $id_user = $_SESSION['id_user'];
      $this->db->where('id_user', $id_user);
      $this->db->update('user',$data);
    }

    public function Pesanan_user($data)
    { 
      $this->db->insert('data_pesanan', $data);
    }

    public function Editfoto_user($data)
    {
      $id_user = $_SESSION['id_user'];
      $this->db->where('id_user', $id_user);
      $this->db->update('user', $data);
    }

}

?>