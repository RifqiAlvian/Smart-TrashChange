<?php

class M_donasi extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //get data mahasiswa
    public function get_donasi()
    {
        $sql = "SELECT * FROM donasi";
        $data = $this->db->query($sql);
        return $data->result();
    }

    public function insert_donasi()
    {
        $Username = $this->input->post('Username');
        $TcPoints = $this->input->post('TcPoints');

        $data = array(
            'Username' => $Username,
            'TcPoints' => $TcPoints,
            'date_created' => date('Y-m-d')
        );
        $data2 = array(
            'TcPoints' => 0
        );

        $where = array(
            'Username' => $Username
        );
        $this->db->insert('donasi', $data);
        $this->db->where($where);
        $this->db->update('account', $data2);
    }
}
