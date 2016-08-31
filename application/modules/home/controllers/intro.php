<?php
   class Intro extends MY_Controller{
	   public function __construct(){
		   parent::__construct();
		   $this->load->helper("url");
		   $this->load->model("mindex");
		   $this->load->model("model_home");
		   $this->load->model("model_technology");
	   }
	   public function index(){	
	       $id = $this->uri->segment(2);
		   $data['listcate']  = $this->listcate();
		   $data['listintro']  = $this->listintro();
		   $data['support'] = $this->support();
		   $data['access'] 	= $this->access();
		   $data['online'] 	= $this->online();
		   $data['config'] 	= $this->config();
		   $data['eq'] 			= "1";
		   $data['topeq'] 			= "10";
		   $data['links'] = base_url().uri_string().".html";
		   $data['result'] 	= $this->mindex->getintro($id);
		   //$this->debug($data['intro']);
		   foreach($data['listcate'] as $category){
			   $product[] = $this->model_product->getproduct($category['cate_id'],4);
			   $listcago[$category['cate_id']] = $this->listcago($category['cate_id']);
		   }
		   $data['listall'] = array("listcagotop"=>$listcago);
		   if($data['result'] == NULL){ redirect(base_url()."home/notfound");}
		   $data['title'] 		= $data['result']['in_name'];
		   $this->load->view("introduction/layout",$data);
	   }
   }