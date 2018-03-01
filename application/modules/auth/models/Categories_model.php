<?php
class Categories_model extends CI_Model {

	var $table = 'categories';
    var $column_order = array(null, 'name', 'active', null); //set column field database for datatable orderable
    var $column_search = array('name','active'); //set column field database for datatable searchable 
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


	public function add_category() {
        $dt = new DateTime();
        $date_current = $dt->format('Y-m-d H:i:s');
        
		$new_name  = substr(strrchr(rtrim($this->input->post('image_new'), '/'), '/'), 1);
		
		$data = array(
	        'name' => $this->input->post('title'),
            'active' => $this->input->post('active'),
            'date_create' => $date_current,
            'date_update' => $date_current
	    );

	    return $this->db->insert($this->table, $data);
	}

    public function update_category($id) {
        
        $new_name  = substr(strrchr(rtrim($this->input->post('image_new'), '/'), '/'), 1);
        
        $data = array(
            
            'name' => $this->input->post('title'),
            'active' => $this->input->post('active')
        );
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete_category($id) {
        
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }

    public function get_category_detail($id) {
        
        $this->db->select('*');
        $this->db->from($this->table); 
        $this->db->where('id',$id);
               
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

    // get category
    public function get_category() {
        $this->db->select('*');
        $this->db->from($this->table); 
        $this->db->where('active', 1);

        $query = $this->db->get();
        if($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    
}