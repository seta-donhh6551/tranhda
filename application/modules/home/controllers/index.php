<?php

class Index extends MY_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model("model_product");
	}

	public function index() {
		$data['listcate'] = $this->listcate();
		$data['listintro'] = $this->listintro();
		$data['support'] = $this->support();

		//get list product
		$data['listAllPro'] = $this->model_product->listproduct(null, 10);
		$data['listGems'] = $this->model_product->listproduct(1);
		$data['listRices'] = $this->model_product->listproduct(2);

		$data['config'] = $this->config();
		$data['title'] = "Tranh gạo việt";
		$this->load->view("layout", $data);
	}

	public function view() {
		$this->debug($this->online_view());
	}

}