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
            $this->load->view('Dashboard_Vista');
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
}