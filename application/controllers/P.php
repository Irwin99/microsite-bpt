<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P extends CI_Controller {

public function __construct(){
		parent::__construct();
		$this->load->model('marticle');
		$this->load->model('mcategory');
	}

	public function article(){
		$data['title_web']= 'All Articles | Blue Power Technologies';
		$data['path_content']='default/module/article';

		$perpage = 10;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url('p/article/'); // configurate link pagination
	    $config['total_rows'] = $this->mod->countData('article');// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 3; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = round($choice); // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $data['results'] = $this->marticle->fetchArticle($config['per_page'],$page,$this->uri->segment(3)); // fetch data using limit and pagination
	    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->mod->countData('article'); // Make a variable (array) link so the view can call the variable
        $this->load->view('default/pages/home', $data);
	}
	function read_article(){
		$data['title_web']= 'Read Article';
		$data['path_content']='default/module/read_article';

		$id = $this->uri->segment(3);
		$data['result'] = $this->marticle->getArticle($id);
		if($data['result'] == FALSE)
			redirect(base_url('p/article'));

		// update view
		$array = array(
				'view' => $data['result']['view']+1
			);
		$this->db->where('id_article',$id);
		$this->db->update('article',$array);

        $this->load->view('default/pages/home', $data);
	}
	public function category(){
		$data['title_web']= 'All Article in Category | Blue Power Technologies';
		$data['path_content']='default/module/article';

		$id = $this->uri->segment(3);
		$data['result'] = $this->mcategory->getCategory($id);
		if($data['result'] == FALSE)
			redirect(base_url('p/article'));

		$perpage = 10;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url('p/category/'.$id.'/'.$this->mod->urlFriendly($data['result']['name_category']).'/'); // configurate link pagination
	    $config['total_rows'] = $this->mod->countData('article');// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 5; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = round($choice); // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(5))? $this->uri->segment(5) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $data['results'] = $this->marticle->fetchArticleCategory($config['per_page'],$page,$this->uri->segment(5),$id); // fetch data using limit and pagination
	    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->mod->countData('article'); // Make a variable (array) link so the view can call the variable
        $this->load->view('default/pages/home', $data);
	}
	public function search_result(){
		$data['path_content'] = 'default/module/search_result';
		$id = $this->uri->segment(3);
		$data['result'] = $this->mcategory->getCategory($id);


		$perpage = 10;
	    $this->load->library('pagination'); // load libraray pagination
	    $config['base_url'] = base_url('p/category/'.$id.'/'.$this->mod->urlFriendly($data['result']['name_category']).'/'); // configurate link pagination
	    $config['total_rows'] = $this->mod->countData('article');// fetch total record in databae using load
	    $config['per_page'] = $perpage; // Total data in one page
	    $config['uri_segment'] = 5; // catch uri segment where locate in 4th posisition
	    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
	    $config['num_links'] = round($choice); // Rounding Choice Variable
	    $config['use_page_numbers'] = TRUE;
	    $this->pagination->initialize($config); // intialize var config
	    $page = ($this->uri->segment(5))? $this->uri->segment(5) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
	    $data['results'] = $this->marticle->fetchArticleCategory($config['per_page'],$page,$this->uri->segment(5),$id); // fetch data using limit and pagination
	    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
	    $data['total_rows'] = $this->mod->countData('article'); // Make a variable (array) link so the view can call the variable
		$this->load->view('default/pages/home',$data);
	}
}
?>
