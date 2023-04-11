<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastrado extends CI_Controller {

	public function index(){
		$this->load->model("Cad_model");
		$lista=$this->Cad_model->buscaTodos();
		$dados=array("usuarios"=>$lista);
		$this->load->view('usuarios/index',$dados);
	}
	public function formulario(){
		$this->load->view('usuarios/formulario');
	}
	public function novo(){
		$usercad=array(
			"email"=>$this->input->post("email"),
			"faculdade"=>$this->input->post("faculdade"),
			"semestre"=>$this->input->post("semestre"),
			"presenca"=>$this->input->post("presenca"),
			"atividade"=>$this->input->post("atividade")
		);
		$this->load->model("Cad_model");
		$this->Cad_model->salva($usercad);
		$this->load->set_flashdata("success", "dados cadastrados com sucesso!");
		redirect('/');
	}
}
