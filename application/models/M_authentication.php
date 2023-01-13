<?php

class M_authentication extends CI_Model
{
    function verified($Username)
    {
        $query = $this->db->query("SELECT * FROM account WHERE Username = '$Username' ");
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function ceklogin($Username, $Password)
    {
        $query = $this->db->query("SELECT * FROM account WHERE Sandi = '$Password' AND Username = '$Username' ");
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function add_account()
    {
        date_default_timezone_set('Asia/Karachi');
        $Username = $this->input->post('Username');
        $Email = $this->input->post('Email');
        $Password = $this->input->post('Sandi');

        $data = array(
            'Username' => $Username,
            'Email' => $Email,
            'Sandi' => $Password,
            'role_id' => 0,
            'is_active' => 1,
            'date_created' => date('Y-m-d'),
            'namadepan' => "",
            'namabelakang' => "",
            'TcPoints' => 0,
            'notelepon' => "",
            'alamat' => "",
            'jeniskelamin' => ""
        );
        $this->db->insert('account', $data);
    }
}
