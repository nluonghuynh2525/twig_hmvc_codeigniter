<?php
class Category_model extends CI_Model {

    public function __construct() {
            $this->load->database();
    }
    
    public function get_all($slug) {
        $this->db->select('*');
        $this->db->from('news n'); 
        $this->db->join('categories c', 'c.id=n.cat_id');
        $this->db->where(array('c.slug_cat' => $slug, 'n.active' => 1));
        $query = $this->db->get();

        return $query->num_rows();
    }

    public function fetch_departments($limit, $start, $slug) {

        $this->db->select('*');
        $this->db->from('news n'); 
        $this->db->join('categories c', 'c.id=n.cat_id');
        $this->db->where(array('c.slug_cat' => $slug, 'n.active' => 1));
        $this->db->limit($limit, $start);
        $this->db->order_by('n.date_create', 'DESC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
               $data[] = $row;
           }
           return $data;
        }
        return false;
    }

    public function get_detail_slug($slug) {
        
        $this->db->select('n.title, n.description, n.content, n.active, n.is_slide_head, n.image, n.slug, c.slug_cat, c.id as cat_id, c.name');
        $this->db->from('news n'); 
        $this->db->join('categories c', 'c.id=n.cat_id');
        $this->db->where(array('c.slug_cat' => $slug, 'n.active' => 1));
               
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

	
}