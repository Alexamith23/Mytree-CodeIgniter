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


  public function cantidadArboles($user)
  {
    $query = $this->db->query("SELECT COUNT(id_owner) AS cantidad FROM CLIENTE_ARBOL where id_owner = '$user'");
    if ($query->result()) {
      return $query->result()[0];
    } else {
      return false;
    }
  }
  public function misArboles($user)
  {
    $query = $this->db->query("select a.id,e.especie, a.nombre, a.sizea, ca.id as id2
    from CLIENTE_ARBOL as ca 
    inner join arbol as a
    on ca.id_arbol = a.id
    inner join especie as e
    on a.especie = e.id
    and ca.id_owner = '$user'");

    if ($query) {
      return $query;
    } else {
      return false;
    }
  }

  public function eliminarArbolM($id_cliente_arbol,$nombre, $id_arbol)
  {
    $query = $this->db->query("DELETE FROM cliente_arbol WHERE id = '$id_cliente_arbol'");
    $queryll = $this->db->query("DELETE FROM arbol WHERE nombre ='$nombre'");
    $querylll = $this->db->query("DELETE FROM ARBOL_imagen WHERE arbol = '$id_arbol'");
    if ($query && $queryll && $querylll) {
      return true;
    } else {
      return false;
    }
  }

  public function arbolesRegistrados()
  {
    $query = $this->db->query("SELECT COUNT(id) AS cantidad FROM arbol");
    if ($query->result()) 
    {
      return $query->result()[0];
    } 
    else 
    {
      return false;
    }
  }
  public function cantPersonas()
  {
    $query = $this->db->query("SELECT COUNT(id) AS cantidad FROM persona");
    if ($query->result()) 
    {
      return $query->result()[0];
    } 
    else 
    {
      return false;
    }
  }
  public function arboles_clientes()
  {
    $query = $this->db->query("select count(distinct id_owner) AS cantidad from cliente_arbol");
    if ($query->result()) 
    {
      return $query->result()[0];
    } 
    else 
    {
      return false;
    }
  }
  
}