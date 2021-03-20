<?php


class Tampil_pstng extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('parser');
    }
    public function get($id_topic = null)
    {
        return $this->db->get_where('topik', ['id_topik' => $id_topic])->row_array();
    }




    function panggil_post($id_Kategori = null)
    {

        $perintah = $this->db->query("select * from topik where id_Kategori='$id_Kategori' order by id_kategori asc");
        return $perintah->result_array();
    }

    function join2table($id_Kategori)
    {
        $string = is_null($id_Kategori) ? "" : " WHERE id_Kategori='$id_Kategori'";
        $query = $this->db->query("select * from user INNER JOIN topik on user.id_user = topik.user_id_user $string ");
        return $query->result_array();
    }
}
