<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marticle extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}

  function fetchArticle($limit,$start,$pagenumber) {

    if($pagenumber!="")
      $this->db->limit($limit,($pagenumber*$limit)-$limit);
    else
      $this->db->limit($limit,$start);
		$this->db->join('category','article.id_category = category.id_category');
		$this->db->join('user','article.id_user = user.id_user');
	  $this->db->order_by('date_article','DESC');
    $query = $this->db->get('article');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
  function countAllarticle() {
    return $this->db->count_all("article");
  }

  function saveArticle($data,$upload_data){
    $array = array(
				'id_user' => $this->session->userdata('idAdmin'),
				'id_category' => $data['id_category'],
        'title_article' => $data['title_article'],
        'content_article' => $data['content_article'],
				'caption' => $data['caption'],
				'date_article' => date('Y-m-d H:i:s'),
			  'image_article' => 'asset/images/'.$upload_data['orig_name']


      );
    $this->db->insert('article',$array);
    return 1;
  }
    function editArticle($data,$upload_data,$id){
      $array = array(
				'id_category' => $data['id_category'],
        'title_article' => $data['title_article'],
				'caption' => $data['caption'],
        'content_article' => $data['content_article'],
			);
			if($upload_data!=false){
				$array['image_article'] = 'asset/images/'.$upload_data['orig_name'];
			}

      $this->db->where('id_article',$id);
      $this->db->update('article',$array);
      return 1;
    }

		function fetchArticleSearch($data) {
			$this->db->like($data['by'],$data['search']);
			$this->db->join('category','article.id_category = category.id_category');
			$this->db->join('user','article.id_user = user.id_user');
			$this->db->order_by('title_article','DESC');
	    $query = $this->db->get('article');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
		}
		function getArticle($id){
		$this->db->join('category','article.id_category = category.id_category');
		$this->db->join('user','article.id_user = user.id_user');
		$this->db->where('id_article',$id);
	    $query = $this->db->get('article');
	    if($query->num_rows()>0){
	      return $query->row_array();
	    }
	    else return FALSE;
		}
		function fetchAllCategory(){
			$query = $this->db->get('category');
			if($query->num_rows()>0){
				return $query->result();
			}
			else return FALSE;
		}
		function fetchArticleCategory($limit,$start,$pagenumber,$id_category) {

    if($pagenumber!="")
      $this->db->limit($limit,($pagenumber*$limit)-$limit);
    else
      $this->db->limit($limit,$start);
  		$this->db->where('article.id_category',$id_category);
		$this->db->join('category','article.id_category = category.id_category');
		$this->db->join('user','article.id_user = user.id_user');
	  $this->db->order_by('date_article','DESC');
    $query = $this->db->get('article');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
}
