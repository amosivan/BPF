<?php

class Payment_model extends CI_Model
{
    public function get()
    {
        return $this->db->get('pembayaran')->result_array();
    }

    public function insert($data)
    {
        $this->db->insert('pembayaran', $data);
    }

    public function getByUserId($id)
    {
        return $this->db->get_where('pembayaran', ['id_user' => $id])->result_array();
    }
}
