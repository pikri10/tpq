<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $data['title'] = 'Pendaftaran Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }
    public function siswa_tpq()
    {
        $data['title'] = 'Daftar Siswa TPQ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['siswa'] = $this->db->get('siswa_tpq')->result_array();
        $data['siswa'] = $this->db->get('siswa_tpq')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/siswa_tpq', $data);
        $this->load->view('templates/footer');
    }
    public function siswa_madrasah()
    {
        $data['title'] = 'Daftar Siswa Madrasah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['siswa'] = $this->db->get('siswa_madrasah')->result_array();
        $data['siswa'] = $this->db->get('siswa_madrasah')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/siswa_madrasah', $data);
        $this->load->view('templates/footer');
    }
    public function siswa_tahfidz()
    {
        $data['title'] = 'Daftar Siswa Program Tahfidz';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['siswa'] = $this->db->get('siswa_tahfidz')->result_array();
        $data['siswa'] = $this->db->get('siswa_tahfidz')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/siswa_tahfidz', $data);
        $this->load->view('templates/footer');
    }
    public function daftar_tpq()
    {
        $data['title'] = 'Pendaftaran Siswa TPQ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nis', 'Nis', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('ibu', 'Ibu', 'required|trim');
        $this->form_validation->set_rules('ayah', 'Ayah', 'required|trim');
        $this->form_validation->set_rules('nomor_ortu', 'Nomor_ortu', 'required|trim');
        $this->form_validation->set_rules('tahun_masuk', 'Tahun_masuk', 'required|trim');

        if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('siswa/daftar_tpq', $data);
            $this->load->view('templates/footer');
		}
		else{
			$data = [
				'nis' => $this->input->post('nis', true),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'nik' => htmlspecialchars($this->input->post('nik', true)),
				'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
				'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
				'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'ibu' => htmlspecialchars($this->input->post('ibu', true)),
				'ayah' => htmlspecialchars($this->input->post('ayah', true)),
				'nomor_ortu' => htmlspecialchars($this->input->post('nomor_ortu', true)),
				'foto' => 'default.jpg',
                'tahun_masuk' => $this->input->post('tahun_masuk', true),
                'uang_gedung' => 'BELUM LUNAS',
                'tagihan1' => 'BELUM LUNAS',
                'tagihan2' => 'BELUM LUNAS',
                'tagihan3' => 'BELUM LUNAS',
                'tagihan4' => 'BELUM LUNAS',
                'tagihan5' => 'BELUM LUNAS',
                'tagihan6' => 'BELUM LUNAS',
                'tabungan' => 0
			];

			$this->db->insert('siswa_tpq', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mendaftar!</div>');
			redirect('siswa/daftar_tpq');
		}
    }
    public function daftar_madrasah()
    {
        $data['title'] = 'Pendaftaran Siswa Madrasah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nis', 'Nis', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('ibu', 'Ibu', 'required|trim');
        $this->form_validation->set_rules('ayah', 'Ayah', 'required|trim');
        $this->form_validation->set_rules('nomor_ortu', 'Nomor_ortu', 'required|trim');
        $this->form_validation->set_rules('tahun_masuk', 'Tahun_masuk', 'required|trim');

        if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('siswa/daftar_madrasah', $data);
            $this->load->view('templates/footer');
		}
		else{
			$data = [
				'nis' => $this->input->post('nis', true),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'nik' => htmlspecialchars($this->input->post('nik', true)),
				'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
				'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
				'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'ibu' => htmlspecialchars($this->input->post('ibu', true)),
				'ayah' => htmlspecialchars($this->input->post('ayah', true)),
				'nomor_ortu' => htmlspecialchars($this->input->post('nomor_ortu', true)),
				'foto' => 'default.jpg',
                'tahun_masuk' => $this->input->post('tahun_masuk', true),
                'uang_gedung' => 'BELUM LUNAS',
                'tagihan1' => 'BELUM LUNAS',
                'tagihan2' => 'BELUM LUNAS',
                'tagihan3' => 'BELUM LUNAS',
                'tagihan4' => 'BELUM LUNAS',
                'tagihan5' => 'BELUM LUNAS',
                'tagihan6' => 'BELUM LUNAS',
                'tabungan' => 0
			];

			$this->db->insert('siswa_madrasah', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mendaftar!</div>');
			redirect('siswa/daftar_madrasah');
		}
    }
    public function daftar_tahfidz()
    {
        $data['title'] = 'Pendaftaran Siswa Program Tahfidz';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nis', 'Nis', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('ibu', 'Ibu', 'required|trim');
        $this->form_validation->set_rules('ayah', 'Ayah', 'required|trim');
        $this->form_validation->set_rules('nomor_ortu', 'Nomor_ortu', 'required|trim');
        $this->form_validation->set_rules('tahun_masuk', 'Tahun_masuk', 'required|trim');

        if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('siswa/daftar_tahfidz', $data);
            $this->load->view('templates/footer');
		}
		else{
			$data = [
				'nis' => $this->input->post('nis', true),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'nik' => htmlspecialchars($this->input->post('nik', true)),
				'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
				'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
				'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'ibu' => htmlspecialchars($this->input->post('ibu', true)),
				'ayah' => htmlspecialchars($this->input->post('ayah', true)),
				'nomor_ortu' => htmlspecialchars($this->input->post('nomor_ortu', true)),
				'foto' => 'default.jpg',
                'tahun_masuk' => $this->input->post('tahun_masuk', true),
                'uang_gedung' => 'BELUM LUNAS',
                'tagihan1' => 'BELUM LUNAS',
                'tagihan2' => 'BELUM LUNAS',
                'tagihan3' => 'BELUM LUNAS',
                'tagihan4' => 'BELUM LUNAS',
                'tagihan5' => 'BELUM LUNAS',
                'tagihan6' => 'BELUM LUNAS',
                'tabungan' => 0
			];

			$this->db->insert('siswa_tahfidz', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mendaftar!</div>');
			redirect('siswa/daftar_tahfidz');
		}
    }
}