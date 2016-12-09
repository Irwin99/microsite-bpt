<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Microbpt extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('marticle');
	}

	public function index($page = 'home'){
		$data['title_web']= 'BPT';
		$data['path_content']='default/module/content';

		$data['results'] = $this->marticle->fetchArticle(4,0,''); // fetch data using 
        $this->load->view('default/pages/home', $data);
	}
}
?>