<?php
   class News extends MY_Controller{
	   public function __construct(){
		   parent::__construct();
		   $this->load->helper("url");
		   $this->load->library('session');
		   $this->load->library('cart');
		   $this->load->model("mcate");
		   $this->load->model("mnews");
	   }
	   public function index(){
		   $ids = $this->uri->segment(2);
		   $id = array_pop(explode('-',$ids));
		   $data['listcate']  = $this->listcate();
		   $data['config'] 	= $this->config();
		   $data['support'] = $this->support();
		   $data['result'] = $this->mnews->detail($id);
		   if($data['result'] == NULL){
		   		redirect(base_url());
				exit();
		   }
		   foreach($data['listcate'] as $category){
			   $product[] = $this->model_product->getproduct($category['cate_id'],4);
			   $listcago[$category['cate_id']] = $this->listcago($category['cate_id']);
		   }
		   $data['listall'] = array("listcagotop"=>$listcago);
		   $data['listintro']  = $this->listintro();
		   $data['listnews'] = $this->mnews->list_all(10,0);
		   $data['randomcago'] = $this->mnews->randomcago(10);
		   $data['title'] = $data['result']['news_title']." - Tin tức";
		   $this->load->view("news/detail/layout",$data);
	   }

	   public function gift(){
		   $data['listcate']  = $this->listcate();
		   $data['config'] 	= $this->config();
		   $data['support'] = $this->support();
		   foreach($data['listcate'] as $category){
			   $product[] = $this->model_product->getproduct($category['cate_id'],4);
			   $listcago[$category['cate_id']] = $this->listcago($category['cate_id']);
		   }
		   $data['listall'] = array("listcagotop"=>$listcago);
		   $data['listintro']  = $this->listintro();
		   $data['listnews'] = $this->mnews->list_all(10,0);
		   $data['randomcago'] = $this->mnews->randomcago(10);
		   $data['title'] = "Quà tặng cho người nước ngoài, món quà ý nghĩa từ việt nam";
		   $this->load->view("news/gift/layout",$data);
	   }

	   public function all(){
		   $config['base_url'] = base_url().'tin-tuc/';
		   $config['total_rows'] = $this->mnews->count_all_news();
		   $config['per_page'] = 6;
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
		   $data['listcate']  = $this->listcate();
		   $data['config'] 	= $this->config();
		   $data['randomcago'] = $this->mnews->randomcago(10);
		   $data['support'] = $this->support();
		   $data['listintro']  = $this->listintro();
		   $data['listnews'] = $this->mnews->list_all($config['per_page'],$start);
		   foreach($data['listcate'] as $category){
			   $product[] = $this->model_product->getproduct($category['cate_id'],4);
			   $listcago[$category['cate_id']] = $this->listcago($category['cate_id']);
		   }
		   $data['listall'] = array("listcagotop"=>$listcago);
		   //$this->debug($data['listnews']);
		   $data['title'] = "Tin tức, Tranh gạo việt";
		   $this->load->view("news/layout",$data);
	   }
   }