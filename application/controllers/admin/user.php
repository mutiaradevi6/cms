<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
        if($this->session->userdata('level')<>'admin'){
            redirect('auth');
        }
    }
	public function index(){
        $this->db->from('user');
        $this->db->order_by('nama','ASC');
        $user = $this->db->get()->result_array();
        $data = array (
            'judul_halaman' => 'data pengguna',
            'user'          => $user
        );
		$this->template->load('template_admin','admin/user_index', $data);
	}

    public function simpan(){
        $this->db->from('user');
        $this->db->where('username', $this->input->post('username'));
        if($cek<>NULL){
            $this->session->set_flashdata('alert','
            <div class="alert alert-primary" role="alert"> Username sudah digunakan!
            </div>'
            );
            redirect('admin/user');
        }
        $cek = $this->db->get()->result_array();
        $this->user_model->simpan();
        $this->session->set_flashdata('alert','
            <div class="alert alert-primary" role="alert"> Berhasil disimpan! </div>');
        redirect('admin/user');
    }

    public function delete_data($id){
        // var_dump($id);
        // die;
        $this->user_model->hapus_user($id);
        $this->session->set_flashdata('alert','
            <div class="alert alert-primary" role="alert"> Berhasil dihapus </div>');
        redirect('admin/user');
	}
    public function update(){
       $idUser = ['id_user' => $this->input->post('id_user')];
       $data = [
        'nama' =>$this->input->post('nama'),
        'level' =>$this->input->post('level'),
       ];
        $this->db->update('user',$data,$idUser);
        $this->session->set_flashdata('alert','
            <div class="alert alert-primary" role="alert"> Berhasil mengupdate kategori!</div>');
        redirect('admin/user');
    }
}
