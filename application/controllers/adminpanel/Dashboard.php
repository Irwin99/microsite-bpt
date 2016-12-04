<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index($page = 'home'){
		if(!$this->session->userdata('loginAdmin'))
			redirect(base_url($this->uri->segment(1).'/dashboard/login'));

		$data['title_web']= 'AdminPanel BPT';
		$data['path_content']='admin/module/content';
    $this->load->view('admin/pages/index', $data);
	}
	function login(){
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required|callback_validLogin');
			if(!$this->form_validation->run()){
				$data['title_web']= 'Adminpanel Login | BPT';
				$this->load->view('admin/login',$data);
			}
			else{
				redirect(base_url('adminpanel/dashboard'));
			}
	}
	function validLogin(){
		$this->load->model('madmin');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$data = $this->madmin->validLogin($username,$password);
			if($data == false){
				$this->form_validation->set_message('validLogin','Username or Password is not found');
				return false;
			}
			else{
				$session = array(
						'loginAdmin' => TRUE,
						'idAdmin' => $data['id_user'],
						'username' => $data['username']
					);
				$this->session->set_userdata($session);
				return TRUE;
			}
		}
	function logout(){
			$session = array(
						'loginAdmin' => FALSE,
						'idAdmin' => NULL
					);
			$this->session->set_userdata($session);
			redirect(base_url($this->uri->segment(1).'/dashboard'));
		}
}
?>
