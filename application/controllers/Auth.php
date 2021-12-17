<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Auth';
        $data['kelas'] = $this->db->get('kelas')->result();

        $this->load->view('template/header', $data);
        $this->load->view('auth/auth');
        $this->load->view('template/footer');
    }

    public function login()
    {
        $cek_email = $this->db->get_where('user', ['email' => $this->input->post('email1', true)])->row();

        if ($cek_email) { //cek email
            if (password_verify($this->input->post('password1'), $cek_email->password)) { //cek password
                if ($cek_email->level == 'admin') { //cek level
                    $data_session = [
                        'id' => $cek_email->id,
                        'nama' => $cek_email->nama,
                        'level' => $cek_email->level
                    ];
                    $this->session->set_userdata($data_session);
                    // echo $this->session->userdata('level');
                    redirect('admin/dashboard');
                }else {//mahasiswa
                    $data_session = [
                        'id' => $cek_email->id,
                        'nama' => $cek_email->nama,
                        'level' => $cek_email->level
                    ];
                    $this->session->set_userdata($data_session);
                    // echo $this->session->userdata('level');
                    redirect('home');
                }
            } else {
                echo " <script>
            alert('pasword salah')
            window.location.href = '" . site_url("auth") . "'
           </script>";
            }
        } else {
            echo " <script>
            alert('email salah')
            window.location.href = '" . site_url("auth") . "'
           </script>";
        }
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
            'required' => '%s masih kosong'
        ]);
        $this->form_validation->set_rules('email', 'email', 'trim|required|is_unique[user.email]', [
            'required' => '%s masih kosong',
            'is_unique' => '%s sudah ada'
        ]);
        $this->form_validation->set_rules('password', 'password', 'trim|required', [
            'required' => '%s masih kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $data = [
                'id_kelas' => $this->input->post('id_kelas', true),
                'nama' => $this->input->post('nama', true),
                'email' => $this->input->post('email', true),
                'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
                'level' => 'siswa'
            ];

            $this->db->insert('user', $data);
            if ($this->db->affected_rows() > 0) {
                echo " <script>
            alert('akun berhasil di tambahkan')
            window.location.href = '" . site_url("auth") . "'
           </script>";
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
