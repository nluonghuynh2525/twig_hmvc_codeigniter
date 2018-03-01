<?php 

class Home extends CI_Controller {
    
	function __construct() {
		parent::__construct();
		$this->load->model('home_model');
		$this->load->library('Twig');
		$this->load->library('Ajax_pagination');
        $this->perPage = 9;     

        $this->load->helper('form');
        $this->load->helper('email');
        $this->load->library('form_validation');

        $this->load->library('email');
        $this->load->library('encrypt');
	}

	function init() {
		//total rows count
        $totalRec = count($this->home_model->get_rows());
        //pagination configuration
        $config['target']      = '#news_list';
        $config['base_url']    = base_url().'home/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $this->ajax_pagination->initialize($config);
	}

	function index() {
        
        // return $a;
		$data = array();
        $data['category_new'] = $this->home_model->get_category_news();
		// $data['news'] = $this->home_model->get_news();
		$data['slide_head'] = $this->home_model->get_slide_head();

		$this->init();
        
        //get the news data
        $data['most_view'] = $this->home_model->get_most_new();
        $data['news'] = $this->home_model->get_rows(array('limit'=>$this->perPage));
        $data['link_pagi'] = $this->ajax_pagination->create_links();

        // get all tag
        $data['tags'] = $this->home_model->get_all_tag();

		$this->twig->display('index', $data);
	}

	function ajaxPaginationData(){
        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        
        $this->init();
        //get the posts data
        $data['news'] = $this->home_model->get_rows(array('start'=>$offset,'limit'=>$this->perPage));
        $data['link_pagi'] = $this->ajax_pagination->create_links();
        //load the view
        $this->twig->display('pagination_data', $data, false);
    }

	function detail($slug = NULL) {
        // kiem tra da xem bai viet chua
        $old_view = $this->home_model->get_num_view_detail($slug);

        if($this->session->has_userdata($slug)) {
            
        }else {
            $this->session->set_userdata($slug, $slug);
            $this->home_model->update_num_view_detail($slug, $old_view);
        }

        // tags
        $data['tags'] = $this->home_model->get_tag($slug);
        // get related post
        $cat_id = $this->home_model->get_cat_id($slug);
        $data['related_post'] = $this->home_model->get_related_post($slug, $cat_id);

        // slide slick bottom
        $data['slide_bottom'] = $this->home_model->get_slide_head();

        // new post
        $data['new_post'] = $this->home_model->get_new_post();

		$data['details'] = $this->home_model->get_news_detail($slug);
        if (empty($data['details'])) {
            show_404();
        }
        // die($slug);
		$this->twig->display('detail', $data);
	}

    public function CheckFormSubcribe() {
       
        $this->form_validation->set_rules('email_subscribe', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == FALSE){
            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);
        }else{
           if(!$this->home_model->check_has_email($this->input->post('email_subscribe'))) {
                $this->home_model->add_email();
                echo json_encode(['success'=>'Bạn đã Đăng ký thành công.']);
            }else {
                echo json_encode(['success'=>'Bạn đã đăng ký trước đó rồi nhé.']);
            }

        }

    }

    public function sendMail() {
        $config = Array(
          'protocol' => 'smtp',
          'smtp_host' => 'ssl://smtp.googlemail.com',
          'smtp_port' => 465,
          'smtp_user' => 'luonghuynh2525@gmail.com', // change it to yours
          'smtp_pass' => 'antkinggosu2017', // change it to yours
          'mailtype' => 'html',
          'charset' => 'iso-8859-1',
          'wordwrap' => TRUE
        );

        $message = 'test';
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('luonghuynh2525@gmail.com'); // change it to yours
        $this->email->to('nlhuynh2525@gmail.com');// change it to yours
        $this->email->subject('Resume from JobsBuddy for your Job posting');
        $this->email->message($message);
        if($this->email->send()) {
            echo 'Email sent.';
        }else {
            show_error($this->email->print_debugger());
        }

    }

    public function sendMailTest() {
        //SMTP & mail configuration
        $this->load->library('email');
        $config = array(
            'protocol' => 'smtp',
            'mailpath' => '/usr/sbin/sendmail',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 587,
            'smtp_user' => 'nlhuynh2525@gmail.com',
            'smtp_pass' => 'antkinggosu2017',
            'smtp_crypto' => 'tls',
            'mailtype'  => 'html',
            'smtp_timeout' => '30', //in seconds
            'wordwrap' => TRUE
        );
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");

        //Email content
        $htmlContent = '<h1>Sending email via SMTP server</h1>';
        $htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

        $this->email->to('nguyenluong_huynh@yahoo.com');
        $this->email->from('nlhuynh2525@gmail.com','MyWebsite');
        $this->email->subject('How to send email via SMTP server in CodeIgniter');
        $this->email->message($htmlContent);

        //Send email
        if($this->email->send()) {
            echo 'Email sent.';
        }else {
            show_error($this->email->print_debugger());
        }
    }

    public function postEmail(){
        
        $this->load->library('email');

        $config = array();  
        $config['protocol'] = 'smtp';  
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';  
        $config['smtp_user'] = 'nlhuynh2525@gmail.com';  
        $config['smtp_pass'] = 'antkinggosu2017';  
        $config['smtp_port'] = 465;  
        
        $this->email->initialize($config);  
          
        $this->email->set_newline("\r\n");

        $this->email->from('nlhuynh2525@gmail.com', 'admin');
        $this->email->to('luonghuynh2525@gmail.com');
        $this->email->subject('kaka');
        $this->email->message('keke');
        if($this->email->send()){
            // $this->session->set_flashdata('success', 'Email Sent Successfully!');
            // redirect(base_url() . "index.php/contact/index");
        }else {
            show_error($this->email->print_debugger());
        }
    }

}
