<?php

class M_pesanan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //get data mahasiswa
    public function get_pesanan()
    {
        $sql = "SELECT * FROM pesanan WHERE Situation = 0";
        $data = $this->db->query($sql);
        return $data->result();
    }

    public function get_pesanan_admin()
    {
        $sql = "SELECT * FROM pesanan WHERE Situation = 1";
        $data = $this->db->query($sql);
        return $data->result();
    }

    public function get_pesanan_driver($NamaDriver)
    {
        $sql = "SELECT * FROM pesanan WHERE Situation = 1 AND NamaDriver = '$NamaDriver' ";
        $data = $this->db->query($sql);
        return $data->result();
    }

    public function insert_pesanan()
    {
        $Username = $this->input->post('Username');
        $Alamat = $this->input->post('Alamat');
        $Sampah = $this->input->post('Sampah');
        $BeratSampah = $this->input->post('BeratSampah');


        $data = array(
            'NamaPelanggan' => $Username,
            'AlamatPelanggan' => $Alamat,
            'Sampah' => $Sampah,
            'BeratSampah' => $BeratSampah,
        );

        $data2 = array(
            'TcPoints' => +5
        );

        $this->db->insert('pesanan', $data);
        $where = array(
            'Username' => $Username
        );
        $this->db->where($where);
        $this->db->update('Account', $data2);
    }

    public function delete_pesanan($id)
    {
        $this->db->delete('pesanan', array('id_pesanan' => $id));
    }

    public function update_pesanan($id_pesanan)
    {
        $UpahDriver = $this->input->post('UpahDriver');
        $NamaDriver = $this->input->post('NamaDriver');

        $data = array(
            'UpahDriver' => $UpahDriver,
            'NamaDriver' => $NamaDriver,
            'Situation' => 1
        );

        $where = array(
            'id_pesanan' => $id_pesanan
        );

        $this->db->where($where);
        $this->db->update('pesanan', $data);
    }
}
