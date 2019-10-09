<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	public function index(){
		$this->load->model("cliente_model");
		$lista = $this->cliente_model->listar();
		$dados = array('clientes' => $lista);
		$this->load->view('cliente/index', $dados);
	}
	public function novo(){
        $cliente = array(
            'telefone' => $this->input->post('telefone'),
            'nome' => $this->input->post('nome'),
            'endereco' => $this->input->post('endereco')
		);
		$this->load->model('cliente_model');
		$this->cliente_model->inserir($cliente);
		$this->session->set_flashdata('success', 'Cliente cadastrado com sucesso!');
		redirect('/');
		//$this->load->view('cliente/cliente_salvo');
    }
}
