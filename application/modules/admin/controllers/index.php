<?php
	require("libraries/student.php");
  	class Index extends Student{
		public function __construct(){
			parent::__construct();
			$this->load->helper("url");
		}
		public function index(){
			$data['title'] = "Tranh Gạo Việt";
			$data['template'] = "home";
			$data['data'] = "Lời chào";
			$data['act'] = 0;
			$this->load->view("layout",$data);
		}
	}