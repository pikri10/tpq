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
            'tahun_masuk' => $this->input->post('tahun_masuk', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('siswa_tpq', $data);
    }
    public function edit_siswa_madrasah(){
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
            'tahun_masuk' => $this->input->post('tahun_masuk', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('siswa_madrasah', $data);
    }
    public function edit_siswa_tahfidz(){
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
            'tahun_masuk' => $this->input->post('tahun_masuk', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('siswa_tahfidz', $data);
    }
}