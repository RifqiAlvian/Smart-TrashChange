<?php

class Pelanggan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pelanggan');
    }

    public function index()
    {
        $data['title'] = 'Sampah';
        $data['hosting'] = $this->M_pelanggan->get_pelanggan();
        $this->load->view('V_listpelanggan', $data);
    }

    public function delete_data($id_pelanggan)
    {
        $this->M_pelanggan->delete_pelanggan($id_pelanggan);
        redirect('Pelanggan');
    }
    public function update_data($id_pelanggan = null)
    {
        if ($this->input->post()) {
            $data_pelanggan = $this->input->post();
            $this->M_pelanggan->update_data($data_pelanggan);
            redirect('Pelanggan');
        } else {
            $data_update['hosting'] = $this->M_pelanggan->get_mahasiswa_spesifik($id_pelanggan);
            $this->load->view('V_editpelanggan', $data_update);
        }
    }
    public function update_pelanggan($id_pelanggan = null)
    {
        if ($this->input->post()) {
            $data_pelanggan = $this->input->post();
            $this->M_pelanggan->update_pelanggan($data_pelanggan);
            $this->load->view("V_kelolaakun");
        } else {
            $this->load->view("V_kelolaakun");
        }
    }
    public function update_driver($id_pelanggan = null)
    {
        if ($this->input->post()) {
            $data_pelanggan = $this->input->post();
            $this->M_pelanggan->update_driver($data_pelanggan);
            $this->load->view("Driver/V_ProfileDriver");
        } else {
            $this->load->view("Driver/V_ProfileDriver");
        }
    }
}
