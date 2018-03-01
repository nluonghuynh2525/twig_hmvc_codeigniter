<?php if (!defined('BASEPATH')){ exit('No direct script access allowed'); }

/**
 *  Stats Controller
 *
 * @package XGO CMS v3.0
 * @subpackage Stats
 * @link http://sunsoft.vn
 */

class Categories extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('categories_model','categories');
	}

	public function index() {
		if($this->session->has_userdata('logged_in')) {
            $this->load->view('categories/index');
        }else {
            redirect('auth');
        }
		
	}

	public function ajax_list()
    {

        $list = $this->categories->get_datatables();
        $data = array();
        $no = $_POST['start'];
        $base_url = base_url();

        foreach ($list as $categories) {
            
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $categories->name;
            $row[] = $categories->active?'Có':'Không';
            $row[] = "
					<a href=".$base_url."auth/categories/update/".$categories->id."> Sửa </a>
            ";
            
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->categories->count_all(),
                        "recordsFiltered" => $this->categories->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

	public function add() {
        if(!$this->session->has_userdata('logged_in')) {
            redirect('auth');
        }

		$this->load->helper('form');
        $this->load->library('form_validation');

        
        $this->form_validation->set_rules('title', 'Title', 'required');

        
        if ($this->form_validation->run() === FALSE) {
            
            $this->load->view('categories/edit');
        }
        else
        {
            $this->categories->add_category();
            redirect('auth/categories/index');
        }
	}

    public function update($id) {
        if(!$this->session->has_userdata('logged_in')) {
            redirect('auth');
        }

        $this->load->helper('form');
        $this->load->library('form_validation');

        
        $this->form_validation->set_rules('title', 'Title', 'required');

        $data['info_detail'] = $this->categories->get_category_detail($id);
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('categories/edit', $data);
        }
        else
        {
            $this->categories->update_category($id);
            redirect('auth/categories/index');
        }
    }

    public function delete($id) {
        if(!$this->session->has_userdata('logged_in')) {
            redirect('auth');
        }

        // $this->categories_model->delete_category($id);
        // redirect('auth/categories/index');
        
    }
}