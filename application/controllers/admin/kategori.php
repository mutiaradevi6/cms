<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('kategori_model'); // Ensure the model is loaded
        if ($this->session->userdata('level') == NULL) {
            redirect('auth');
        }
    }

    public function index(){
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori', 'ASC');
        $kategori = $this->db->get()->result_array();
        $data = array (
            'judul_halaman' => 'kategori konten',
            'kategori'      => $kategori
        );
        $this->template->load('template_admin', 'admin/kategori_index', $data);
    }

    public function simpan(){
        $this->db->from('kategori');
        $this->db->where('nama_kategori', $this->input->post('nama_kategori'));
        $cek = $this->db->get()->row_array(); // Check if the category already exists

        if ($cek<>NULL) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-primary" role="alert"> Kategori Konten sudah digunakan!</div>');
            redirect('admin/kategori');
        }

        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $this->db->insert('kategori', $data);
        $this->session->set_flashdata('alert', '
            <div class="alert alert-primary" role="alert"> Berhasil menambahkan kategori</div>');
        redirect('admin/kategori');
    }

    public function delete_data($id){
        // Call the model's delete function
        if ($this->kategori_model->hapus($id)) { // Assuming hapus() returns true on success
            $this->session->set_flashdata('alert', '
                <div class="alert alert-primary" role="alert"> Berhasil menghapus kategori!</div>');
        } else {
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger" role="alert"> Gagal menghapus kategori!</div>');
        }
        redirect('admin/kategori');
    }

    public function update(){
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $where = array('id_kategori' => $this->input->post('id_kategori'));

        if ($this->db->update('kategori', $data, $where)) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-primary" role="alert"> Berhasil mengupdate kategori!</div>');
        } else {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger" role="alert"> Gagal mengupdate kategori!</div>');
        }
        redirect('admin/kategori');
    }
}