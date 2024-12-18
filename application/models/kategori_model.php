<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori_model extends CI_Model {
    public function hapus($id)
    {
        $this->db->where('id_kategori',$id);
        return $this->db->delete('kategori');
    }
     
}