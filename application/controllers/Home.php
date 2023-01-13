<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('M_home');
    }

    public function index()
    {
        //prosess menampilkan data
        $data['hosting'] = $this->M_home->get_hosting();
        $data['title'] = "Data Hosting";
        $this->load->view("V_home", $data);
    }

    public function Admin()
    {
        //prosess menampilkan data
        $data['hosting'] = $this->M_home->get_hosting();
        $data['title'] = "Data Mahasiswa";
        $this->load->view("V_homeadmin", $data);
    }
    public function check($id_hosting = null)
    {
        $query = null; //emptying in case 

        $nama   = $_POST['nama_domain']; //getting from post value

        $query = $this->db->get_where('domain', array( //making selection
            'nama_domain' => $nama
        ));

        $count = $query->num_rows(); //counting result from query

        if ($count == 0) {
            $data = array(
                'nama_domain' => $nama
            );
            $this->M_home->insert_domain($data);
            $data_update['hosting'] = $this->M_home->get_mahasiswa_spesifik($id_hosting);
            $this->templates->payment('home/v_payment', $data_update);
        }
    }

    public function checkout($id_hosting = null)
    {
        if ($this->input->post()) {
            $data_domain = $this->input->post();
            $query = null; //emptying in case 

            $nama   = $_POST['nama_domain']; //getting from post value

            $query = $this->db->get_where('domain', array( //making selection
                'nama_domain' => $nama
            ));

            $count = $query->num_rows(); //counting result from query

            if ($count == 0) {
                $data = array(
                    'nama_domain' => $nama
                );
                $this->M_home->insert_domain($data);
                $data_update['hosting'] = $this->M_home->get_mahasiswa_spesifik($id_hosting);
                echo '<script>alert("Domain Tersedia Silahkan Lanjutkan Pembayaran");</script>';
                redirect('Home', 'refresh');
            } else {
                echo '<script>alert("Maaf Domain Yang Anda Ajukan Sudah Terpakai");</script>';
                redirect('Home', 'refresh');
            }
        } else {
            $data_update['hosting'] = $this->M_home->get_mahasiswa_spesifik($id_hosting);
            $this->templates->display_checkout('home/v_checkout', $data_update);
        }
    }

    public function add_data()
    {
        if ($this->input->post()) {
            $data_hosting = $this->input->post();
            $this->M_home->insert_data($data_hosting);
            redirect('Home/Admin');
        } else {
            $this->templates->display_adminadddata('home/v_homeAdminadddata');
        }
    }

    public function update_data($id_hosting = null)
    {
        if ($this->input->post()) {
            $data_hosting = $this->input->post();
            $this->M_home->update_data($data_hosting);
            redirect('Home/Admin');
        } else {
            $data_update['hosting'] = $this->M_home->get_mahasiswa_spesifik($id_hosting);
            $this->templates->display_adminupdate('home/v_homeAdminupdate', $data_update);
        }
    }

    public function delete_data($id_hosting)
    {
        $this->M_home->delete_mahasiswa($id_hosting);
        redirect('Home/Admin');
    }
    public function About()
    {
        $this->templates->about('home/v_About');
    }
}
