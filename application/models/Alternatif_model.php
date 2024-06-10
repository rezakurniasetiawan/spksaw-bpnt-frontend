<?php

class Alternatif_model extends CI_Model {
	public function get_data()
	{

	return $this->db->get('alternatif');
	}

	public function tambah_aksi($data, $table)
	{
		$this->db->insert('alternatif', $data);
	}
 public function hapus_data($where, $table){
 	$this->db->where($where);
 	$this->db->delete($table);
 	
 }

 public function edit_data ($where, $table){
 	return $this->db->get_where($table,$where);
 }
}
