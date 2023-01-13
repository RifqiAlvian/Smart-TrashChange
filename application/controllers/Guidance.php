<?php

class Guidance extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_guidance');
    }

    public function index()
    {
        $data['guidance'] = $this->m_guidance->get_panduan_name();
        $this->load->view('V_guidance', $data);
    }

    public function tampil_data_spec($no_guidance = null)
    {
        if ($no_guidance == 5) {
            $data_spec['guidance'] = $this->m_guidance->get_panduan_spec_jenisdanharga();
            $this->load->view('V_guidance_exp_jenis', $data_spec);
        } else {
            $data_spec['guidance'] = $this->m_guidance->get_panduan_spec($no_guidance);
            $this->load->view('V_guidance_exp', $data_spec);
        }
    }
}
