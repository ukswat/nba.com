<?php

class Pais_model extends CI_Model {

	function __construct(){
		
		parent::__construct();
	}

	public function insertar($data) {
		$this->db->insert('pais', $data);
	}
	
	public function getTodos() {

		$query = $this->db->query("SELECT * FROM pais");
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return 'No encontrado';
	}

	public function getCampos() {
		return $this->db->list_fields('pais');
	}

	public function actualizar($data) {
		$this->db->where('id', $data['id']);
		unset($data[0]);
		$this->db->update('pais', $data);
	}

	public function borrar($id) {
		$this->db->where('id', $id);
		$this->db->delete('pais'); 
	}
}