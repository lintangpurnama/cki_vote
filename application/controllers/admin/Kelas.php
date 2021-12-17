<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kelas_model');
        $this->load->library('form_validation');
        if ($this->session->userdata('level') != 'admin') {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Kelas';
        $data['rows'] = $this->db->get('kelas')->result();


        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/topbar');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/kelas', $data);
        $this->load->view('template_admin/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Kelas';
        $data['row'] = $this->db->get_where('kelas', ['id' => $id])->row();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/topbar');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_kelas', $data);
        $this->load->view('template_admin/footer');
    }
    public function update()
    {
        $this->kelas_model->update();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Data berhasil di Update</h4>
            
          </div>');

            redirect('admin/kelas');
        }
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Kelas';
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/topbar');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/tambah_kelas', $data);
        $this->load->view('template_admin/footer');
    }
    public function hapus($id)
    {
        $this->db->delete('kelas', ['id' => $id]);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Data berhasil di hapus</h4>
            
          </div>');

            redirect('admin/kelas');
        }
    }
    public function simpan()
    {
        $this->kelas_model->simpan();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Data berhasil di Simpan</h4>
            
          </div>');

            redirect('admin/kelas');
        } else {
            echo 'gagal';
        }
    }
}
