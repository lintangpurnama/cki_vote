<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visi_misi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('visimisi_model');
        $this->load->library('form_validation');
        if ($this->session->userdata('level') != 'admin') {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Visi misi';
        $data['rows'] = $this->visimisi_model->getvisimisi()->result();


        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/topbar');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/visi_misi/visimisi', $data);
        $this->load->view('template_admin/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Visi & Misi';
        $data['kandidat'] = $this->db->get('kandidat')->result();
        $data['row'] = $this->db->get_where('visimisi', ['id' => $id])->row();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/topbar');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/visi_misi/edit_visimisi', $data);
        $this->load->view('template_admin/footer');
    }
    public function update()
    {
        $this->visimisi_model->update();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Data berhasil di Update</h4>
            
          </div>');

            redirect('admin/visi_misi');
        } else {
        }
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Visi & Misi';
        $data['kandidat'] = $this->db->get('kandidat')->result();


        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/topbar');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/visi_misi/tambah_visimisi', $data);
        $this->load->view('template_admin/footer');
    }
    public function hapus($id)
    {
        $this->visimisi_model->hapus($id);
    
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
    public function simpan()
    {
        $this->visimisi_model->simpan();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Data berhasil di Simpan</h4>
            
          </div>');

            redirect('admin/visi_misi');
        } else {
            echo 'gagal';
        }
    }
}
