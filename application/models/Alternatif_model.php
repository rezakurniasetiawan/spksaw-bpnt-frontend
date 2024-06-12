<?php

class Alternatif_model extends CI_Model
{
	public function get_data()
	{

		return $this->db->get('alternatif');
	}

	public function get_where($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function tambah_aksi($data, $table)
	{
		$this->db->insert('alternatif', $data);
	}
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function get_no($table)
	{
		$this->db->select('no');
		$this->db->from($table);
		$this->db->order_by('no', 'DESC');
		$this->db->limit(1);
		return $this->db->get();
	}
}
