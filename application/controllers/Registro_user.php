<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_user extends CI_Controller{

	function __construct(){

		parent::__construct();

		$this->load->model('usuario_model');
	}

	function index(){

		$this->load->view('register/registro');
	}

	function registroUsuario(){

		/*				-----	VALIDACION ESPECIFICA DE CAMPOS   ----
		
		// Validacion del campo Email (con Bootstrap no hace falta)
		$this->form_validation->set_rules('Email','Email', 'required');

		// Validacion del campo contrasenya
		$this->form_validation->set_rules('Contrasenya', 'Contrasenya', 'required|matches[Contrasenya_2]');

		// Validacion del campo Nombre
		$this->form_validation->set_rules('Nombre','Nombre','required|alpha|min_length[3]|max_length[100]');
		
		// Validacion del campo Apellido
		$this->form_validation->set_rules('Apellido','Apellido','required|min_length[3]|max_length[100]');

		// Validacion del campo Pais
		$this->form_validation->set_rules('Pais','Pais','required|is_natural');

		*/


			$data=array(
				'email'=>$this->input->post('Email'),
				'password'=>$this->input->post('Contrasenya'),
				'nombre'=>$this->input->post('Nombre'),
				'apellido'=>$this->input->post('Apellido'),
				'pais'=>$this->input->post('Pais'),
			);

			$this->usuario_model->registrarUsuario($data);

			if($this->usuario_model->registrarUsuario($data)){

				echo "Insertado con exito";
			}
			else{

				echo "Error en la insercion";
			}

	}
}

?>