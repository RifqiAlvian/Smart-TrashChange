<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pesanan');
    }

    public function index()
    {
        $this->load->view('V_pickup');
    }

    public function read_pesanan()
    {
        $data['pesanan'] = $this->M_pesanan->get_pesanan();
        $this->load->view('Driver/V_HomeDriver', $data);
    }

    public function pesanan()
    {
        echo "<script>alert('Driver Sedang Dipanggil Mohon Ditunggu!');</script>";
        $this->M_pesanan->insert_pesanan();
        $this->load->view('V_Home');
    }

    public function update_pesanan($id_pesanan)
    {
        echo "<script>alert('Pesanan Telah Diselesaikan');</script>";
        $this->M_pesanan->update_pesanan($id_pesanan);
        $data['pesanan'] = $this->M_pesanan->get_pesanan();
        $this->load->view('Driver/V_HomeDriver', $data);
    }

    public function delete_pesanan($id_pesanan)
    {
        $this->M_pesanan->delete_pesanan($id_pesanan);
        $data['pesanan'] = $this->M_pesanan->get_pesanan();
        $this->load->view('Driver/V_HomeDriver', $data);
    }
}
