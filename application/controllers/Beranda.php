<?php

class Beranda extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('auth');
        $this->load->model('Kategori_model');
    }

    public function index()
    {
        $result['kategori'] = $this->Kategori_model->select(null);
        $this->load->view('header');
        //$this->auth->cek_login();
        $this->load->view('beranda_vw', $result);
    }
}
