<?php
class Home_model extends CI_Model {

    public function __construct() {
            $this->load->database();
    }
    public function get_news() {
        
        $query = $this->db->get('news');
        if($query->num_rows() != 0)
	    {
	        return $query->result_array();
	    }
	    else
	    {
	        return false;
	    }
       
	}

    // get all tags
    public function get_all_tag() {
        $this->db->select('*');
        $this->db->from('tags'); 
        $this->db->group_by('slug_tag'); 
        $this->db->order_by('name_tag', 'ASC');
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

	public function get_most_new() {
        
        $this->db->select('n.id, n.title, n.num_view, n.image, n.slug, c.slug_cat, c.name');
	    $this->db->from('news n'); 
	    $this->db->join('categories c', 'c.id=n.cat_id');
	    $this->db->limit(5); 
        $this->db->order_by('n.num_view', 'DESC');
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

	public function get_slide_head() {
		$this->db->select('n.slug, n.title, n.description, n.content, n.image, n.num_view, n.date_create, c.name');
	    $this->db->from('news n'); 
	    $this->db->join('categories c', 'c.id=n.cat_id');
	    $this->db->where('n.is_slide_head', 1);
	    $this->db->order_by('n.date_create', 'DESC');
	           
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

	public function get_news_detail($slug = FALSE) {
		
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
    // page detail
    public function get_tag($slug) {
        
        $this->db->select('*');
        $this->db->from('tags'); 
        $this->db->where('new_slug',$slug);
               
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
    // page detail
    public function get_cat_id($slug) {
        $this->db->select('cat_id');
        $this->db->from('news');
        $this->db->where('slug', $slug);
        $this->db->limit(1);
        return $this->db->get()->row()->cat_id;
    }
    // page detail
    public function get_related_post($slug, $cat_id) {
        
        $this->db->select('*');
        $this->db->from('news'); 
        $this->db->where_not_in('slug',$slug);
        $this->db->where('cat_id',$cat_id);
        $this->db->limit(3);
               
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
    // page detail
    public function get_new_post() {
        
        $this->db->select('n.id, n.title, n.description, n.num_view, n.image, n.slug, n.date_create, c.slug_cat, c.name');
        $this->db->from('news n'); 
        $this->db->join('categories c', 'c.id=n.cat_id');
        $this->db->limit(5); 
        $this->db->order_by('n.date_create', 'DESC');
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

	public function get_rows($params = array())
    {
        $this->db->select('*');
        $this->db->from('news n');
        $this->db->join('categories c', 'c.id=n.cat_id' );
        $this->db->where('n.active', 1);
        $this->db->order_by('n.date_create','desc');
        
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }
        
        $query = $this->db->get();
        
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
    }

    public function get_category_news() {
    	$this->db->select('n.cat_id, c.name, c.slug_cat, COUNT(*) as count');
        $this->db->from('news n');
        $this->db->join('categories c', 'c.id=n.cat_id' );
        $this->db->where('c.active', 1);
        $this->db->group_by('cat_id');
        $this->db->order_by('c.name','desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_category_slug($slug) {
    	$this->db->select('*');
        $this->db->from('news n');
        $this->db->join('categories c', 'c.id=n.cat_id' );
        $this->db->where(array('n.active' => 1, 'c.slug_cat' => $slug));
        $this->db->order_by('n.title','desc');
        
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }
        
        $query = $this->db->get();
        
        return ($query->num_rows() > 0)?$query->result_array():FALSE;
    }

    public function get_num_view_detail($slug) {
        $this->db->select('num_view');
        $this->db->from('news');
        $this->db->where('slug', $slug);
        return $this->db->get()->row()->num_view;
    }

    public function update_num_view_detail($slug, $num_view) {
    	$data = array(
            'num_view' => $num_view + 1
        );
        $this->db->where('slug', $slug);
        $this->db->update('news', $data);
    }

	// add email
    public function add_email() {

        $dt = new DateTime();
        $date_current = $dt->format('Y-m-d H:i:s');
        
        $data = array(
            'email' => $this->input->post('email_subscribe'),
            'active' => 1,
            'status_get' => 1,
            'date_create' => $date_current,
            'date_update' => $date_current
        );

        return $this->db->insert('get_new', $data);
    }

    public function check_has_email($email) {

        $this->db->select('*');
        $this->db->from('get_new');
        $this->db->where('email', $email);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {

            return false;
        }
    }
}