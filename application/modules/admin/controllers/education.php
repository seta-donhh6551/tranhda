<?php
	require("libraries/student.php");
	class Education extends Student{
		public function __construct(){
			parent::__construct();
			$this->load->helper(array("url","form"));
			$this->load->library("form_validation");	
			$this->load->model("mindex");	
		}
		public function index(){
			$data['title'] = "Đào tạo";
			$data['template'] = "education/edu";
			$data['data'] = "";			
			$data['education'] = $this->mindex->education();
			if($this->input->post("ok") != NULL){
				$db = array(
						"edu_info" => $this->input->post("edu_info"),
						"edu_full" => $this->input->post("edu_full")
					);
				$this->mindex->update_edu($db);
				redirect(base_url()."admin/index");
			}else{
				$this->load->view("layout",$data);
			}
		}
	}