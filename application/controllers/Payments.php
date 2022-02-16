<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payments extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Booking_model', 'book');
        $this->load->model('User_model', 'user');
        $this->load->model('Hotel_model', 'hotel');
        $this->load->model('Payment_model', 'pay');
    }

    public function index()
    {
        $data['judul'] = 'Bookings';
        $data['books'] = $this->book->get();
        $data['hotels'] = $this->hotel->getHotel();
        $data['payments'] = $this->pay->get();
        $data['akun'] = $this->user->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('books/index', $data);
        $this->load->view('templates/footer');
    }
}
