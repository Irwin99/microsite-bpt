<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('muser','mus');
    $this->load->library('pagination');
	}

  function manage_user(){
    $data['title_web'] = 'View All User | Adminpanel BPT';
    $data['path_content'] = 'admin/user/manage_user';

		$this->form_validation->set_rules('search','Search','required');

		if(!$this->form_validation->run()){
    // Ngeload data
    $perpage = 10;
    $this->load->library('pagination'); // load libraray pagination
    $config['base_url'] = base_url($this->uri->segment(1).'/user/manage_user/'); // configurate link pagination
    $config['total_rows'] = $this->mod->countData('user');// fetch total record in databae using load
    $config['per_page'] = $perpage; // Total data in one page
    $config['uri_segment'] = 4; // catch uri segment where locate in 4th posisition
    $choice = $config['total_rows']/$config['per_page'] = $perpage; // Total record divided by total data in one page
    $config['num_links'] = round($choice); // Rounding Choice Variable
    $config['use_page_numbers'] = TRUE;
    $this->pagination->initialize($config); // intialize var config
    $page = ($this->uri->segment(4))? $this->uri->segment(4) : 0; // If uri segment in 4th = 0 so this program not catch the uri segment
    $data['results'] = $this->mus->fetchUser($config['per_page'],$page,$this->uri->segment(4)); // fetch data using limit and pagination
    $data['links'] = $this->pagination->create_links(); // Make a variable (array) link so the view can call the variable
    $data['total_rows'] = $this->mod->countData('user'); // Make a variable (array) link so the view can call the variable
  	$this->load->view('admin/pages/index', $data);
		}
		else{
			$data['results'] = $this->mus->fetchUserSearch($_POST); // fetch data using limit and pagination
			$data['links'] = false;
			$this->load->view('admin/pages/index', $data);
		}
  }

		function add_user(){
			$data['title_web'] = 'Add User | Adminpanel BPT';
			$data['path_content'] = 'admin/user/add_user';
			$this->form_validation->set_rules('username','Username','trim|required');
			$this->form_validation->set_rules('password','Password','trim|required');
			$this->form_validation->set_rules('confirm_pass','confirm_pass','trim|required|matches[password]');
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('fullname','fullname','required');
      $this->form_validation->set_rules('permission','Permission','required');

			if(!$this->form_validation->run()){
				$this->load->view('admin/pages/index', $data);
			}
			else{
				$save = $this->mus->saveUser($_POST);
				redirect(base_url($this->uri->segment(1).'/user/manage_user'));
			}
		}

		function edit_user(){
			$data['title_web'] = 'Edit User | Adminpanel BPT';
			$data['path_content'] = 'admin/user/edit_user';
			$id=$this->uri->segment(4);
			$data['result']=$this->mod->getDataWhere('user','id_user',$id);
			if($data['result']==FALSE)
				redirect(base_url('adminpanel/user/manage_user'));

				$this->form_validation->set_rules('username','Username','trim|required');
				$this->form_validation->set_rules('password','Password','');
				$this->form_validation->set_rules('confirm_pass','confirm pass','');
				$this->form_validation->set_rules('email','Email','required|valid_email');
				$this->form_validation->set_rules('fullname','fullname','required');
	      $this->form_validation->set_rules('permission','Permission','required');

        if(!$this->form_validation->run()){
          $this->load->view('admin/pages/index', $data);
        }
        else{
          $save = $this->mus->editUser($_POST,$id);
          redirect(base_url($this->uri->segment(1).'/user/manage_user'));
        }
		}

    function delete_user(){
			$id = $this->uri->segment(4);
			$this->db->where('id_user',$id);
			$this->db->delete('user');
			redirect(base_url($this->uri->segment(1).'/user/manage_user'));
		}

}

?>