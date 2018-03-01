<?php if (!defined('BASEPATH')){ exit('No direct script access allowed'); }

/**
 *  Stats Controller
 *
 * @package XGO CMS v3.0
 * @subpackage Stats
 * @link http://sunsoft.vn
 */

class Users extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('users_model','users');
	}

	public function index() {
		if($this->session->has_userdata('logged_in')) {
            $this->load->view('users/index');
        }else {
            redirect('auth');
        }
		
	}

	public function ajax_list()
    {

        $list = $this->users->get_datatables();
        $data = array();
        $no = $_POST['start'];
        $base_url = base_url();

        foreach ($list as $users) {
            
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $users->user_name;
            $row[] = $users->email;
            $row[] = $users->full_name;
            $row[] = $users->level;
            $row[] = $users->active?'Có':'Không';
            $row[] = "
					<a href=".$base_url."auth/users/update/".$users->id."> Sửa </a>
            ";
            
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->users->count_all(),
                        "recordsFiltered" => $this->users->count_filtered(),
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

        
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        
        if ($this->form_validation->run() === FALSE) {
            
            $this->load->view('users/edit');
        }
        else
        {
            $this->users->add_user();
            redirect('auth/users/index');
        }
	}

    public function update($id) {
        if(!$this->session->has_userdata('logged_in')) {
            redirect('auth');
        }

        $this->load->helper('form');
        $this->load->library('form_validation');

        
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        $data['info_detail'] = $this->users->get_user_detail($id);
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('users/edit', $data);
        }
        else
        {
            $this->users->update_user($id);
            redirect('auth/users/index');
        }
    }

    public function delete($id) {
        if(!$this->session->has_userdata('logged_in')) {
            redirect('auth');
        }

        // $this->users_model->delete_category($id);
        // redirect('auth/users/index');
        
    }
}