<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hotel_model', 'hotel');
        $this->load->model('User_model', 'user');
        $this->load->model('Booking_model', 'booking');
        $this->load->model('Payment_model', 'pay');
    }

    public function index()
    {
        $data['judul'] = "The Muchda's";
        $data['hotels'] = $this->hotel->getHotel();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/user_footer');
    }

    public function userbooks()
    {
        $data['judul'] = 'Bookings';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $data['user']['id'];
        $data['books'] = $this->booking->getByUserId($id);
        if (!$data['user']) {
            redirect('auth');
        }
        $this->load->view('templates/user_header', $data);
        $this->load->view('user/booking', $data);
        $this->load->view('templates/user_footer');
    }

    public function reservation($id)
    {
        $data['judul'] = "The Muchda's";
        $data['hotel'] = $this->hotel->getHotelById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if (!$data['user']) {
            redirect('auth');
        } else {
            $this->form_validation->set_rules('date1', 'Arrival Date', 'required|trim');
            $this->form_validation->set_rules('date2', 'Leaving Date', 'required|trim');
            if ($this->form_validation->run() == false) {
                $this->load->view('templates/user_header', $data);
                $this->load->view('user/reservation', $data);
                $this->load->view('templates/user_footer');
            } else {
                $date1 = new DateTime($this->input->post('date1'));
                $date2 = new DateTime($this->input->post('date2'));
                $interval = $date1->diff($date2);
                $y = $interval->days;
                if ($y == 0) {
                    $y = 1;
                }
                $x = $this->input->post('total_price');
                $data = [
                    'id_user' => $this->input->post('id_user'),
                    'id_hotel' => $this->input->post('id_hotel'),
                    'date1' => $this->input->post('date1'),
                    'date2' => $this->input->post('date2'),
                    'total_days' => $y,
                    'total_price' => $x * $y
                ];
                $this->booking->insert($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your Booking Is Success </div>');
                redirect('user');
            }
        }
    }

    public function payNow($id)
    {
        $data['judul'] = "The Muchda's";
        $data['book'] = $this->booking->getById($id);
        $data['hotel'] = $this->hotel->getHotel();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if (!$data['user']) {
            redirect('auth');
        }
        $this->form_validation->set_rules('total_cost', 'Total Cost', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('user/paynow', $data);
            $this->load->view('templates/user_footer');
        } else {
            $data = [
                'id_booking' => $this->input->post('id_booking'),
                'id_user' => $this->input->post('id_user'),
                'id_hotel' => $this->input->post('id_hotel'),
                'total_cost' => $this->input->post('total_cost')
            ];
            $this->pay->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your Payment Is Success </div>');
            redirect('user');
        }
    }

    public function payments()
    {
        $data['judul'] = "Payments";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if (!$data['user']) {
            redirect('auth');
        }
        $id = $data['user']['id'];
        $data['payments'] = $this->pay->getByUserId($id);
        $data['booking'] = $this->booking->getByUserId($id);
        $data['hotel'] = $this->hotel->getHotel();
        $this->load->view('templates/user_header', $data);
        $this->load->view('user/payment', $data);
        $this->load->view('templates/user_footer');
    }
}
