<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

public function __construct(){
		parent::__construct();
	}
	
	public function add_user(){
		$data['title_web']= 'Add User';
		$data['path_content']='admin/module/add_user';
        $this->load->view('admin/pages/dashboard', $data);
	}

}
?>