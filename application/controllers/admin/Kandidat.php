<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kandidat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kandidat_model');
        $this->load->library('form_validation');
        if ($this->session->userdata('level') != 'admin') {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'kandidat';
        $data['kandidat'] = $this->db->get('kandidat')->result();


        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/topbar');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/kandidat', $data);
        $this->load->view('template_admin/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit kandidat';
        $data['row'] = $this->db->get_where('kandidat', ['id' => $id])->row();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/topbar');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_kandidat', $data);
        $this->load->view('template_admin/footer');
    }
    public function update()
    {
        $this->Kandidat_model->update();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Data berhasil di Update</h4>
            
          </div>');

            redirect('admin/kandidat');
        }
    }

}
