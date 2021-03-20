<?php

class Topic extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('tampil_pstng');
        $this->load->model('Kategori_model');
    }

    public function index($id_Kategori = null)
    {
        if (is_null($id_Kategori)) {
            redirect('beranda');
        } else {
            $this->load->view('header');
            // $data['item'] = $this->tampil_pstng->panggil_post($id_Kategori);
            $data['item'] = $this->tampil_pstng->join2table($id_Kategori);
            $data['kategori'] = $this->Kategori_model->select($id_Kategori);

            $this->load->view('topic_vw', $data);
        }
    }
}
