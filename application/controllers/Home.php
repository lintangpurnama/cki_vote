<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('home_model');
    }
    public function index()
    {
        $data['title'] = 'Home';
        //mengambil data user berdasarkan user yg sedang login
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row();
        $data['kandidat'] = $this->db->get('kandidat')->result();
        
        $data['kandidat1'] = $this->db->get_where('suara',['nama_kandidat'=>'Calon ke-1'])->num_rows();
        $data['kandidat2'] = $this->db->get_where('suara',['nama_kandidat'=>'Calon ke-2'])->num_rows();
        $data['kandidat3'] = $this->db->get_where('suara',['nama_kandidat'=>'Calon ke-3'])->num_rows();


        $this->load->view('template/header', $data);
        $this->load->view('auth/home/home');
        $this->load->view('template/footer');
    }
    public function visimisi($id_kandidat)
    {
        $data['title'] = 'Visi & Misi';
        // $data['kelas'] = $this->db->get('kelas')->result();
        $data['kandidat'] = $this->db->get_where('kandidat', ['id' => $id_kandidat])->row();
        $data['visimisi'] = $this->db->get_where('visimisi', ['id_kandidat' => $id_kandidat])->row();

        $this->load->view('template/header', $data);
        $this->load->view('auth/home/visimisi');
        $this->load->view('template/footer');
    }

    public function pilih_kandidat()
    {
        $this->home_model->pilih_kandidat();
        $this->home_model->update_status_user();

        if ($this->db->affected_rows() > 0) {
            $result = ['success' => true];
        } else {
            $result = ['success' => false];
        }

        echo json_encode($result);
    }
}
