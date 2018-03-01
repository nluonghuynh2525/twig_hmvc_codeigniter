<?php
class Search_model extends CI_Model {
	private $table = 'news';
    public function __construct() {
            $this->load->database();
    }
    
    public function get_all($keyword) {
    	$this->db->select('*');
	    $this->db->from($this->table); 
	    $this->db->where('active', 1);
	    $this->db->like('title', $keyword);
        $query = $this->db->get();

        return $query->num_rows();
	}
	    

    public function fetch_departments($limit, $start, $keyword) {
        $this->db->select('n.cat_id, n.title, n.slug, n.active, n.date_create, n.description, n.image, c.slug_cat, c.name');
        $this->db->from('news n'); 
        $this->db->join('categories c', 'c.id=n.cat_id');
        $this->db->where('n.active', 1);
	    $this->db->like('n.title', $keyword);
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

	
}