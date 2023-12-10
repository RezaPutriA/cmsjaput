<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function _construct(){
    parent::_construct();
    }
	public function index()
	{
		$this->load->view('login');
	}
	public function login(){
		$username = $this->input->post('username');
		$password =  md5($this->input->post('password'));
		$this->db->from('user');
        $this->db->where('username',$username);
        $cek = $this->db->get()->row();
       if($cek==NULL){
        $this->session->set_flashdata('alert','
		<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>user tidak ada sayang
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
    ');
    redirect('auth');
       } else if($password==$cek->password){
		$data = array(
			'id_user' => $cek->id_user,
			'username' => $cek->username,
			'nama' => $cek->nama,
			'level' => $cek->level,
		);
		$this->session->set_userdata($data);
		redirect('home');
	   }else{
		$this->session->set_flashdata('alert','
		<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<i class="fa fa-exclamation-circle me-2"></i>password salah
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
    ');
    redirect('auth');
	   }
	} 
	public function logout(){
		$this->session->sess_destroy();
		redirect('bernda');
	}
}
