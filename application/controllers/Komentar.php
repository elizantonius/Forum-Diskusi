<?php


class Komentar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
        //$this->auth->cek_login();
        $this->load->model('komentar_model');
        $this->load->model('tampil_pstng');
    }

    public function index($id_topic = null)
    {
        $this->load->view('header');
        $data['user'] = $this->db->get_where("user", ["nama_user" => $this->session->userdata('nama_user')])->row_array();
        $data['topic'] = $this->tampil_pstng->get($id_topic);
        $data['komen'] = $this->komentar_model->panggil($id_topic);
        $this->load->view('komentar_vw', $data);
    }

    public function post()
    {

        $idusr = $this->input->post('idusr');
        $idtpk = $this->input->post('idtpk');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('isinya', 'Isinya', 'required');
        //var_dump($idtpk);
        if ($this->form_validation->run() == true) {
            $this->komentar_model->simpan($idusr, $idtpk);
            redirect('topic');
        } else {
            $this->load->view('beranda');
        }
    }
    public function checksession()
    {
        if ($this->session->userdata('is_login')) {
            $this->session->set_flashdata('pesan', 'true');
            redirect($_GET['url']);
        } else {
            $this->session->set_flashdata('pesan', 'false');

            redirect($_GET['url']);
        }
    }
    public function login()
    {
        $npm = $this->input->post('npm', true);
        $password = $this->input->post('sandi', true);
        if ($this->auth->login_user($npm, $password)) {
            $this->session->set_flashdata('Pesan', 'true');
            redirect($_GET['url']);
        } else {
            $this->session->set_flashdata('Pesan', 'false');
            redirect($_GET['url']);
        }
    }
}
