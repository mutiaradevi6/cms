<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Regis extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
	public function index(){
		$this->load->view('registrasi');
	}
    public function registrasi(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => 'kontributor',
        );
        
        $this->db->insert('user',$data);
        $this->session->flashdata('success', 'Registrasi berhasil, silakan login.');
        redirect('auth');
    }

}