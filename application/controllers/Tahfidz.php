<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahfidz extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Daftar Siswa Program Tahfidz';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['siswa'] = $this->db->get('siswa_tahfidz')->result_array();
        $data['siswa'] = $this->db->get('siswa_tahfidz')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/siswa_tahfidz', $data);
        $this->load->view('templates/footer');
    }
    public function guru()
    {
        $data['title'] = 'Daftar Guru Program Tahfidz';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['guru'] = $this->db->get('guru_tahfidz')->result_array();
        $data['guru'] = $this->db->get('guru_tahfidz')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/guru_tahfidz', $data);
        $this->load->view('templates/footer');
    }
    public function detail_guru($id)
    {
        $data['title'] = 'Detail Guru Tahfidz';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Detail_model');
        $data['guru'] = $this->Detail_model->get_guru_tahfidz($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/detail_guru_tahfidz', $data);
        $this->load->view('templates/footer');
    }
    public function detail_siswa($id)
    {
        $data['title'] = 'Detail Siswa Tahfidz';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Detail_model');
        $data['siswa'] = $this->Detail_model->get_siswa_tahfidz($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/detail_siswa_tahfidz', $data);
        $this->load->view('templates/footer');
    }
    public function edit_siswa($id)
    {
        $data['title'] = 'Edit Siswa Tahfidz';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Detail_model');
        $data['siswa'] = $this->Detail_model->get_siswa_tahfidz($id);

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
        $this->form_validation->set_rules('uang_gedung', 'Uang_gedung', 'required|trim');
        $this->form_validation->set_rules('tagihan1', 'Tagihan1', 'required|trim');
        $this->form_validation->set_rules('tagihan2', 'Tagihan2', 'required|trim');
        $this->form_validation->set_rules('tagihan3', 'Tagihan3', 'required|trim');
        $this->form_validation->set_rules('tagihan4', 'Tagihan4', 'required|trim');
        $this->form_validation->set_rules('tagihan5', 'Tagihan5', 'required|trim');
        $this->form_validation->set_rules('tagihan6', 'Tagihan6', 'required|trim');
        $this->form_validation->set_rules('tabungan', 'Tabungan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit_siswa_tahfidz', $data);
            $this->load->view('templates/footer');
        }else{
            $this->Detail_model->edit_siswa_tahfidz();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data sudah di-update!</div>');
            redirect('siswa/siswa_tahfidz');
        }
    }
    public function tagihan_siswa($id)
    {
        $data['title'] = 'Tagihan Siswa Tahfidz';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Detail_model');
        $data['siswa'] = $this->Detail_model->get_siswa_tahfidz($id);

        $this->form_validation->set_rules('uang_gedung', 'Uang_gedung', 'required|trim');
        $this->form_validation->set_rules('tagihan1', 'Tagihan1', 'required|trim');
        $this->form_validation->set_rules('tagihan2', 'Tagihan2', 'required|trim');
        $this->form_validation->set_rules('tagihan3', 'Tagihan3', 'required|trim');
        $this->form_validation->set_rules('tagihan4', 'Tagihan4', 'required|trim');
        $this->form_validation->set_rules('tagihan5', 'Tagihan5', 'required|trim');
        $this->form_validation->set_rules('tagihan6', 'Tagihan6', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/tagihan_siswa_tahfidz', $data);
            $this->load->view('templates/footer');
        }else{
            $this->Detail_model->tagihan_siswa_tahfidz();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data sudah di-update!</div>');
            redirect('siswa/siswa_tahfidz');
        }
    }
}