<?php

class Masterdata_model extends CI_Model
{
    // dependent
    public function get_dependent()
    {
        return $this->db->get('dependent');
    }

    public function get_where_dependent($where)
    {
        return $this->db->get_where('dependent', $where);
    }

    //electricity
    public function get_electricity()
    {
        return $this->db->get('electricity');
    }

    public function get_where_electricity($where)
    {
        return $this->db->get_where('electricity', $where);
    }

    //House
    public function get_house()
    {
        return $this->db->get('house');
    }

    public function get_where_house($where)
    {
        return $this->db->get_where('house', $where);
    }

    //Income
    public function get_income()
    {
        return $this->db->get('income');
    }

    public function get_where_income($where)
    {
        return $this->db->get_where('income', $where);
    }

    //Work
    public function get_work()
    {
        return $this->db->get('work');
    }

    public function get_where_work($where)
    {
        return $this->db->get_where('work', $where);
    }
}
