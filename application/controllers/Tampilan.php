<?php

class Tampilan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('tampil_pstng');
    }


    public function index()
    {
        $this->load->view('header');
        $data['hasil'] = $this->tampil_pstng->panggil_post();
        $this->load->view('tampilan_vw', $data);
    }

    public function panggil($id = null)
    {
        $data['hasil'] = $this->tampil_pstng->panggil_post($id);
        if (empty($data['hasil'])) {
            show_404();
        }

        $data['judul'] = $data['hasil']['judul'];
        $data['isinya'] = $data['hasil']['isinya'];
        $this->load->view('tampilan_vw', $data);
    }
}
