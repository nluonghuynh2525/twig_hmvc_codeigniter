<?php
class News_model extends CI_Model {

	var $table = 'news';
    var $column_order = array(null, 'title','description', 'active', 'is_slide_head', 'image', null); //set column field database for datatable orderable
    var $column_search = array('title','description','content'); //set column field database for datatable searchable 
    var $order = array('id' => 'desc'); // default order 

    public function __construct() {
            
    }
    public function index() {
        $this->db->from($this->table);
 
        $i = 0;
        foreach ($this->column_search as $item) {
            if($_POST['search']['value']) { // if datatable send POST for search
                if($i===0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if(isset($_POST['order'])) {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
	}

	function get_datatables() {
        $this->index();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered() {
        $this->index();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all() {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    

	public function add_news() {
		$this->load->helper(array('url', 'slug_helper'));
        $dt = new DateTime();
        $date_current = $dt->format('Y-m-d H:i:s');
        $slug= create_slug($this->input->post('title'));
		
		$new_name  = substr(strrchr(rtrim($this->input->post('image_new'), '/'), '/'), 1);
		
		$data = array(
			'cat_id' => $this->input->post('category'),
			'user_id' => '1',
	        'title' => $this->input->post('title'),
	        'slug' => $slug,
	        'description' => $this->input->post('description'),
	        'content' => $this->input->post('content'),
	        'image' => $new_name,
            'active' => $this->input->post('active'),
            'is_slide_head' => $this->input->post('is_slider'),
            'date_create' => $date_current,
            'date_update' => $date_current
	    );

	    return $this->db->insert($this->table, $data);
	}

    public function update_news($id) {
        $this->load->helper(array('url', 'slug_helper'));

        $slug= create_slug($this->input->post('title'));
        
        $new_name  = substr(strrchr(rtrim($this->input->post('image_new'), '/'), '/'), 1);
        
        $data = array(
            'cat_id' => $this->input->post('category'),
            'user_id' => '1',
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'description' => $this->input->post('description'),
            'content' => $this->input->post('content'),
            'image' => $new_name,
            'active' => $this->input->post('active'),
            'is_slide_head' => $this->input->post('is_slider')
        );
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete_news($id) {
        
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }

    public function get_news_detail($id) {
        
        $this->db->select('n.title, n.description, n.content, n.active, n.is_slide_head, n.image, c.id as cat_id, c.name');
        $this->db->from($this->table.' n'); 
        $this->db->join('categories c', 'c.id=n.cat_id');
        $this->db->where('n.id',$id);
               
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