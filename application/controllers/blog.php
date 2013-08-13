<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
	function __construct() {
		parent::__construct();
//		$this->load->model('blog_model');
//		$this->load->helper('url');
//		$this->load->helper('form');
	}
	
	function index() {
//		$data['message'] = "dddz中文";
//		$data['query'] = $this->blog_model->get_blog();
//
//		$this->load->view("blog", $data);
        echo "1";
	}
	
	function comments() {
		echo "testing...";
	}
	
}



?>