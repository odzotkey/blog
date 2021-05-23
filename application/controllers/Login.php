<?php
/**
 * 
 */
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function index(){
		$data['title'] = 'Login';
		$this->load->view('admin/layouts/header',$data);
		$this->load->view('admin/login',$data);
		$this->load->view('admin/layouts/footer',$data);
	}

	function proses(){
		$user = $this->db->get_where('tb_user',array("username"=>$_POST['username'],"password"=>$_POST['password']));

		if ($user->num_rows()>0) {
			$this->session->set_userdata('user',$user->row());
			redirect(base_url('admin'));
		}else{
			$this->session->set_flashdata('error','Username atau kata sandi yang anda masukan salah');
			redirect(base_url('login'));
		}
	}

	function logout(){
		session_destroy();
		redirect(base_url('login'));
	}
}