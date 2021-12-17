<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suara extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('suara_model');
        $this->load->library('form_validation');
        if ($this->session->userdata('level') != 'admin') {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Perolehan suara';
        $data['rows'] = $this->suara_model->getsuara()->result();


        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/topbar');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/suara/suara', $data);
        $this->load->view('template_admin/footer');
    }

    public function hapus($id)
    {
        $this->suara_model->hapus($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Data berhasil di hapus</h4>
            
          </div>');

            redirect('admin/visi_misi');
        } else {
            echo "a";
        }
    }
}
