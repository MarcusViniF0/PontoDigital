<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function novo(){
		$usuario=array(
		"nome"=>$this->input->post("nome"),
		"email"=>$this->input->post("email"),
        "senha"=>md5($this->input->post("senha"))
	);
	$this->load->model("usuarios_model");
	$this->usuarios_model->salva($usuario);
	$this->load->view('user_cad/novo');
	}
	
}
