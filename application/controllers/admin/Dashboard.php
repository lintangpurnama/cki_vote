<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = 'Dashboard';
        $data['total_user'] = $this->db->get('user')->num_rows();
        $data['total_suara'] = $this->db->get('suara')->num_rows();

        $data['kandidat1'] = $this->db->get_where('suara',['nama_kandidat'=>'Calon ke-1'])->num_rows();
        $data['kandidat2'] = $this->db->get_where('suara',['nama_kandidat'=>'Calon ke-2'])->num_rows();
        $data['kandidat3'] = $this->db->get_where('suara',['nama_kandidat'=>'Calon ke-3'])->num_rows();


        
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/topbar');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('template_admin/footer');
    }
}
