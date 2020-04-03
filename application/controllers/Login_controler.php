<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controler extends CI_Controller {

	public function index()
	{
		$this->load->view('Loguin_vista');
    }
    public function ingresar()
	{
        $this->load->model('Login_modelo');        
        $username = $this->input->post('correo');
        $password = $this->input->post('contra');
        $respuesta = $this->Login_modelo->authenticate($username, $password);
        if($respuesta)
        {          
            echo "<h1>Dashboard $username</h1>";
        }
        else
        {       
            $this->load->view('Loguin_vista');
            echo "<h1>Usuario o contraseña invalido</h1>";
        }
    }
}