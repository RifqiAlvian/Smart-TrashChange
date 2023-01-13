<?php

class M_guidance extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_panduan_name()
    {
        $sql = "SELECT no_guidance, name_guidance FROM guidance GROUP BY name_guidance ORDER BY id_guidance ASC";
        $data = $this->db->query($sql);
        return $data->result();
    }

    public function get_panduan_spec($no_guidance)
    {
        $sql = "SELECT * FROM guidance WHERE no_guidance = '$no_guidance' ORDER BY urutan ASC";
        $data = $this->db->query($sql);
        return $data->result();
    }

    public function get_panduan_spec_jenisdanharga()
    {
        $sql = "SELECT * FROM listsampah";
        $data = $this->db->query($sql);
        return $data->result();
    }
}
