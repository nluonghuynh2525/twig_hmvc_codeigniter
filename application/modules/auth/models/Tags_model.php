<?php
class Tags_model extends CI_Model {

	var $table = 'tags';
    var $column_order = array(null, 'name_tag', 'slug_tag', 'date_create', null); //set column field database for datatable orderable
    var $column_search = array('name_tag','slug_tag'); //set column field database for datatable searchable 
    var $order = array('id' => 'DESC'); // default order 

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


	public function add_tag() {
        $dt = new DateTime();
        $date_current = $dt->format('Y-m-d H:i:s');
		
		$data = array(
	        'name_tag' => $this->input->post('name_tag'),
            'slug_tag' => $this->input->post('slug_tag'),
            'date_create' => $date_current,
            'date_update' => $date_current
	    );

	    return $this->db->insert($this->table, $data);
	}

    public function update_tag($id) {
        $dt = new DateTime();
        $date_current = $dt->format('Y-m-d H:i:s');

        $data = array(
            'name_tag' => $this->input->post('name_tag'),
            'slug_tag' => $this->input->post('slug_tag'),
            'date_update' => $date_current
        );
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete_tag($id) {
        
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }

    public function get_tag_detail($id) {
        
        $this->db->select('*');
        $this->db->from($this->table); 
        $this->db->where('id',$id);
               
        $query = $this->db->get(); 

        if($query->num_rows() != 0) {
            return $query->row_array();
        }else {
            return false;
        }

    }

    public function check_slug_tag($slug_tag) {
        $this->db->select('*');
        $this->db->from($this->table); 
        // $this->db->where('id',$id);
        $this->db->where('slug_tag',$slug_tag);
               
        $query = $this->db->get(); 

        if($query->num_rows() != 0) {
            return true;
        }else {
            return false;
        }
    }

    public function get_all_tag() {
        $this->db->select('t.id, t.name_tag, t.slug_tag, nt.new_id');
        $this->db->from($this->table.' t'); 
        $this->db->join('new_tag nt', 'nt.tag_id=t.id', 'left');

        // $this->db->group_by('nt.tag_id');
        $query = $this->db->get(); 

        if($query->num_rows() != 0) {
            return $query->result_array();
        }else {
            return false;
        }
        
    }

    
}