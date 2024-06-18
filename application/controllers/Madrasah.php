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
}