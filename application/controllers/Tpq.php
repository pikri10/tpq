<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tpq extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
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
    public function guru()
    {
        $data['title'] = 'Daftar Guru TPQ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['guru'] = $this->db->get('guru_tpq')->result_array();
        $data['guru'] = $this->db->get('guru_tpq')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/guru_tpq', $data);
        $this->load->view('templates/footer');
    }
}