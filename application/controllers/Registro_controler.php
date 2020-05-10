<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_controler extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Home_vista');
    }
    public function registro()
	{
		$this->load->view('Registro_vista');
    }
    public function save()
	{
        $this->load->model('Registro_modelo');        
		if(($this->input->post('nombre') && $this->input->post('apellidos')&&$this->input->post('telefono') && $this->input->post('email')
		&&$this->input->post('pass') &&$this->input->post('direccion')&&$this->input->post('pais'))== "")
		{
			$this->session->set_flashdata('Submit',"Por favor rellene todos los campos");
			$this->load->view('Registro_vista');
		}
		else{
			$data = array('nombre'=>$this->input->post('nombre'),'apellido'=>$this->input->post('apellidos'),'telefono'=>$this->input->post('telefono')
        ,'correo'=>$this->input->post('email'),'contra'=>$this->input->post('pass'),'direccion'=>$this->input->post('direccion'),'pais'=>$this->input->post('pais')
		,'administrador'=>$this->input->post('administrador'));
		$valor = $this->Registro_modelo->guardar($data);
        if($valor)
        {
			$this->load->view('Loguin_vista');
        }
        else
        {
			$this->load->view('Registro_vista');
            echo "<h1>El usuario no se pudo agregar</h1>";
        }
		}
        

        
        
    }
}