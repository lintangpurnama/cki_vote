<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suara_model extends CI_Model
{

    public function getsuara()
    {
        $this->db->select('*,suara.id as id_suara, user.nama as nama_user');
        $this->db->from('suara');
        $this->db->join('user', 'user.id = suara.id_user');
        return $this->db->get();
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('suara');
    }
}
