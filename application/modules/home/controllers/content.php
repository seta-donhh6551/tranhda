<?php
   class Content extends MY_Controller{
	   public function __construct(){
		   parent::__construct();
		   $this->load->helper("url");
		   $this->load->model("model_content");
		   $this->load->model("model_home");
		   $this->load->model("mnews");		   
	   }
	   public function index(){
		   $item = $this->uri->segment(1);
		   $config['base_url'] = base_url().$item;
		   $config['total_rows'] = $this->model_content->count_all();
		   $config['per_page'] = 9;
		   $config['uri_segment'] = 2;
		   $config['next_link'] = "Next";
		   $config['prev_link'] = "Prev";
		   $config['prev_tag_open'] = '<div class="product-page">';
		   $config['prev_tag_close'] = '</div>';
		   $config['first_tag_open'] = '<div class="product-page">';
		   $config['first_tag_close'] = '</div>';
		   $config['last_tag_open'] = '<div class="product-page">';
		   $config['last_tag_close'] = '</div>';
		   $config['num_tag_open'] = '<div class="product-page">';
		   $config['num_tag_close'] = '</div>';
		   $config['cur_tag_open'] = '<div class="product-page">';
		   $config['cur_tag_close'] = '</div>';
		   $config['next_tag_open'] = '<div class="product-page">';
		   $config['next_tag_close'] = '</div>';
		   $config['cur_tag_open'] = '<div class="product-page selected">';
		   $config['cur_tag_close'] = '</div>';
		   $this->load->library("pagination",$config);
		   $start = (int)$this->uri->segment(2);
		   $data['listcate'] = $this->listcate();
		   $data['randomcago'] = $this->mnews->randomcago(10);
		   $data['listnews'] = $this->mnews->list_all(10,0);
		   $data['topeq'] 			= "10";
		   $data['link']       = base_url().uri_string().".html";
		   $data['listalls'] = $this->model_content->listall($config['per_page'],$start);
		   foreach($data['listcate'] as $category){
			   $product[] = $this->model_product->getproduct($category['cate_id'],4);
			   $listcago[$category['cate_id']] = $this->listcago($category['cate_id']);
		   }
		   $data['listall'] = array("listcagotop"=>$listcago);
		   $data['title'] = "Nghệ thuật tranh gạo, tranh gạo việt";
		   $this->load->view("content/layout",$data);
	   }
	   public function view(){
		   $id1 = $this->fillter($this->uri->segment(2));
		   $id = array_pop(explode('-', $id1));
		   $data['support'] 	= $this->support();
		   $data['access'] 		= $this->access();
		   $data['online'] 		= $this->online();
		   $data['config'] 		= $this->config();
		   $data['listcate'] = $this->listcate();
		   $data['link']       = base_url().uri_string().".html";
		   $data['result'] = $this->model_content->getdata($id);
		   if($data['result'] == NULL){
		   		redirect(base_url());
				exit();
		   }
		   foreach($data['listcate'] as $category){
			   $product[] = $this->model_product->getproduct($category['cate_id'],4);
			   $listcago[$category['cate_id']] = $this->listcago($category['cate_id']);
		   }
		   $data['listall'] = array("listcagotop"=>$listcago);
		   $data['randomcago'] = $this->mnews->randomcago(10);
		   $data['listnews'] = $this->mnews->list_all(10,0);
		   $data['relate'] = $this->model_content->relate($id);
		   $data['title']  = $data['result']['con_title'];
		   $this->load->view("content/detail/layout",$data);
	   }
   }