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

    public function formulario($id)
	{
        $this->load->model('Arbol_modelo');
        $result = $this->Arbol_modelo->fotos($id);
        $data = array('consulta' => $result);
        $this->session->set_flashdata('arbol',$id);
        $this->load->view('Dasboard/Dashboard_Vista');
        $this->load->view('album',$data);
    }
    public function Cargarimagen($id_arbol)
	{
        $config['upload_path'] = "./uploads/"; 
        $config['allowed_types'] = "jpg|png";
        $config['max_size'] = "50000";
        $config['max_width'] = "20000";
        $config['max_height'] = "20000";
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('foto'))
        {
            $data = $this->upload->display_errors();
            $this->session->set_flashdata('retorno',$data);
        }
        else{
            $mi_archivo = $this->upload->data('file_name');
            $this->load->model('Arbol_modelo');
            $ruta = "uploads/".$mi_archivo;
            $result = $this->Arbol_modelo->guardar($ruta,$id_arbol);
            $this->session->set_flashdata('retorno',"Se agregó con éxito");
        }
        $this->formulario($id_arbol);
    }

    

}