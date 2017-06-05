<?php

class Index extends MY_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model("model_product");
        $this->load->model("model_position");
	}

	public function index()
    {
        $data['config'] = $this->config();
		$data['listcate'] = $this->listcate();
		$data['listintro'] = $this->listintro();
		$data['listCategories'] = $this->listcago(null, 10);
        $data['listPositions'] = $this->model_position->listall(10, 0);
        $data['listProductSales'] = $this->model_product->listProductSales(5);
		//get list product
		$data['listAllPro'] = $this->model_product->listproduct(null, 10);
		$data['listGems'] = $this->model_product->listproduct(1);
		$data['listRices'] = $this->model_product->listproduct(2);
		$data['listSand'] = $this->model_product->listproduct(3);
        
		$data['title'] = "Tranh gạo việt";
        $data['template'] = 'content';
        
		$this->load->view("main", $data);
	}

	public function view() {
		$this->debug($this->online_view());
	}

}