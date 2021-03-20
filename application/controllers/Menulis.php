<?php

class Menulis extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
        $this->auth->cek_login();
        $this->load->model('postingan');
    }

    public function index()
    {
        $this->load->view('header');
        $data['Kategori'] = $this->postingan->panggil();
        $data['user'] = $this->db->get_where("user", ["nama_user" => $this->session->userdata('nama_user')])->row_array();
        $this->load->view('menulis_vw', $data);
    }

    public function post()
    {
        $id = $this->input->post('id');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('isinya', 'Isinya', 'required');
        $this->form_validation->set_rules('id_Kategori', 'id_Kategori', 'required');

        if ($this->form_validation->run() == true) {
            $this->postingan->save($id);
            redirect('beranda');
        } else {
            $this->load->view('menulis');
        }
    }
}
