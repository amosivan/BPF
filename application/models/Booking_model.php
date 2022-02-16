<?php

class Booking_model extends CI_Model
{

    public function get()
    {
        return $this->db->get('bookings')->result_array();
    }

    public function getByUserId($id)
    {
        $this->db->select('b.*, h.name as name, u.name as user_name');
        $this->db->from('bookings b');
        $this->db->join('hotels h', 'b.id_hotel = h.id');
        $this->db->join('user u', 'b.id_user = u.id');
        $this->db->where('b.id_user', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where('bookings', ['id' => $id])->row_array();
    }

    public function insert($data)
    {
        $this->db->insert('bookings', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('bookings');
    }

    public function update($id, $data)
    {
        $this->db->update('bookings', $data, $id);
        return $this->db->affected_rows();
    }

    public function countBookings()
    {
        return $this->db->count_all('bookings');
    }
}
