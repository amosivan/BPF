<?php

class Hotel_model extends CI_Model
{

    public function getHotel()
    {
        return $this->db->get('hotels')->result_array();
    }

    public function getHotelById($id)
    {
        return $this->db->get_where('hotels', ['id' => $id])->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('hotels', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('hotels');
    }

    public function update($id, $data)
    {
        $this->db->update('hotels', $data, $id);
        return $this->db->affected_rows();
    }

    public function countHotels()
    {
        return $this->db->count_all('hotels');
    }
}
