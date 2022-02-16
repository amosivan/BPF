<?php

class Dashboard extends CI_Controller
{


    public function index()
    {
        is_logged_in();
        $this->load->model('Booking_model', 'booking');
        $this->load->model('Hotel_model', 'hotel');
        $this->load->model('User_model', 'user');
        $data['judul'] = 'Admin Dashboard';
        $data['books'] = $this->booking->countBookings();
        $data['hotels'] = $this->hotel->countHotels();
        $data['users'] = $this->user->countUser();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}
