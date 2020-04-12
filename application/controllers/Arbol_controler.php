<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arbol_controler extends CI_Controller {

    public function index()
	{
        $this->load->model('Arbol_modelo');
        $result = $this->Arbol_modelo->arboles();
        $data = array('consulta' => $result);
        $this->load->view('Dasboard/Dashboard_Vista');
		$this->load->view('CRUD_Arbol_Vista',$data);
    }
    public function clientes()
	{
        $this->load->model('Arbol_modelo');
        $result = $this->Arbol_modelo->clientes();
        $data = array('consulta' => $result);
        $this->load->view('Dasboard/Dashboard_Vista');
		$this->load->view('Clientes_Vista',$data);
    }

}