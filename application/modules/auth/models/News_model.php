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

    public function add_new_tag() {

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

        $this->db->insert($this->table, $data);
        $insert_id = $this->db->insert_id();

        // add new_tag table
        $target = $this->input->post('tags');
        if(!empty($target)) {
            foreach($target as  $value){
                // echo $value;
                $data_tag = array(
                    'tag_id' => $value,
                    'new_id' => $insert_id,
                    'date_create' => $date_current,
                    'date_update' => $date_current
                );
                $this->db->insert('new_tag', $data_tag);
            }
        }
	    return true;

	}

    public function delete_new_tag($new_id) {
        $this->db->where('new_id', $new_id);
        $this->db->delete('new_tag');
    }

    public function update_news($id) {
        $dt = new DateTime();
        $date_current = $dt->format('Y-m-d H:i:s');

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
        $this->db->update($this->table, $data);

        // update new_tag table
        $target = $this->input->post('tags');

        // if(!empty($target)) {
        //delete new_tag with id
        $this->delete_new_tag($id);

            foreach($target as  $value){
                $data_tag = array(
                    'tag_id' => $value,
                    'new_id' => $id,
                    'date_create' => $date_current,
                    'date_update' => $date_current
                );
                $this->db->insert('new_tag', $data_tag);
            }
        // }

        return true;
    }

    public function delete_news($id) {
        
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }

    public function get_news_detail($id) {
        
        $this->db->select('n.id as nid, n.title, n.description, n.content, n.active, n.is_slide_head, n.image, c.id as cat_id, c.name, nt.tag_id, nt.new_id, t.name_tag ');

        $this->db->join('categories c', 'c.id=n.cat_id', 'left');
        $this->db->from($this->table.' n', 'left');
        $this->db->join('new_tag nt', 'nt.new_id=n.id', 'left');
        $this->db->join('tags t', 't.id=nt.tag_id', 'left');
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