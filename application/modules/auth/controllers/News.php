<?php if (!defined('BASEPATH')){ exit('No direct script access allowed'); }

/**
 *  Stats Controller
 *
 * @package XGO CMS v3.0
 * @subpackage Stats
 * @link http://sunsoft.vn
 */

class News extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('tags_model');
        $this->load->model('news_model','news');
		$this->load->model('categories_model','categories');

	}

	public function index() {
		// redirect if login form
        // $this->session->unset_userdata('logged_in');
    
        // die($dt->format('Y-m-d H:i:s'));
        if($this->session->has_userdata('logged_in')) {
            
            $this->load->view('news/index');
        }else {
            redirect('auth');
        }
		
	}

	public function ajax_list()
    {

        $list = $this->news->get_datatables();
        $data = array();
        $no = $_POST['start'];
        $base_url = base_url();

        foreach ($list as $news) {
            
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $news->title;
            $row[] = $news->description;
            $row[] = $news->active?'Có':'Không';
            $row[] = $news->is_slide_head?'Có':'Không';
            $row[] = "<img class='img_thumbs' src=".$base_url."public/static/uploads/images/".$news->image.">";
            $row[] = "
					<a href=".$base_url."auth/news/update/".$news->id."> Sửa </a>
                    <a href=".$base_url."auth/news/delete/".$news->id." onclick=\"return confirm('Bạn chắc chắn muốn xóa')\">Xóa</a>
            ";
            
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->news->count_all(),
                        "recordsFiltered" => $this->news->count_filtered(),
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
        $this->form_validation->set_rules('description', 'Description', 'required');

        $data['categorys'] = $this->categories->get_category();
        $data['tags'] = $this->tags_model->get_all_tag();
        if ($this->form_validation->run() === FALSE) {
            
            $this->load->view('news/edit', $data);
        }
        else
        {

            $this->news->add_news();
            redirect('auth/news/index');
        }
	}

    public function update($id) {
        if(!$this->session->has_userdata('logged_in')) {
            redirect('auth');
        }

        $this->load->helper('form');
        $this->load->library('form_validation');

        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');

        $data['categorys'] = $this->categories->get_category();
        $data['info_detail'] = $this->news->get_news_detail($id);
        $data['tags'] = $this->tags_model->get_all_tag();
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('news/edit', $data);
        }
        else
        {
            $this->news->update_news($id);
            redirect('auth/news/index');
        }
    }

    public function delete($id) {
        if(!$this->session->has_userdata('logged_in')) {
            redirect('auth');
        }

        $this->news->delete_news($id);
        redirect('auth/news/index');
        
    }
}