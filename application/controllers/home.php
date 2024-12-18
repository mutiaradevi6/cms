<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
    }
	public function index(){
		$this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('a.tanggal','DESC');
        $konten = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => "Beranda | Wisata",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'caraousel' => $caraousel,
            'konten' => $konten
        );
        $this->load->view('beranda', $data);
	}

    public function kategori($id){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('a.id_kategori', $id);
        $konten = $this->db->get()->result_array();
        
        $this->db->from('kategori');
        $this->db->where('id_kategori', $id);
        $nama_kategori = $this->db->get()->row()->nama_kategori;
    
        $data = array(
            'judul_halaman' => $nama_kategori . " | Wisata",
            'nama_kategori' => $nama_kategori,
            'konfig' => $konfig,
            'kategori' => $kategori,
            'caraousel' => $caraousel,
            'konten' => $konten
        );
        $this->load->view('kategori', $data);
    }

    public function artikel($id_konten){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('a.id_konten', $id_konten);
        $konten = $this->db->get()->row();
        $data = array(
            'judul_halaman' =>  "| Wisata",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'konten' => $konten
        );
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // die;
        $this->load->view('detail', $data);
   }
   public function blog(){
	$this->db->from('konfigurasi');
	$konfig = $this->db->get()->row();

	$this->db->from('caraousel');
	$caraousel = $this->db->get()->result_array();
	$this->db->from('kategori');
	$kategori = $this->db->get()->result_array();
	$this->db->order_by('tanggal', 'DESC');
	$this->db->from('konten a');
	$this->db->join('kategori b', 'a.id_kategori=b.id_kategori','left');
	$this->db->join('user c', 'a.username=c.username','left');
	$konten = $this->db->get()->result_array();
	$data = array(
		'title' 	=> 'Blog',
		'judul_halaman'		=> "Beranda | Wisata",
		'konfig'	=> $konfig,
		'kategori'	=> $kategori,
		'caraousel'	=> $caraousel,
		'konten'	=> $konten
	);
	$this->load->view('blog',$data);																																									
}

public function cari()
{
    $this->db->from('konfigurasi');
	$konfig = $this->db->get()->row();
    $data = $this->input->post('judul');
    $this->db->from('kategori');
	$kategori = $this->db->get()->result_array();
    $cek = array(
        'judul_halaman'		=> "| Wisata",
        'konfig1'	=> $konfig,
        'konfig' => $this->user_model->cari($data),
        'kategori'	=> $kategori,
    );
    $this->load->view('hasil_cari',$cek);
}
   
}
