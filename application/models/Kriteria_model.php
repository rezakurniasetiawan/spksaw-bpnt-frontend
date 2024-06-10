<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Kriteria_model extends CI_Model {

	public function get_data($table)
	{

	return $this->db->get('kriteria');
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function edit_data ($where, $table){
 	return $this->db->get_where($table,$where);
 }
}
