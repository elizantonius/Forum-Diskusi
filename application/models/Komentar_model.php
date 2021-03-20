<?php


class Komentar_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function simpan()
    {

        $datanya = array(

            'tgl_komen' => date('Y-m-d h:i:s'),
            'id_user' => $this->input->post('idusr'),
            'id_topik' => $this->input->post('idtpk'),
            'isi_komentar' => $this->input->post('isinya')
        );

        $this->db->insert('komentar', $datanya);
        //$this->db->select('*')->from('topik')->join('komentar', 'topik.user_id_user = komentar.id_user')->insert('komentar', $datanya);
    }

    public function panggil($idtpk)
    {

        $perintah = $this->db->query("select * from komentar inner join user on komentar.id_user = user.id_user where id_topik=$idtpk   ");
        return $perintah->result_array();
    }
}
