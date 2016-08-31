<?php
	class Search extends MY_Controller{
	    public function __construct(){
		   parent::__construct();
		   $this->load->helper("url");
		   $this->load->model("model_product");
	    }
		public function index(){
			//if(!isset($_GET)){die();}
			$keyword = $_GET['keyword'];
			$data['config'] 	= $this->config();
			$data['listcate']  = $this->listcate();
		    $data['support'] = $this->support();
		    $data['access'] 	= $this->access();
		    $data['online'] 	= $this->online();
			$config['base_url'] = base_url().'tim-kiem/'.$keyword;
		    $config['total_rows'] = $this->model_product->count_all_search($keyword);
		    $config['per_page'] = 12;
		    $config['uri_segment'] = 3;
		    $config['next_link'] = "Next";
		    $config['prev_link'] = "Prev";
		    $this->load->library("pagination",$config);
		    $start = (int)$this->uri->segment(3);						
			$data['results'] = $this->model_product->search($keyword,$config['per_page'],$start);
			foreach($data['listcate'] as $category){
			   $product[] = $this->model_product->getproduct($category['cate_id'],4);
			   $listcago[$category['cate_id']] = $this->listcago($category['cate_id']);
		   }
		   $data['listall'] = array("listcagotop"=>$listcago);
			//$this->debug($data['results']);
			$data['title'] = "Kết quả tìm kiếm";
			$this->load->view("search/layout",$data);
		}		
		public function ajax(){
			$id = $this->input->get("id");
			$this->load->model("mcate");
			$data = $this->mcate->get_menu_cago($id);
			echo "<select name='loai2'>";
			foreach($data as $item){
				echo "<option value='".$item['cago_id']."'>".$item['cago_name']."</option>";
			}
			echo "</select>";
		}
	}