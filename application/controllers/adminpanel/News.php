<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class news extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mnews','mnw');
    $this->load->model('mcategory','mct');
    	$this->load->library('pagination');
  	}

  function manage_news(){
    $data['title_web'] = 'View All news | Adminpanel BPT';
    $data['path_content'] = 'admin/news/manage_news';


		$this->form_validation->set_rules('search','Search','required');

		if(!$this->form_validation->run()){
    // Ngeload data
    $perpage = 10;
    $this->load->library('pagination'); // load libraray pagination
    $config['base_url'] = base_url($this->uri->segment(1).'/news/manage_news/'); // configurate link pagination
    $config['total_rows'] = $this->mod->countData('news');// fetch total record in databae using load
    $config['per_page'] = $perpage; // Total data in one page
    $config['uri_segment'] = 4; // catch uri segment where locate in 4th posisition
    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
    $config['num_links'] = round($choice); // Rounding Choice Variable
    $config['use_page_numbers'] = TRUE;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="disabled"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $this->pagination->initialize($config); // intialize var config
    $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
    $data['results'] = $this->mnw->fetchnews($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
    $data['total_rows'] = $this->mod->countData('news'); // Make a variable (array) link so the view can call the variable
    $this->load->view('admin/pages/index',$data);
		}
		else{
			$data['results'] = $this->mnw->fetchnewsSearch($_POST); // fetch data using limit and pagination
			$data['links'] = false;
			$this->load->view('admin/pages/index',$data);
		}
  }

		function add_news(){
			$data['title_web'] = 'Add news | Adminpanel BPT';
			$data['path_content'] = 'admin/news/add_news';
      $data['category'] = $this->mnw->fetchallcategory();

      $this->form_validation->set_rules('id_category','category name','required');
			$this->form_validation->set_rules('title_news','news title','required');
			$this->form_validation->set_rules('content_news','content','required');


				if(!$this->form_validation->run()){
				$data['error'] = false;
				$this->load->view('admin/pages/index',$data);
			}
			else{
				$config['upload_path'] = './asset/images';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '5000';



				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload()){
					$data['error'] = $this->upload->display_errors();
					$this->load->view('admin/pages/index',$data);
				}

			else{
				$save = $this->mnw->savenews($_POST,$this->upload->data());
				redirect(base_url($this->uri->segment(1).'/news/manage_news'));
			}
		}
	}

	function edit_news(){
			$data['title_web'] = 'Edit news | Adminpanel BPT';
			$data['path_content'] = 'admin/news/edit_news';
      $data['category'] = $this->mnw->fetchallcategory();

			$id=$this->uri->segment(4);
			$data['result']=$this->mod->getDataWhere('news','id_news',$id);
			if($data['result']==FALSE)
				redirect(base_url('adminpanel/news/manage_news'));
        $this->form_validation->set_rules('id_category','category name','required');
				$this->form_validation->set_rules('title_news','news Name','required');
				$this->form_validation->set_rules('content_news','Description','required');



				if(!$this->form_validation->run()){
					$data['error'] = false;
					$this->load->view('admin/pages/index',$data);
				}
				else{
				$config['upload_path'] = './asset/images';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']	= '5000';



				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload()){
					$save = $this->mnw->editnews($_POST,FALSE,$id);
					redirect(base_url($this->uri->segment(1).'/news/manage_news'));
				}

			else{
				$save = $this->mnw->editnews($_POST,$this->upload->data(),$id);
				redirect(base_url($this->uri->segment(1).'/news/manage_news'));
			}
		}
	}

    function delete_news(){
			$id = $this->uri->segment(4);
			$this->db->where('id_news',$id);
			$this->db->delete('news');
			redirect(base_url($this->uri->segment(1).'/news/manage_news'));
	}
}

?>
