<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
        if ($this->session->userdata('level') != 'admin') {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['title'] = 'User';
        $data['user'] = $this->user_model->getuser()->result();


        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/topbar');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/user/user', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah User';
        $data['kelas'] = $this->db->get('kelas')->result();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/topbar');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/user/tambah_user', $data);
        $this->load->view('template_admin/footer');
    }
    public function simpan()
    {
        $this->user_model->tambah();
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Data berhasil di Tambahkan</h4>
            
          </div>');

            redirect('admin/user');
        }
    }



    public function edit($id)
    {
        $data['title'] = 'Edit user';
        $data['kelas'] = $this->db->get('kelas')->result();
        $data['row'] = $this->db->get_where('user', ['id' => $id])->row();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/topbar');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/user/edit_user', $data);
        $this->load->view('template_admin/footer');
    }

public function update()
{
    $this->user_model->update();
    if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Data berhasil di Update</h4>
        
      </div>');

        redirect('admin/user');
    }
}


    public function hapus($id)
    {
        $this->db->delete('user', ['id' => $id]);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Data berhasil di hapus</h4>
            
          </div>');

            redirect('admin/user');
        }
    }
}
