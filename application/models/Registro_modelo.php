<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_modelo extends CI_Model
{

  public function guardar($data)
  {
      $query = $this->db->insert('persona',$data);
      return $query;
  }
}