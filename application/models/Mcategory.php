<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcategory extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}

  function fetchCategory($limit,$start,$pagenumber) {

    if($pagenumber!="")
      $this->db->limit($limit,($pagenumber*$limit)-$limit);
    else
      $this->db->limit($limit,$start);
	  $this->db->order_by('name_category','DESC');
    $query = $this->db->get('category');
    if($query->num_rows()>0){
      return $query->result();
    }
    else return FALSE;
  }
  function countAllcategory() {
    return $this->db->count_all("category");
  }

  function saveCategory($data,$upload_data){
    $array = array(
        'name_category' => $data['name_category'],
        'description_category' => $data['description_category'],
			  'image_category' => 'asset/images/'.$upload_data['orig_name']


      );
    $this->db->insert('category',$array);
    return 1;
  }
    function editCategory($data,$upload_data,$id){
      $array = array(
				'name_category' => $data['name_category'],
        'description_category' => $data['description_category'],
			);
			if($upload_data!=false){
				$array['image_category'] = 'asset/images/'.$upload_data['orig_name'];
			}

      $this->db->where('id_category',$id);
      $this->db->update('category',$array);
      return 1;
    }

		function fetchCategorySearch($data) {
			$this->db->like($data['by'],$data['search']);
			$this->db->order_by('name_category','ASC');
	    $query = $this->db->get('category');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
		}
    function getCategory($id){
      $this->db->where('id_category',$id);
      $query = $this->db->get('category');
    if($query->num_rows()>0){
      return $query->row_array();
    }
    else return FALSE;
    }





}
