<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_modelo extends CI_Model
{

    /**
   *  Validate in the database that the user exists
   *
   * @param $username  The username
   * @param $password The user's password
   */
  public function authenticate($username, $password)
  {
    $query = $this->db->get_where('persona', array('correo' => $username, 'contra' => $password));
    if ($query->result()) {
      return $query->result()[0];
    } else {
      return false;
    }
  }
}