<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function _construct(){
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
    parent::_construct();
    }
	public function index()
	{
        $data = array(
            'judul_halaman' => 'Dashboard'
        );
		$this->template->load('template_admin','admin/dashboard',$data);
	}
}
