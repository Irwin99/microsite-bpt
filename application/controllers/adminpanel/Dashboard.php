<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index($page = 'home'){
		$data['title_web']= 'Admin Panel BPT';
		$data['path_content']='admin/module/content';
        $this->load->view('admin/pages/dashboard', $data);
	}
}
?>