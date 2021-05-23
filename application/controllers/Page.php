<?php

/**
 * 
 */
class Page extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function index(){
		$data['title'] = '';
		$data['artikel1'] = $this->db->get('tb_artikel',1,0)->row();
		$data['artikel2'] = $this->db->get('tb_artikel',2,1)->result();
		$data['profil']   = $this->db->get('tb_profil')->row();
		$data['kategori']   = $this->db->get('tb_kategori')->result();
		$this->load->view('layouts/header',$data);
		$this->load->view('page/index',$data);
		$this->load->view('layouts/footer',$data);
	}


	public function kategori($slug){

		$kategori = $this->db->get_where('tb_kategori',array("slug"=>strtolower($slug)))->row();

		$data['title'] = ucfirst($kategori->nama); 
		$data['artikel'] = $this->db->get_where('tb_artikel',array("kategori"=>ucwords($kategori->nama)))->result();
		$data['profil']   = $this->db->get('tb_profil')->row();
		$data['kategori']   = $this->db->get('tb_kategori')->result();
		$this->load->view('layouts/header',$data);
		$this->load->view('page/kategori',$data);
		$this->load->view('layouts/footer',$data);
	}

	public function detail($slug){

		$str = explode("-", $slug);
		$judul = implode(" ", $str);

		$artikel = $this->db->get_where('tb_artikel',array("judul"=>$judul))->row();
		$data['comment'] = $this->db->get_where('tb_comment',array("id_post"=>$artikel->id))->result();

		$data['title'] = ucfirst($artikel->judul); 
		$data['artikel'] = $artikel;
		$data['profil']   = $this->db->get('tb_profil')->row();
		$data['kategori']   = $this->db->get('tb_kategori')->result();
		$this->load->view('layouts/header',$data);
		$this->load->view('page/detail',$data);
		$this->load->view('layouts/footer',$data);
	}

	public function about(){
 
		$data['title'] = 'About'; 
		$data['profil']   = $this->db->get('tb_profil')->row();
		$data['kategori']   = $this->db->get('tb_kategori')->result();
		$this->load->view('layouts/header',$data);
		$this->load->view('page/about',$data);
		$this->load->view('layouts/footer',$data);
	}

	public function comment($slug){
		$data = array(
			"id_post"=>$_POST['id_post'],
			"nama"	 =>$_POST['nama'],
			"email"	 =>$_POST['email'],
			"comment"=>$_POST['comment'],
			"tanggal"=>date('Y-m-d H:i:s')
		);

		$insert = $this->db->insert('tb_comment',$data);
		redirect(base_url('page/detail/'.$slug));
	}

}