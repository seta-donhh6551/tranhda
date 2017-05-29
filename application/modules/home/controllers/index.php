<?php

class Index extends MY_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model("model_product");
	}

	public function index()
    {
        $data['config'] = $this->config();
		$data['listcate'] = $this->listcate();
		$data['listintro'] = $this->listintro();
		$data['support'] = $this->support();
        //$this->debug($data['listcate']);
		//get list product
		$data['listAllPro'] = $this->model_product->listproduct(null, 10);
		$data['listGems'] = $this->model_product->listproduct(1);
		$data['listRices'] = $this->model_product->listproduct(2);
		$data['listSand'] = $this->model_product->listproduct(3);
        
		$data['title'] = "Tranh gạo việt";
        $data['template'] = 'content1';
        
		$this->load->view("main", $data);
	}

	public function view() {
		$this->debug($this->online_view());
	}

}