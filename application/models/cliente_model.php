<?php
class cliente_model extends CI_MODEL{
    public function listar(){
        return $this->db->get('cliente')->result_array();
    }
    
   public function inserir($cliente){
       $this->db->insert('cliente', $cliente);
   }
}