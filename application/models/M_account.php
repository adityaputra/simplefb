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

  function getfeed($param, $limit, $offset = 0){
    // $query = $this->db->get_where('STATUS_UPDATE', array('username' => $param['username']), $limit, $offset);
    // print_r($query->result_array()); exit;
    $query = 'SELECT u.username, u.timestamp, u.content, a.picture_loc, a.name FROM STATUS_UPDATE u JOIN USER_ACCOUNT a WHERE u.username = a.username
              -- AND u.username = "'.$param['username'].'"
              ORDER BY u.timestamp DESC
              LIMIT '.$offset.', '.$limit.'

              ';
              // echo $query; exit;
    $exec = $this->db->query($query);
    return $exec->result_array();
  }
}
?>
