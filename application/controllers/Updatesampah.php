<?php

class Updatesampah extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function index()
    {
        $data['title'] = 'Sampah';
        $data['updatesampah'] = $this->m_admin->get_sampah('listsampah')->result();
        $this->load->view('V_listsampah', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data';
        $this->load->view('V_tambahdata', $data);
    }

    public function menambah_data()
    {
        $this->m_admin->menambah_data();
        redirect('updatesampah');
    }

    public function hapus()
    {
        $id = $this->input->post('id');
        $this->m_admin->hapus($id);

        redirect('updatesampah');
    }

    public function edit($id)
    {
        $data['loaddata'] = $this->m_admin->ambil_id($id);
        $this->load->view('V_editdata', $data);
    }

    public function proses_edit()
    {
        $this->m_admin->proses_edit();
        redirect('updatesampah');
    }
}
