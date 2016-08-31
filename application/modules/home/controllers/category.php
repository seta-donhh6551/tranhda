<?php
   class Category extends MY_Controller{
	   public function __construct(){
		   parent::__construct();
		   $this->load->model("model_category");
		   $this->load->model("model_technology");
		   $this->load->model("model_home");
	   }
	   public function index(){	
	   	  $item = $this->fillter($this->uri->segment(1));
		  $id = array_pop(explode('-', $item));
		  $config['base_url'] = base_url().$item;
		  $config['total_rows'] = $this->model_category->count_all($id);
		  $config['per_page'] = 10;
		  $config['uri_segment'] = 2;
		  $config['next_link'] = "Next";
		  $config['prev_link'] = "Prev";
		  $config['cur_tag_open'] = '<span class="curpage">';
		  $config['cur_tag_close'] = '</span>';
		  $this->load->library("pagination",$config);
		  $start = (int)$this->uri->segment(2);
		  $data['newest'] 		= $this->new_posts();
		  $data['listcate'] = $this->listcate();
	   	  $data['support'] 	= $this->support();
		  $data['access'] 	= $this->access();
		  $data['online'] 	= $this->online();
		  $data['config'] 	= $this->config();
		  $data['students'] = $this->model_home->random_student();
		  $data['result'] 	= $this->model_category->getdata($id);
		  $data['link']     = $item;
		  if($data['result'] == NULL){
			  redirect(base_url());
		  }
		  $data['listall'] 		= $this->model_category->listall($id,$config['per_page'],$start);
		  //$this->debug($data['listall']);
		  $data['category']		= $this->model_technology->listcago();
		  $data['eq'] 			= "10";
		  $data['topeq'] 		= "0";
		  if($data['result'] == NULL){
			  redirect(base_url());
		  }
		  $data['image'] 		= "design.png";
		  $data['title'] 		= $data['result']['cate_name'];
		  $data['rewrite']      = $data['result']['cate_rewrite'];
		  $this->load->view("category/posts/layout",$data);
	   }
   }