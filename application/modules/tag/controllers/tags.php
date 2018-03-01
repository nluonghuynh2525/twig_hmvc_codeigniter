<?php 

class Tags extends CI_Controller {
	function __construct() {
		parent::__construct();
        $this->load->model('tags_model');
		$this->load->model('home/home_model');
		$this->load->library('Twig');
        $this->load->library("pagination");
		
	}

    function index($slug_tag =  NULL) {
        
        $data = array();
        // $data['category_slug'] = $this->category_model->get_detail_slug($slug);
        
        $data['category_new'] = $this->home_model->get_category_news();
        $data['slide_head'] = $this->home_model->get_slide_head();
        
        //get the news data
        $data['most_view'] = $this->home_model->get_most_new();
        $data['tags'] = $this->home_model->get_all_tag();

        // get detail slug tag
        $data['detail'] = $this->tags_model->get_detail($slug_tag);

        // get new with new_slug
        $new_slug = $this->tags_model->get_new_slug_in_tag($slug_tag);
        // die($new_slug);
        // $data['details'] = $this->home_model->get_news_detail($new_slug);


        $this->twig->display('index', $data);
    }

	
}
