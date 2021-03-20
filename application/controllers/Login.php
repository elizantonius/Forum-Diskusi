<?php

class Login extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('auth');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('login_vw');
    }

    public function proses()
    {
        $npm = $this->input->post('npm', true);
        $password = $this->input->post('sandi', true);
        if ($this->auth->login_user($npm, $password)) {

            redirect('beranda');
        } else {
            $this->session->set_flashdata('Maaf, NPM dan Password salah');
            redirect('login');
        }
    }

    public function logout()
    {

        $this->session->unset_userdata('npm');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('is_login');
        redirect('login');
    }
}
