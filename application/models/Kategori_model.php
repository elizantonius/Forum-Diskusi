<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    public function select($id_kategori = null)
    {

        if ($id_kategori == null) {
            return $this->db->get('Kategori')->result();
        } else {
            return $this->db->get_where('Kategori', ['id_kategori' => $id_kategori])->row_object();
        }
    }
}

/* End of file ModelName.php */
