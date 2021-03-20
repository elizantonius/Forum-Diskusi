<?php

class Postingan extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        //$this->load->model('auth');
    }

    public function save($id)
    {
        $datanya = array(

            //Field/Kolom                       //Nilai Input
            'judul_topik' => $this->input->post('judul'),
            'id_Kategori' => $this->input->post('id_Kategori'),
            'isi_topik' => $this->input->post('isinya'),
            'tgl_topik' => date('Y-m-d h:i:s'),
            'user_id_user' => $id
        );

        $this->db->select('*')->from('user')->join('topik', 'topik.user_id_user = user.id_user')->insert('topik', $datanya);
    }



    public function panggil()
    {
        $datanya = $this->db->query('select * from Kategori order by nama_kat asc');
        return $datanya->result();
    }
}
