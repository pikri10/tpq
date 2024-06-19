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
}