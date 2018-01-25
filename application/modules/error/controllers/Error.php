<?php

class Error extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->library('Twig');
	}

	public function index(){

		// $this->load->library('Twig');
		$this->twig->display('404');
	}

	public function launcher(){
		die('Chúa Công! phía trước nguy hiểm mau quay lại!');
	}
}