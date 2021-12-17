<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
    public function simpan()
    {
        //insert multi
        $kelas = $this->input->post('nama', true);
        $data = [];
        foreach ($kelas as $key => $value) {
            $data[] = [
                'nama' => $kelas[$key]
            ];
        }
        $this->db->insert_batch('kelas', $data);
    }
    public function update()
    {
        $data = ['nama' => $this->input->post('nama', true)];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kelas', $data);
    }
}
