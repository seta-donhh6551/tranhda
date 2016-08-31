<?php
   class Index extends MY_Controller{
	   public function __construct(){
		   parent::__construct();
		   $this->load->model("model_product");
	   }
	   public function index(){	
		   $data['listcate']  = $this->listcate();
		   $data['listintro']  = $this->listintro();
		   $data['support'] = $this->support();
		   $data['access'] 	= $this->access();
		   $data['online'] 	= $this->online();
		   foreach($data['listcate'] as $category){
			   $product[] = $this->model_product->getproduct($category['cate_id'],4);
			   $listcago[$category['cate_id']] = $this->model_product->listcago($category['cate_id']);
		   }
		   //$this->debug($listcago);
		   $data['listall'] = array("category"=>$data['listcate'],"products"=>$product,"listcagotop"=>$listcago);
		   $this->write($data['access']);
		   $data['config'] 	= $this->config();
		   $data['eq'] 		= "0";
		   $data['topeq'] 	= "10";
		   $data['title'] = "Bán tranh gạo tại Hà Nội";
		   $this->load->view("layout",$data);
	   }
	   public function view(){
		   $this->debug($this->online_view());
	   }
   }