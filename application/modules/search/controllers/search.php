<?php 

class Search extends CI_Controller {
	function __construct() {
		parent::__construct();
        $this->load->model('search_model');
		$this->load->model('home/home_model');

		$this->load->library('Twig');
		$this->load->library("pagination");

	}

	function init() {
		
	}

	function index() {
        $keyword = $this->input->get('keyword');
        
		$data = array();
        $data['keyword'] = $keyword;
        $data['category_new'] = $this->home_model->get_category_news();
		$data['slide_head'] = $this->home_model->get_slide_head();
        //get the news data
        $data['most_view'] = $this->home_model->get_most_new();

		// $this->init();
        $config = array();
        $config["base_url"] = base_url() . "search?keyword=".$keyword;
        $config["total_rows"] = $this->search_model->get_all($keyword);
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['prev_link'] = '«';
        $config['next_link'] = '»';
        // « »
        $config["per_page"] = 9;
        $config["uri_segment"] = 3; 
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';
        $this->pagination->initialize($config);
        
        $page = $this->input->get('page');
        
        $data["search"] = $this->search_model->fetch_departments($config["per_page"], $page, $keyword);
        $data["links"] = $this->pagination->create_links();        

		$this->twig->display('index', $data);
	}
    

}
