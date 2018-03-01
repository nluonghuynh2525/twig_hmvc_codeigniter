<?php
class Tags_model extends CI_Model {

    public function __construct() {
            $this->load->database();
    }
    
    public function get_detail($slug_tag) {
        $this->db->select('*');
        $this->db->from('tags'); 
        
        $this->db->where('slug_tag',$slug_tag);
               
        $query = $this->db->get(); 

        if($query->num_rows() != 0)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
    }

    public function get_new_slug_in_tag($slug_tag) {
        $this->db->select('new_slug');
        $this->db->from('tags');
        $this->db->where('slug_tag', $slug_tag);
        return $this->db->get()->row()->new_slug;
    }

    public function get_news_detail_tag($slug = FALSE) {
        
        $this->db->select('n.id, n.title, n.description, n.content, n.image, n.date_create, n.cat_id, c.name, c.slug_cat, u.full_name');
        $this->db->from('news n'); 
        $this->db->join('categories c', 'c.id=n.cat_id');
        $this->db->join('users u', 'u.id=n.user_id');
        $this->db->where('n.slug',$slug);
               
        $query = $this->db->get(); 

        if($query->num_rows() != 0)
        {
            return $query->row_array();
        }
        else
        {
            return false;
        }

    }

	
}