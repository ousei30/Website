<?php

class Login_model extends CI_Model {

   public function __construct() {
      parent::__construct();
      $this->table = 'users';
   }

   public function Login($login) {
      $where = array(
         'is_deleted' => 0,
         'username' => $login
      );

      $result = $this->db->get_where($this->table, $where);
      return $result->row();
   }

   public function pword($username, $password)
{
    $where = array(
        'username' => $username,
        'pword' => $password,
        'is_deleted' => 0
    );
 
    $result = $this->db->get_where($this->table, $where);
    return $result->row();
}
   public function pwordd($where) {

      $result = $this->db->get_where($this->table, $where);
      return $result->row();
   }
}