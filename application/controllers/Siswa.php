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
        $this->load->view('siswa/siswa_tpq', $data);
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
        $this->load->view('siswa/siswa_madrasah', $data);
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
        $this->load->view('siswa/siswa_tahfidz', $data);
        $this->load->view('templates/footer');
    }
    public function daftar_tpq()
    {
        $data['title'] = 'Pendaftaran Siswa TPQ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/daftar_tpq', $data);
        $this->load->view('templates/footer');
    }
    public function daftar_madrasah()
    {
        $data['title'] = 'Pendaftaran Siswa Madrasah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/daftar_madrasah', $data);
        $this->load->view('templates/footer');
    }
    public function daftar_tahfidz()
    {
        $data['title'] = 'Pendaftaran Siswa Program Tahfidz';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/daftar_tahfidz', $data);
        $this->load->view('templates/footer');
    }
}