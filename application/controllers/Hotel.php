<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hotel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Hotel_model', 'hotel');
    }

    public function index()
    {
        $data['judul'] = 'Hotels';
        $data['hotels'] = $this->hotel->getHotel();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('hotel/index', $data);
        $this->load->view('templates/footer');
    }

    public function insert()
    {
        $data['judul'] = "Insert Hotel";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required', [
            'numeric' => 'Price must only contain numbers'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("templates/header", $data);
            $this->load->view("hotel/insert_hotel", $data);
            $this->load->view("templates/footer");
        } else {
            $data = [
                'name' => $this->input->post('name', true),
                'address' => $this->input->post('address', true),
                'price' => $this->input->post('price', true),
            ];
            $upload_image = $_FILES['photo']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '10000';
                $config['upload_path'] = './assets/images/hotel/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('photo')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('photo', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->hotel->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hotel success added</div>');
            redirect('hotel');
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Edit Hotel";
        $data['hotel'] = $this->hotel->getHotelById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required', [
            'numeric' => 'Price must only contain numbers'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("templates/header", $data);
            $this->load->view("hotel/edit_hotel", $data);
            $this->load->view("templates/footer");
        } else {

            $data = [
                'name' => $this->input->post('name', true),
                'address' => $this->input->post('address', true),
                'price' => $this->input->post('price', true),
            ];
            $upload_image = $_FILES['photo']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/hotel';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('photo')) {

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('photo', $new_image);
                    $query = $this->db->set('photo', $new_image);
                    if ($query) {
                        $old_image = $this->db->get_where('hotels', ['id' => $id])->row_array();
                        unlink(FCPATH . 'assets/images/hotel' . $old_image->img_product);
                    }
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->hotel->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data hotel Berhasil Diubah!</div>');
            redirect('hotel');
        }
    }

    public function delete($id)
    {
        $this->hotel->delete($id);
        redirect('hotel');
    }
}
