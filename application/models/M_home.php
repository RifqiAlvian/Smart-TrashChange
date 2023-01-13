<?php

class M_home extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //get data mahasiswa
    public function get_hosting()
    {
        $sql = "SELECT * FROM hosting";
        $data = $this->db->query($sql);
        return $data->result();
    }
    public function insert_domain($data)
    {
        $sql = "INSERT INTO domain (nama_domain) 
                VALUES (?)";
        $this->db->query($sql, array($data['nama_domain']));
    }

    public function insert_data($data)
    {
        $sql = "INSERT INTO hosting (nama_hosting,has_cpanel,has_ssl,has_subdomain,has_storage,num_database,harga) 
                VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql, array($data['nama_hosting'], $data['has_cpanel'], $data['has_ssl'], $data['has_subdomain'], $data['has_storage'], $data['num_database'], $data['harga']));
    }

    public function get_mahasiswa_spesifik($id)
    {
        $this->db->where('id_hosting', $id);
        $data = $this->db->get('hosting');
        return $data->result();
    }

    public function update_data($data)
    {
        $nama_hosting = $this->input->post('nama_hosting');
        $has_cpanel = $this->input->post('has_cpanel');
        $has_ssl =  $this->input->post('has_ssl');
        $has_subdomain =  $this->input->post('has_subdomain');
        $has_storage =  $this->input->post('has_storage');
        $num_database =  $this->input->post('num_database');
        $harga =  $this->input->post('harga');

        $data = array(
            'nama_hosting'  => $nama_hosting,
            'has_cpanel'       => $has_cpanel,
            'has_ssl'   => $has_ssl,
            'has_subdomain'   => $has_subdomain,
            'has_storage'   => $has_storage,
            'num_database'   => $num_database,
            'harga'   => $harga,
        );

        $where = array(
            'nama_hosting' => $nama_hosting
        );
        $this->db->where($where);
        $this->db->update('hosting', $data);
    }

    public function delete_mahasiswa($id)
    {
        $this->db->delete('hosting', array('id_hosting' => $id));
    }
}
