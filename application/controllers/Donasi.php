<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_donasi');
    }

    public function index()
    {
        $this->load->view('V_donasi');
    }

    public function read_donasi()
    {
        $data['donasi'] = $this->M_donasi->get_donasi();
        $this->load->view('V_listdonasi', $data);
    }

    public function donasi()
    {
        echo "<script>alert('Donasi Telah Berhasil Dikirim !');</script>";
        $this->M_donasi->insert_donasi();
        redirect('Registration/logout');
    }
}
