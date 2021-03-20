<?php

class Auth extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function mendaftar($npm, $nama, $email, $password)
    {

        $data_user = array(
            'npm_user' => $npm,
            'nama_user' => $nama,
            'email_user' => $email,
            'paswd_user' => password_hash($password, PASSWORD_DEFAULT),
            'user_level' => 'user',
            'tgl_usr' => date('Y-m-d h:i:s')
        );

        $this->db->insert('user', $data_user);
    }

    function login_user($npm, $password)
    {

        $perintah = $this->db->get_where('user', array('npm_user' => $npm));
        if ($perintah->num_rows() > 0) {
            $data_user = $perintah->row();
            if (password_verify($password, $data_user->paswd_user)) {
                $this->session->set_userdata('npm_user', $npm);
                $this->session->set_userdata('nama_user', $data_user->nama_user);
                $this->session->set_userdata('is_login', true);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function cek_login()
    {
        if (empty($this->session->userdata('is_login'))) {

            redirect('login');
        }
    }
}
