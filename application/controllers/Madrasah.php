<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madrasah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Daftar Siswa Madrasah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['siswa'] = $this->db->get('siswa_madrasah')->result_array();
        $data['siswa'] = $this->db->get('siswa_madrasah')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/siswa_madrasah', $data);
        $this->load->view('templates/footer');
    }
    public function guru()
    {
        $data['title'] = 'Daftar Guru Madrasah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['guru'] = $this->db->get('guru_madrasah')->result_array();
        $data['guru'] = $this->db->get('guru_madrasah')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/guru_madrasah', $data);
        $this->load->view('templates/footer');
    }
    public function detail_guru($id)
    {
        $data['title'] = 'Detail Guru Madrasah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Detail_model');
        $data['guru'] = $this->Detail_model->get_guru_madrasah($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/detail_guru_madrasah', $data);
        $this->load->view('templates/footer');
    }
    public function detail_siswa($id)
    {
        $data['title'] = 'Detail Siswa Madrasah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Detail_model');
        $data['siswa'] = $this->Detail_model->get_siswa_madrasah($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/detail_siswa_tpq', $data);
        $this->load->view('templates/footer');
    }
    public function edit_siswa($id)
    {
        $data['title'] = 'Edit Siswa Madrasah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Detail_model');
        $data['siswa'] = $this->Detail_model->get_siswa_madrasah($id);

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
        $this->form_validation->set_rules('tahun_masuk', 'Tomor_ortu', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit_siswa_madrasah', $data);
            $this->load->view('templates/footer');
        }else{
            $this->Detail_model->edit_siswa_madrasah();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data sudah di-update!</div>');
            redirect('siswa/siswa_madrasah');
        }
    }
}