<?php
   class Education extends MY_Controller{
	   public function __construct(){
		   parent::__construct();
		   $this->load->model("model_home");
		   $this->load->model("model_technology");
	   }
	   public function index(){	
	   	   $data['listcate']  = $this->listcate();
		   $data['listintro']  = $this->listintro();
		   $data['support'] = $this->support();
		   $data['access'] 	= $this->access();
		   $data['online'] 	= $this->online();
		   $data['config'] 	= $this->config();
		   $data['result'] 		= $this->model_home->education();
		   foreach($data['listcate'] as $category){
			   $product[] = $this->model_product->getproduct($category['cate_id'],4);
			   $listcago[$category['cate_id']] = $this->listcago($category['cate_id']);
		   }
		   $data['listall'] = array("listcagotop"=>$listcago);
		   $data['eq'] 			= "2";
		   $data['topeq'] 		= "2";
		   $data['title'] 		= "Về tranh gạo việt";
		   $this->load->view("education/layout",$data);
	   }
   }