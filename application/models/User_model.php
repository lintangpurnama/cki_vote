<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getuser()
    {
        //mengambil data kelas berdasarkan id dari table kelas
        //untuk ditampilkan di table user berdasarkan id_kelas
        $this->db->select('*,user.id as id_user, user.nama as nama_user,kelas.nama as nama_kelas');
        $this->db->from('user');
        $this->db->join('kelas', 'kelas.id = user.id_kelas', 'left');
        return $this->db->get();
    }

    public function tambah()
    {
        $data = [
            'id_kelas' => $this->input->post('id_kelas', true),
            'nama' => $this->input->post('nama', true),
            'email' => $this->input->post('email', true),
            'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            'level' => $this->input->post('level', true),
        ];
        $this->db->insert('user', $data);
    }

    public function update()
    {
        $data = [
            'id' => $this->input->post('id', true),
            'id_kelas' => $this->input->post('id_kelas', true),
            'nama' => $this->input->post('nama', true),
            'email' => $this->input->post('email', true),
            
        ];
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('user', $data);
    }

}
