<?php

class homeadmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pesanan');
    }

    public function index()
    {
        $data['pesanan'] = $this->M_pesanan->get_pesanan_admin();
        $this->load->view('V_homeadmin', $data);
    }
}
