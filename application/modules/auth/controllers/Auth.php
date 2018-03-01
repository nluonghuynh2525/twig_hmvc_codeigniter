<?php if (!defined('BASEPATH')){ exit('No direct script access allowed'); }

/**
 *  Stats Controller
 *
 * @package XGO CMS v3.0
 * @subpackage Stats
 *
 */

class Auth extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->library('form_validation');
	}

	public function index() {
		// redirect if logined
		// die(do_hash('123456'));
		if($this->session->has_userdata('logged_in')) {
			redirect('auth/news');
		}

        $this->form_validation->set_rules('user_name', 'Username', 'trim|xss_clean|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|xss_clean|required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('check/index');
        }
        else
        {
            $data = array(
				'username' => $this->input->post('user_name'),
				'password' => $this->input->post('password')
			);

			$result = $this->auth_model->login($data);
			if ($result == TRUE) {
				
				$username = $data['username'];

				$result = $this->auth_model->read_user_information($username);
				
				if ($result != false) {
					$session_data = array(
						'username' => $result[0]->user_name,
						'email' => $result[0]->email
					);
					// Add user data in session
					
					$this->session->set_userdata('logged_in', $session_data);
					
					$this->load->view('news/index');
				}
			} else {

				$data = array(
					'error_message' => 'Invalid Username or Password'
				);
				$this->load->view('check/index', $data);
			}

        }
        // $this->session->unset_userdata('logged_in');
		
	}

	public function logout() {
		$this->session->unset_userdata('logged_in');
		redirect('auth');
	}
}