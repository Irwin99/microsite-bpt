<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

public function __construct(){
		parent::__construct();
	}
	
	public function add_news(){
		$data['title_web']= 'Add News';
		$data['path_content']='admin/module/add_news';
        $this->load->view('admin/pages/dashboard', $data);
	}
	public function manage_news(){
		$data['title_web']= 'Manage News';
		$data['path_content']='admin/module/manage_news';
        $this->load->view('admin/pages/dashboard', $data);
	}
	public function add_category(){
		$data['title_web']= 'Add Category';
		$data['path_content']='admin/module/add_category';
        $this->load->view('admin/pages/dashboard', $data);
	}
	public function manage_category(){
		$data['title_web']= 'Manage Category';
		$data['path_content']='admin/module/manage_category';
        $this->load->view('admin/pages/dashboard', $data);
	}


}
?>