<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {
	public function simpan(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' =>  ($this->input->post('password')),
            'level' => $this->input->post('level')
        );
        $this->db->insert('user',$data);
	}
    public function update($id){
        $where = array(
            'id_user' => $this->input->post('id_user')
        );
        $data = array(
            'nama' => $this->input->post('nama'),
            'level' =>$this->input->post('level'),
         );
        $this->db->update('user',$data,$where);
    }

    public function hapus_user($id)
    {
        $this->db->where('id_user',$id);
        return $this->db->delete('user');
    }

    public function cari($data)
    {
        $this->db->where('judul',$data);
        return $this->db->get('konten')->row();
    }
}