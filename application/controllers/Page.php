<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

public function __construct(){
		parent::__construct();
	}

	public function news(){
		$data['title_web']= 'News';
		$data['path_content']='default/module/news';
        $this->load->view('default/pages/home', $data);
	}

}
?>
