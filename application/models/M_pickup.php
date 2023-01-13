<?php

class M_pickup extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //get data mahasiswa
    public function get_pelanggan()
    {
        $sql = "SELECT * FROM account";
        $data = $this->db->query($sql);
        return $data->result();
    }


    public function delete_pelanggan($id)
    {
        $this->db->delete('account', array('id_Account' => $id));
    }

    public function update_data($data)
    {
        $id_Account = $this->input->post('id_Account');
        $Username = $this->input->post('Username');
        $Email =  $this->input->post('Email');
        $role_id =  $this->input->post('role_id');
        $date_created =  $this->input->post('date_created');

        $data = array(
            'id_Account'  => $id_Account,
            'Username'       => $Username,
            'Email'   => $Email,
            'role_id'   => $role_id,
            'date_created'   => $date_created,
        );

        $where = array(
            'id_Account' => $id_Account
        );
        $this->db->where($where);
        $this->db->update('account', $data);
    }

    public function update_pelanggan($data)
    {
        $id_Account = $this->input->post('id_Account');
        $namadepan = $this->input->post('namadepan');
        $namabelakang =  $this->input->post('namabelakang');
        $jeniskelamin =  $this->input->post('jeniskelamin');
        $Email =  $this->input->post('Email');
        $Sandi =  $this->input->post('Sandi');
        $notelepon =  $this->input->post('notelepon');
        $alamat = $this->input->post('alamat');

        $data = array(
            'id_Account'  => $id_Account,
            'namadepan'       => $namadepan,
            'namabelakang'   => $namabelakang,
            'jeniskelamin'   => $jeniskelamin,
            'Email'   => $Email,
            'Sandi' => $Sandi,
            'notelepon' => $notelepon,
            'alamat' => $alamat
        );

        $where = array(
            'id_Account' => $id_Account
        );
        $this->db->where($where);
        $this->db->update('account', $data);
    }

    public function update_driver($data)
    {
        $Username = $this->input->post('Username');
        $Email =  $this->input->post('Email');
        $notelepon =  $this->input->post('notelepon');
        $alamat = $this->input->post('alamat');

        $data = array(
            'Username'  => $Username,
            'Email'   => $Email,
            'notelepon' => $notelepon,
            'alamat' => $alamat
        );

        $where = array(
            'Username' => $Username
        );
        $this->db->where($where);
        $this->db->update('account', $data);
    }

    public function get_mahasiswa_spesifik($id)
    {
        $this->db->where('id_Account', $id);
        $data = $this->db->get('account');
        return $data->result();
    }
}
