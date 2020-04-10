<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controler extends CI_Controller {

	public function index()
	{
		$this->load->view('Loguin_vista');
    }
    public function dashboard()
	{
        if($this->session->has_userdata('user'))
        {
            $this->load->view('Dasboard/Dashboard_Vista');
            $this->load->view('Dasboard/Decoration_vista');
        }
        else
        {
            $this->session->set_flashdata('error','No ha iniciado sesión');
            redirect(site_url(['Login_controler','index']));
        }
    }
    public function ingresar()
	{
        $this->load->model('Login_modelo');        
        $username = $this->input->post('correo');
        $password = $this->input->post('contra');
        $respuesta = $this->Login_modelo->authenticate($username, $password);
        if($respuesta)
        {          
            $this->session->set_userdata('user',$respuesta);
            redirect(site_url(['Login_controler','dashboard']));
        }
        else
        {       
            $this->session->set_flashdata('error','Usuario o contraseña invalido');
            redirect(site_url(['Login_controler','index']));
        }
    }

    public function salir()
	{
		$this->session->sess_destroy();
    	$this->session->set_flashdata('error', 'Inicie sesión nuevamente');
		redirect(site_url(['Login_controler','index']));
    }
    

    public function verArboles($user)
	{
        $this->load->model('Login_modelo'); 
        $respuesta = $this->Login_modelo->cantidadArboles($user);
        $respuestall = $this->Login_modelo->misArboles($user);
        $this->session->set_userdata('misArboles',$respuesta);
        $this->load->view('Dasboard/Dashboard_Vista');
        $this->load->view('Dasboard/misArboles_vista');
    }

    public function comprar($user)
	{
        $this->load->view('Dasboard/Dashboard_Vista');
        $this->load->view('Tienda_vista');
    }

    public function eliminarArbol($id_cliente_arbol,$nombre, $id_arbol)
	{
        $this->load->model('Login_modelo'); 
        $respuesta = $this->Login_modelo->eliminarArbolM($id_cliente_arbol,$nombre, $id_arbol);
        $this->load->view('Dasboard/Dashboard_Vista');
        $this->load->view('Dasboard/misArboles_vista');
        if(!$respuesta)
        {
            $this->session->set_flashdata('error', 'No se ha podido eliminar');
        } 
    }
    public function album($user)
	{
        $this->load->view('Dasboard/Dashboard_Vista');
        $this->load->view('album');
    }
    public function graf()
	{
        $this->load->model('Login_modelo'); 
        $arbolesRegistrados = $this->Login_modelo->arbolesRegistrados();
        $cantPersonas = $this->Login_modelo->cantPersonas();
        $arboles_clientes = $this->Login_modelo->arboles_clientes();
        $this->session->set_userdata('arbolesRegistrados',$arbolesRegistrados);
        $this->session->set_userdata('cantPersonas',$cantPersonas);
        $this->session->set_userdata('arboles_clientes',$arboles_clientes);
        $this->load->view('Dasboard/Dashboard_Vista');
        $this->load->view('Graficos_vista');
    }
}