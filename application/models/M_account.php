<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_account extends CI_Model {
  function login($param){
    $query = 'SELECT * FROM USER_ACCOUNT
              WHERE username = "'.$param['username'].'"
              AND password = "'.$param['password'].'"
              ';
    $exec = $this->db->query($query);
    return $exec->result_array();
  }

  function do_update($param){
    $exec = $this->db->insert('STATUS_UPDATE', $param);
    // print_r($exec); exit;

    return $exec;
  }
}
?>
