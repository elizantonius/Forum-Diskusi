<?php

class mendaftar extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('mendaftar_vw');
    }

    public function proses()
    {
        $this->form_validation->set_rules('npm', 'Npm', 'required|max_length[9] |trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('sandi', 'Sandi', 'trim|required|min_length[1]|max_length[255]');

        if ($this->form_validation->run() == true) {
            $npm = $this->input->post('npm');
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $password = $this->input->post('sandi');
            $this->auth->mendaftar($npm, $nama, $email, $password);
            $this->session->flashdata('Anda telah berhasil mendaftar :)');

            redirect('login');
        } else {

            $this->load->view('mendaftar');
        }
    }
}
