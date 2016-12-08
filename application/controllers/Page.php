<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

public function __construct(){
		parent::__construct();
	}

	public function article(){
		$data['title_web']= 'All Articles | Blue Power Technologies';
		$data['path_content']='default/module/article';
        $this->load->view('default/pages/home', $data);
	}
	function read_news(){
		$data['title_web']= 'News';
		$data['path_content']='default/module/read_news';

		$id = $this->uri->segment(1);
		$data['result'] = $this->m
        $this->load->view('default/pages/home', $data);
	}
}
?>
