<?php

/**
 * 
 */
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function index(){
		$data['title'] = '';
		
		$this->load->view('admin/layouts/header',$data);
		$this->load->view('admin/index',$data);
		$this->load->view('admin/layouts/footer',$data);
	}

	public function artikel(){
		$data['title'] = '';
		$data['artikel'] = $this->db->get('tb_artikel')->result();
		
		$this->load->view('admin/layouts/header',$data);
		$this->load->view('admin/artikel',$data);
		$this->load->view('admin/layouts/footer',$data);
	}

	public function add_artikel(){
		$data['title'] = '';
		$data['artikel'] = $this->db->get('tb_artikel')->result();
		
		$this->load->view('admin/layouts/header',$data);
		$this->load->view('admin/add-artikel',$data);
		$this->load->view('admin/layouts/footer',$data);
	}

	public function store_artikel()
        {
                $config['upload_path']          = FCPATH.'./assets/jack/images';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['file_name']			= uniqid().$_FILES['foto']['name'];
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

               if (!empty($_FILES['foto']['name'])) {
                	$this->load->library('upload');

	                $this->upload->initialize($config);
	                if ( ! $this->upload->do_upload('foto'))
	                {
	                        $error = array('error' => $this->upload->display_errors());

	                       	$this->session->set_flashdata('error','Gagal upload gambar');
	                       	redirect('admin/add_artikel');
	                }
	                else
	                {
	                        $data = array('upload_data' => $this->upload->data());

	                       $arr = array(
	                       	"judul"=>$_POST['judul'],
	                       	"isi"=>$_POST['isi'],
	                       	"kategori"=>$_POST['kategori'],
	                       	"author"=>$this->session->userdata('user')->username,
	                       	"tanggal"=>date('Y-m-d'),
	                       	"foto"=>$data['upload_data']['file_name']
	                       );

	                       $insert = $this->db->insert('tb_artikel',$arr);
	                       if ($insert) {
	                       	$this->session->set_flashdata('success','Artikel berhasil di tambahkan');
	             			redirect('admin/artikel');
	                       }else{
	                       	$this->session->set_flashdata('error','Artikel gagal di tambahkan');
	             			redirect('admin/add_artikel');
	                       }
	                }
               }else{
               	 $this->session->set_flashdata('error','Gambar masih kosong');
	             redirect('admin/add_artikel');
               }
        }

    public function edit_artikel($id){
		$data['title'] = '';
		$data['artikel'] = $this->db->get_where('tb_artikel',array("id"=>$id))->row();
		
		$this->load->view('admin/layouts/header',$data);
		$this->load->view('admin/edit-artikel',$data);
		$this->load->view('admin/layouts/footer',$data);
	}

	public function update_artikel()
        {
                $config['upload_path']          = FCPATH.'./assets/jack/images';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['file_name']			= uniqid().$_FILES['foto']['name'];
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

               if (!empty($_FILES['foto']['name'])) {
                	$this->load->library('upload');

	                $this->upload->initialize($config);
	                if ( ! $this->upload->do_upload('foto'))
	                {
	                        $error = array('error' => $this->upload->display_errors());

	                       	$this->session->set_flashdata('error','Gagal upload gambar');
	                       	redirect('admin/edit_artikel');
	                }
	                else
	                {
	                        $data = array('upload_data' => $this->upload->data());

	                       $arr = array(
	                       	"judul"=>$_POST['judul'],
	                       	"isi"=>$_POST['isi'],
	                       	"kategori"=>$_POST['kategori'], 
	                       	"foto"=>$data['upload_data']['file_name']
	                       );

	                       $this->db->where('id',$_POST['id']);
	                       $insert = $this->db->update('tb_artikel',$arr);
	                       if ($insert) {
	                       	$this->session->set_flashdata('success','Artikel berhasil di update');
	             			redirect('admin/artikel');
	                       }else{
	                       	$this->session->set_flashdata('error','Artikel gagal di update');
	             			redirect('admin/edit_artikel');
	                       }
	                }
               }else{
               	  $arr = array(
                   	"judul"=>$_POST['judul'],
                   	"isi"=>$_POST['isi'],
                   	"kategori"=>$_POST['kategori'],  
                   );

                   $this->db->where('id',$_POST['id']);
                   $insert = $this->db->update('tb_artikel',$arr);
                   if ($insert) {
                   	$this->session->set_flashdata('success','Artikel berhasil di update');
         			redirect('admin/artikel');
                   }else{
                   	$this->session->set_flashdata('error','Artikel gagal di update');
         			redirect('admin/edit_artikel');
                   }
               }
        }

        public function delete_artikel($id){
        	$this->db->where('id',$id);
        	 $delete = $this->db->delete('tb_artikel');
               if ($delete) {
               	$this->session->set_flashdata('success','Artikel berhasil di delete');
     			redirect('admin/artikel');
               }else{
               	$this->session->set_flashdata('error','Artikel gagal di delete');
     			redirect('admin/edit_artikel');
               }

        }

        // kategori

    public function kategori(){
		$data['title'] = '';
		$data['kategori'] = $this->db->get('tb_kategori')->result();
		
		$this->load->view('admin/layouts/header',$data);
		$this->load->view('admin/kategori',$data);
		$this->load->view('admin/layouts/footer',$data);
	}

	public function edit_kategori($id){
		$data['title'] = '';
		$data['kategori'] = $this->db->get_where('tb_kategori',array("id"=>$id))->row();
		
		$this->load->view('admin/layouts/header',$data);
		$this->load->view('admin/edit-kategori',$data);
		$this->load->view('admin/layouts/footer',$data);
	}

	public function update_kategori(){
      	  $arr = array(
           	"nama"=>$_POST['nama'],  
           );

           $this->db->where('id',$_POST['id']);
           $update = $this->db->update('tb_kategori',$arr);
           if ($update) {
           	$this->session->set_flashdata('success','Artikel berhasil di update');
 			redirect('admin/kategori');
           }else{
           	$this->session->set_flashdata('error','Artikel gagal di update');
 			redirect('admin/edit_kategori');
           }
	}

	 public function profil(){
		$data['title'] = '';
		$data['profil'] = $this->db->get('tb_profil')->row();
		
		$this->load->view('admin/layouts/header',$data);
		$this->load->view('admin/profil',$data);
		$this->load->view('admin/layouts/footer',$data);
	}

	public function update_profil(){
      	  $arr = array(
      	  	"nama"=>$_POST['nama'],
           	"tentang"=>$_POST['tentang'],
           	"telepon"=>$_POST['telepon'],
           	"email"=>$_POST['email'],  
           );

           $this->db->where('id',$_POST['id']);
           $update = $this->db->update('tb_profil',$arr);
           if ($update) {
           	$this->session->set_flashdata('success','Artikel berhasil di update');
 			redirect('admin/profil');
           }else{
           	$this->session->set_flashdata('error','Artikel gagal di update');
 			redirect('admin/profil');
           }
	}

}