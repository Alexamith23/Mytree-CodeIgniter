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

    public function crearArbol()
    {
        $this->load->model('Arbol_modelo');

        $result = $this->Arbol_modelo->correos();
        $resultll = $this->Arbol_modelo->arbol();

        $data = array('consulta' => $result,'consultall' => $resultll);

        $this->load->view('Dasboard/Dashboard_Vista');
        $this->load->view('Crear_arbol',$data);
    }
    public function registrar($admin)
    {
        $this->load->model('Arbol_modelo');
        $correo = $this->input->post('mail');
        $especie = $this->input->post('tipo');
        $nombre = $this->input->post('arbol');
        $monto = $this->input->post('monto');
        $result = $this->Arbol_modelo->registrar($especie,$nombre,$monto);
        $result2 = $this->Arbol_modelo->arbol_persona($correo);
        if($result && $result2 && $admin == 't')
        {
            $this->session->set_flashdata('creado',"Se creó con éxito");
            $this->crearArbol();
        }
        else if(!($result && $result2)&& $admin == 't'){
            $this->session->set_flashdata('creado',"No se pudo crear");
            $this->crearArbol();
        }
        else if($result && $result2 && $admin == 'f')
        {
            $this->session->set_flashdata('creado',"El arbol ".$nombre." y con monto a donar de ".$monto."$ se solicitó exitosamente.");
            redirect(site_url(["Login_controler","comprar"]));
        }
        else if(!($result && $result2) && $admin == 'f'){
            $this->session->set_flashdata('creado',"No se pudo crear");
            redirect(site_url(["Login_controler","comprar"]));
        }
    }

    public function editar($nombre_arbol, $id_usuario)
    {
        $this->load->model('Arbol_modelo');
        $result = $this->Arbol_modelo->correos();
        $resultll = $this->Arbol_modelo->arbol();
        $resultlll = $this->Arbol_modelo->cargar_datos_editar($nombre_arbol, $id_usuario);
        $data = array('consulta' => $result,'consultall' => $resultll,'consultalll' => $resultlll);
        $this->load->view('Dasboard/Dashboard_Vista');
        $this->load->view('Editar_vista',$data);
    }
    
    public function registrarEdit()
    {
        $this->load->model('Arbol_modelo');
        $id = $this->input->post('id_arbol');
        $persona = $this->input->post('persona');
        $correo = $this->input->post('mail');
        $especie = $this->input->post('tipo');
        $nombre = $this->input->post('arbol');
        $size = $this->input->post('tam');
        $result = $this->Arbol_modelo->registrarEditado($especie,$nombre,$size,$id);
        if($result)
        {
            $this->session->set_flashdata('editado',"Se editó con éxito");
        }
        else{
            $this->session->set_flashdata('editado',"No se pudo editar");
        }
        $this->editar($nombre,$persona);
    }

    public function borarFoto($id_relacion, $id_arbol)
    {
        $this->load->model('Arbol_modelo');
        $result = $this->Arbol_modelo->borrar_foto($id_relacion);
        $this->formulario($id_arbol);
    }
}