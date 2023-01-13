<?php

class HistoryDriver extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('M_pesanan');
    }
    public function read($NamaDriver)
    {
        $data['pesanan'] = $this->M_pesanan->get_pesanan_driver($NamaDriver);
        $this->load->view('Driver/V_HistoryDriver', $data);
    }
}
