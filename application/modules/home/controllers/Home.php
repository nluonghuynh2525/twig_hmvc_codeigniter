<?php 

class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library('Twig');
		$this->test = 'aaa';
	}

	function index() {
		
		$this->load->view('index');
	}

	function about() {
		
		$this->twig->display('test');
		
	}

	function haha() {

		$data['name'] = 'kekek';
		$this->twig->display('haha', $data);
		
	}
	
}
