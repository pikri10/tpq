<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Dashboard Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }
    public function delete_role($id){
        $this->db->where('id', $id);
        $this->db->delete('user_role');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Role has been deleted!</div>');
        redirect('admin/role');
    }
    public function role_edit($id){
        $data['title'] = 'Edit Roles';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Admin_model');
        $data['r'] = $this->Admin_model->getRoleById($id);

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role_edit', $data);
            $this->load->view('templates/footer');
        }else{
            $this->Admin_model->editRole();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role has been updated!</div>');
            redirect('admin/role');
        }
    }
    public function roleaccess($role_id)
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }
    public function changeaccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if($result->num_rows() < 1){
            $this->db->insert('user_access_menu', $data);
        }else{
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }
    public function rekap()
    {
        $data['title'] = 'Rekap Administrasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/rekap', $data);
            $this->load->view('templates/footer');
    }

    public function tambah_guru()
    {
        $data['title'] = 'Tambah Guru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tambahguru', $data);
        $this->load->view('templates/footer');
    }
    public function daftar_tpq()
    {
        $data['title'] = 'Pendaftaran Guru TPQ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('kode', 'Kode', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('nipy', 'Nipy', 'required|trim');

        if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/guru_tpq', $data);
            $this->load->view('templates/footer');
		}
		else{
			$data = [
				'kode_guru' => $this->input->post('kode', true),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'nik' => htmlspecialchars($this->input->post('nik', true)),
				'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
				'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
				'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'nipy' => htmlspecialchars($this->input->post('nipy', true)),
				'nomor_hp' => htmlspecialchars($this->input->post('nomor_hp', true)),
				'foto' => 'default.jpg'
			];

			$this->db->insert('guru_tpq', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mendaftar!</div>');
			redirect('admin/daftar_tpq');
		}
    }
    public function daftar_madrasah()
    {
        $data['title'] = 'Pendaftaran Guru Madrasah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('kode', 'Kode', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('nipy', 'Nipy', 'required|trim');

        if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/guru_madrasah', $data);
            $this->load->view('templates/footer');
		}
		else{
			$data = [
				'kode_guru' => $this->input->post('kode', true),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'nik' => htmlspecialchars($this->input->post('nik', true)),
				'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
				'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
				'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'nipy' => htmlspecialchars($this->input->post('nipy', true)),
				'nomor_hp' => htmlspecialchars($this->input->post('nomor_hp', true)),
				'foto' => 'default.jpg'
			];

			$this->db->insert('guru_madrasah', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mendaftar!</div>');
			redirect('admin/daftar_madrasah');
		}
    }
    public function daftar_tahfidz()
    {
        $data['title'] = 'Pendaftaran Guru Tahfidz';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('kode', 'Kode', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('nipy', 'Nipy', 'required|trim');

        if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/guru_tahfidz', $data);
            $this->load->view('templates/footer');
		}
		else{
			$data = [
				'kode_guru' => $this->input->post('kode', true),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'nik' => htmlspecialchars($this->input->post('nik', true)),
				'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
				'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
				'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'nipy' => htmlspecialchars($this->input->post('nipy', true)),
				'nomor_hp' => htmlspecialchars($this->input->post('nomor_hp', true)),
				'foto' => 'default.jpg'
			];

			$this->db->insert('guru_tahfidz', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mendaftar!</div>');
			redirect('admin/daftar_tahfidz');
		}
    }
}