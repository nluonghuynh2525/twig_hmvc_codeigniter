<?php if (!defined('BASEPATH')){ exit('No direct script access allowed'); }

/**
 *  Stats Controller
 *
 * @package XGO CMS v3.0
 * @subpackage Stats
 * @link http://sunsoft.vn
 */

class Tags extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('tags_model','tags');
	}

	public function index() {
		if($this->session->has_userdata('logged_in')) {
            $this->load->view('tags/index');
        }else {
            redirect('auth');
        }
		
	}

	public function ajax_list()
    {

        $list = $this->tags->get_datatables();
        $data = array();
        $no = $_POST['start'];
        $base_url = base_url();

        foreach ($list as $tags) {
            
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $tags->name_tag;
            $row[] = $tags->slug_tag;
            $row[] = $tags->date_create;
            $row[] = "
					<a href=".$base_url."auth/tags/update/".$tags->id."> Sửa </a>
                    <a href=".$base_url."auth/tags/delete/".$tags->id." onclick=\"return confirm('Bạn chắc chắn muốn xóa')\">Xóa</a>
            ";
            
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->tags->count_all(),
                        "recordsFiltered" => $this->tags->count_filtered(),
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

        $this->form_validation->set_rules('name_tag', 'Tên tag', 'required');
        $this->form_validation->set_rules('slug_tag', 'Slug tag', 'required');

        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('tags/edit');
        } else {
            // check slug_tag
            if($this->tags->check_slug_tag($this->input->post('slug_tag'))) {
                $data['message'] = 'Đã tồn tại tên slug';
                $this->load->view('tags/edit', $data);
            }else {
                $this->tags->add_tag();
                redirect('auth/tags/index');
            }
            
        }
	}

    public function update($id) {
        if(!$this->session->has_userdata('logged_in')) {
            redirect('auth');
        }

        $this->load->helper('form');
        $this->load->library('form_validation');

        
        $this->form_validation->set_rules('name_tag', 'Tên tag', 'required');
        $this->form_validation->set_rules('slug_tag', 'Slug tag', 'required');

        $data['info_detail'] = $this->tags->get_tag_detail($id);
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('tags/edit', $data);
        }else {
            if($this->tags->check_slug_tag($this->input->post('slug_tag'))) {
                $data['message'] = 'Đã tồn tại tên slug';
                $this->load->view('tags/edit', $data);
            }else {
                $this->tags->update_tag($id);
                redirect('auth/tags/index');
            }
            
        }
    }

    public function delete($id) {
        if(!$this->session->has_userdata('logged_in')) {
            redirect('auth');
        }

        $this->tags->delete_tag($id);
        redirect('auth/tags/index');
        
    }
}