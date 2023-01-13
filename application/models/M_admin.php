<?php

class M_admin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_sampah($table)
    {
        return $this->db->get($table);
    }

    public function menambah_data()
    {
        $data = [

            "kategori" => $this->input->POST('kategori'),
            "jenis" => $this->input->POST('jenis'),
            "satuan" => $this->input->POST('satuan'),
            "satuankilo" => $this->input->POST('satuankilo'),
            "hargamin" => $this->input->POST('hargamin'),
            "harga" => $this->input->POST('harga'),
        ];

        $this->db->insert('listsampah', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('listsampah');
        redirect('updatesampah');
    }

    public function ambil_id($id)
    {
        return $this->db->get_where('listsampah', ['id' => $id])->row_array();
    }

    public function proses_edit()
    {
        $data = [
            "kategori" => $this->input->post('kategori'),
            "jenis" => $this->input->post('jenis'),
            "satuan" => $this->input->post('satuan'),
            "satuankilo" => $this->input->post('satuankilo'),
            "hargamin" => $this->input->post('hargamin'),
            "harga" => $this->input->post('harga'),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('listsampah', $data);
    }
}
