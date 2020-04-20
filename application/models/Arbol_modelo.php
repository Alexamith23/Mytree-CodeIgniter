<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arbol_modelo extends CI_Model
{

    public function arboles()
    {
        $query = $this->db->query("select a.id,e.especie, a.nombre, a.sizea, ca.id as id2,p.nombre as nom, a.monto, p.id as persona
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

    function guardar($foto,$id)
    {
        $query = $this->db->query("INSERT INTO arbol_imagen(ruta,arbol)VALUES('$foto','$id')");
        if ($query) {
            return $query;
            } else {
            return false;
            }
    }

    function fotos($id)
    {
        $query = $this->db->query("SELECT * FROM arbol_imagen WHERE arbol = $id");
        if ($query) 
        {
            return $query;
        } 
        else 
        {
            return false;
        }
    }

    function correos()
    {
        $query = $this->db->query("SELECT id,correo FROM persona");
        if ($query) 
        {
            return $query;
        } 
        else 
        {
            return false;
        }
    }
    function arbol()
    {
        $query = $this->db->query("SELECT id,especie FROM especie");
        if ($query) 
        {
            return $query;
        } 
        else 
        {
            return false;
        }
    }
    function registrar($especie,$nombre,$monto)
    {
        $query = $this->db->query("INSERT INTO arbol(especie, nombre, monto) VALUES('$especie','$nombre','$monto')");
        if ($query) 
        {
            return $query;
        } 
        else 
        {
            return false;
        }
    }
    
    function arbol_persona($correo)
    {
        $query = $this->db->query("insert into cliente_arbol(id_owner, id_arbol) VALUES((SELECT id FROM persona WHERE correo = '$correo'),
        (SELECT MAX(id) FROM arbol))");
        if ($query) 
        {
            return $query;
        } 
        else 
        {
            return false;
        }
    }
    public function arbol_editar()
    {
        $query = $this->db->query("insert into cliente_arbol(id_owner, id_arbol) VALUES((SELECT id FROM persona WHERE correo = '$correo'),
        (SELECT MAX(id) FROM arbol))");
        if ($query) 
        {
            return $query;
        } 
        else 
        {
            return false;
        }
    }

    public function cargar_datos_editar($nombre_arbol, $id_usuario)
    {
        $query = $this->db->query("select a.id,p.correo as correo,e.especie as especie,e.id as espid,a.nombre as nombre,a.sizea as size, p.id as persona
        from cliente_arbol as ca
        inner join arbol as a
        on ca.id_arbol = a.id
        inner join persona as p
        on ca.id_owner = p.id
        inner join especie as e
        on e.id = a.especie
        and a.nombre = '$nombre_arbol' and p.id = '$id_usuario' ");
        if ($query) 
        {
            return $query;
        } 
        else 
        {
            return false;
        }
    }
    function registrarEditado($especie,$nombre,$size, $id_arbol)
    {
        $query = $this->db->query("update arbol set especie ='$especie', nombre ='$nombre',sizea ='$size'
        where id='$id_arbol';");
        if ($query) 
        {
            return $query;
        } 
        else 
        {
            return false;
        }
    }

    public function borrar_foto($id)
    {
        $query = $this->db->query("delete from arbol_imagen where id = '$id'");
        if ($query) 
        {
            return $query;
        } 
        else 
        {
            return false;
        }
    }
}