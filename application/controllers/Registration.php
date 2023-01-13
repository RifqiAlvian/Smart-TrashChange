<?php

class Registration extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('M_authentication');
		$this->load->model('M_home');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view("V_registration");
	}

	public function viewlogin()
	{
		$this->load->view("V_login");
	}

	public function backFromaboutToindex()
	{
		$data['hosting'] = $this->M_home->get_hosting();
		$this->load->view("V_home", $data);
	}

	public function registration()
	{
		$this->load->view("V_registration");
	}

	function login()
	{
		$Username = $this->input->post('Username');
		$Sandi = $this->input->post('Sandi');

		$cekuserdata = $this->M_authentication->verified($Username);
		if ($cekuserdata) {
			$ceklogin = $this->M_authentication->ceklogin($Username, $Sandi);

			if ($ceklogin) {
				foreach ($ceklogin as $row)
					if ($row->is_active == "1") {
						$this->session->set_userdata('id_Account', $row->id_Account);
						$this->session->set_userdata('Username', $row->Username);
						$this->session->set_userdata('Sandi', $row->Sandi);
						$this->session->set_userdata('Email', $row->Email);
						$this->session->set_userdata('role_id', $row->role_id);
						$this->session->set_userdata('namadepan', $row->namadepan);
						$this->session->set_userdata('namabelakang', $row->namabelakang);
						$this->session->set_userdata('notelepon', $row->notelepon);
						$this->session->set_userdata('alamat', $row->alamat);
						$this->session->set_userdata('jeniskelamin', $row->jeniskelamin);
						$this->session->set_userdata('TcPoints', $row->TcPoints);

						if ($this->session->userdata('role_id') == "1") {
							$data['hosting'] = $this->M_home->get_hosting();
							redirect('Homeadmin', $data);
						} elseif (($this->session->userdata('role_id') == "0")) {
							$data['hosting'] = $this->M_home->get_hosting();
							$this->load->view("V_home", $data);
						} elseif (($this->session->userdata('role_id') == "2")) {
							$data['hosting'] = $this->M_home->get_hosting();
							redirect('Pesanan/read_pesanan', $data);
						}
					} else {
						echo "<script>alert('Maaf Username Belum Aktif.');</script>";
						$this->load->view("V_login");
					}
			} else {
				echo "<script>alert('Maaf Username Atau Sandi Anda Salah.');</script>";
				$this->load->view("V_login");
			}
		} else {
			echo "<script>alert('Username belum Terdaftar');</script>";
			$this->load->view("V_login");
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->load->view("V_login");
	}

	function save_data()
	{
		$this->form_validation->set_rules('Username', 'Username Tidak Valid', 'required|trim|is_unique[account.Username]');
		$this->form_validation->set_rules('Sandi', 'Sandi Tidak Boleh Kosong', 'required|trim');
		$this->form_validation->set_rules('Email', 'Email Tidak Valid', 'required|is_unique[account.Email]');
		if ($this->form_validation->run() == false) {
			$this->load->view("V_registration");
			echo "<script>alert('Data Yang Telah Anda Masukkan Tidak Valid atau Sudah Terpakai');</script>";
		} else {
			$this->M_authentication->add_account();
			echo "<script>alert('Data Yang Telah Anda Masukkan Berhasil');</script>";
			$this->viewlogin();
		}
	}
}
