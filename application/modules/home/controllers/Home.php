<?php 

class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library('Twig');
	}

	function index() {
		
		$this->twig->display('test');
	}

	function about() {
		
		$this->twig->display('test');
		
	}

	function haha() {

		$data['name'] = 'kekek';
		$this->twig->display('haha', $data);
		
	}
	
}
