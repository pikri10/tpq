<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_model extends CI_Model
{
    public function get_guru_tpq($id)
    {
        return $this->db->get_where('guru_tpq', ['id' => $id])->row_array();
    }
    public function get_guru_madrasah($id)
    {
        return $this->db->get_where('guru_madrasah', ['id' => $id])->row_array();
    }
    public function get_guru_tahfidz($id)
    {
        return $this->db->get_where('guru_tahfidz', ['id' => $id])->row_array();
    }
    public function get_siswa_tpq($id)
    {
        return $this->db->get_where('siswa_tpq', ['id' => $id])->row_array();
    }
    public function get_siswa_madrasah($id)
    {
        return $this->db->get_where('siswa_madrasah', ['id' => $id])->row_array();
    }
    public function get_siswa_tahfidz($id)
    {
        return $this->db->get_where('siswa_tahfidz', ['id' => $id])->row_array();
    }
    public function edit_siswa_tpq(){
        $data = [
            'nis' => $this->input->post('nis', true),
            'nama' => $this->input->post('nama', true),
            'nik' => $this->input->post('nik', true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
            'tempat_lahir' => $this->input->post('tempat_lahir', true),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
            'alamat' => $this->input->post('alamat', true),
            'ibu' => $this->input->post('ibu', true),
            'ayah' => $this->input->post('ayah', true),
            'nomor_ortu' => $this->input->post('nomor_ortu', true),
            'foto' => 'default.jpg',
            'tahun_masuk' => $this->input->post('tahun_masuk', true),
            'uang_gedung' => $this->input->post('uang_gedung', true),
            'tagihan1' => $this->input->post('tagihan1', true),
            'tagihan2' => $this->input->post('tagihan2', true),
            'tagihan3' => $this->input->post('tagihan3', true),
            'tagihan4' => $this->input->post('tagihan4', true),
            'tagihan5' => $this->input->post('tagihan5', true),
            'tagihan6' => $this->input->post('tagihan6', true),
            'tabungan' => $this->input->post('tabungan', true)
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('siswa_tpq', $data);
    }
    public function edit_siswa_madrasah(){
        $data = [
                'nis' => $this->input->post('nis', true),
				'nama' => $this->input->post('nama', true),
				'nik' => $this->input->post('nik', true),
				'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
				'tempat_lahir' => $this->input->post('tempat_lahir', true),
				'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
				'alamat' => $this->input->post('alamat', true),
				'ibu' => $this->input->post('ibu', true),
				'ayah' => $this->input->post('ayah', true),
				'nomor_ortu' => $this->input->post('nomor_ortu', true),
				'foto' => 'default.jpg',
                'tahun_masuk' => $this->input->post('tahun_masuk', true),
                'uang_gedung' => $this->input->post('uang_gedung', true),
                'tagihan1' => $this->input->post('tagihan1', true),
                'tagihan2' => $this->input->post('tagihan2', true),
                'tagihan3' => $this->input->post('tagihan3', true),
                'tagihan4' => $this->input->post('tagihan4', true),
                'tagihan5' => $this->input->post('tagihan5', true),
                'tagihan6' => $this->input->post('tagihan6', true),
                'tabungan' => $this->input->post('tabungan', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('siswa_madrasah', $data);
    }
    public function edit_siswa_tahfidz(){
        $data = [
            'nis' => $this->input->post('nis', true),
            'nama' => $this->input->post('nama', true),
            'nik' => $this->input->post('nik', true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
            'tempat_lahir' => $this->input->post('tempat_lahir', true),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
            'alamat' => $this->input->post('alamat', true),
            'ibu' => $this->input->post('ibu', true),
            'ayah' => $this->input->post('ayah', true),
            'nomor_ortu' => $this->input->post('nomor_ortu', true),
            'foto' => 'default.jpg',
            'tahun_masuk' => $this->input->post('tahun_masuk', true),
            'uang_gedung' => $this->input->post('uang_gedung', true),
            'tagihan1' => $this->input->post('tagihan1', true),
            'tagihan2' => $this->input->post('tagihan2', true),
            'tagihan3' => $this->input->post('tagihan3', true),
            'tagihan4' => $this->input->post('tagihan4', true),
            'tagihan5' => $this->input->post('tagihan5', true),
            'tagihan6' => $this->input->post('tagihan6', true),
            'tabungan' => $this->input->post('tabungan', true)
    ];

    $this->db->where('id', $this->input->post('id'));
    $this->db->update('siswa_tahfidz', $data);
    }
    public function tagihan_siswa_tpq(){
        $data = [
                'uang_gedung' => $this->input->post('uang_gedung', true),
                'tagihan1' => $this->input->post('tagihan1', true),
                'tagihan2' => $this->input->post('tagihan2', true),
                'tagihan3' => $this->input->post('tagihan3', true),
                'tagihan4' => $this->input->post('tagihan4', true),
                'tagihan5' => $this->input->post('tagihan5', true),
                'tagihan6' => $this->input->post('tagihan6', true),
                'tabungan' => $this->input->post('tabungan', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('siswa_tpq', $data);
    }
    public function tagihan_siswa_madrasah(){
        $data = [
                'uang_gedung' => $this->input->post('uang_gedung', true),
                'tagihan1' => $this->input->post('tagihan1', true),
                'tagihan2' => $this->input->post('tagihan2', true),
                'tagihan3' => $this->input->post('tagihan3', true),
                'tagihan4' => $this->input->post('tagihan4', true),
                'tagihan5' => $this->input->post('tagihan5', true),
                'tagihan6' => $this->input->post('tagihan6', true),
                'tabungan' => $this->input->post('tabungan', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('siswa_madrasah', $data);
    }
    public function tagihan_siswa_tahfidz(){
        $data = [
                'uang_gedung' => $this->input->post('uang_gedung', true),
                'tagihan1' => $this->input->post('tagihan1', true),
                'tagihan2' => $this->input->post('tagihan2', true),
                'tagihan3' => $this->input->post('tagihan3', true),
                'tagihan4' => $this->input->post('tagihan4', true),
                'tagihan5' => $this->input->post('tagihan5', true),
                'tagihan6' => $this->input->post('tagihan6', true),
                'tabungan' => $this->input->post('tabungan', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('siswa_tahfidz', $data);
    }
}