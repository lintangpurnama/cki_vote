<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kandidat_model extends CI_Model
{

    public function update()
    {
        $foto = $_FILES['foto']['name'];
        if ($foto) {
            $config['upload_path']          = './assets/img/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2048;


            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                echo  $this->upload->display_errors();
            } else {
                $cekfotolama = $this->db->get_where('kandidat', ['id' => $this->input->post('id')])->row();
                if ($cekfotolama->foto != 'default.png') {
                    unlink('assets/img/' . $cekfotolama->foto);
                }

                $fotobaru = $this->upload->data('file_name');
                $kandidat['foto'] = $fotobaru;
            }
        }
        $kandidat['nama_kandidat'] = $this->input->post('nama_kandidat', true);
        $kandidat['nama_calon'] = $this->input->post('nama_calon', true);
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kandidat', $kandidat);
    }
}
