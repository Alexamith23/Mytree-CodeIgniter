<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arbol_modelo extends CI_Model
{

    public function arboles()
    {
        $query = $this->db->query("select a.id,e.especie, a.nombre, a.sizea, ca.id as id2,p.nombre as nom, a.monto
        from CLIENTE_ARBOL as ca 
        inner join arbol as a
        on ca.id_arbol = a.id
        inner join especie as e
        on a.especie = e.id
        inner join persona as p
        on ca.id_owner = p.id");
        if ($query) {
        return $query;
        } else {
        return false;
        }
    }
    public function clientes()
    {
        $query = $this->db->query("select p.nombre, p.apellido, p.telefono, p.direccion, c.name from persona as p 
        inner join country as c
        on p.pais = c.id");
        if ($query) {
        return $query;
        } else {
        return false;
        }
    }






}