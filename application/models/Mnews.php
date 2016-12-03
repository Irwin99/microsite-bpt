<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mnews extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}

  function fetchnews($limit,$start,$pagenumber) {

    if($pagenumber!="")
      $this->db->limit($limit,($pagenumber*$limit)-$limit);
    else
      $this->db->limit($limit,$start);
		$this->db->join('category','news.id_category = category.id_category');
		$this->db->join('user','news.id_user = user.id_user');
	  $this->db->order_by('title_news','DESC');
    $query = $this->db->get('news');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
  function countAllnews() {
    return $this->db->count_all("news");
  }

  function savenews($data,$upload_data){
    $array = array(
				'id_user' => $this->session->userdata('idAdmin'),
				'id_category' => $data['id_category'],
        'title_news' => $data['title_news'],
        'content_news' => $data['content_news'],
				'date_news' => date('Y-m-d H:i:s'),
			  'image_news' => 'asset/images/'.$upload_data['orig_name']


      );
    $this->db->insert('news',$array);
    return 1;
  }
    function editnews($data,$upload_data,$id){
      $array = array(
				'id_category' => $data['id_category'],
        'title_news' => $data['title_news'],
        'content_news' => $data['content_news'],
			);
			if($upload_data!=false){
				$array['image_news'] = 'asset/images/'.$upload_data['orig_name'];
			}

      $this->db->where('id_news',$id);
      $this->db->update('news',$array);
      return 1;
    }

		function fetchnewsSearch($data) {
			$this->db->like($data['by'],$data['search']);
			$this->db->join('category','news.id_category = category.id_category');
			$this->db->join('user','news.id_user = user.id_user');
			$this->db->order_by('title_news','DESC');
	    $query = $this->db->get('news');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
		}

		function fetchallcategory(){
			$query = $this->db->get('category');
			if($query->num_rows()>0){
				return $query->result();
			}
			else return FALSE;
		}





}
