<?php
require("libraries/student.php");
class Position extends Student{
	public function __construct(){
		parent::__construct();
		$this->load->model("model_position");
		$this->load->library("string");
	}
	public function index(){
	  	$config['base_url'] = base_url().'admin/position/index/';
	  	$config['total_rows'] = $this->model_position->count_all();
	  	$data['title']= "Vị trí treo tranh";
	  	$data['template'] = "positions/list";
	  	$config['per_page'] = 10;
	  	$config['uri_segment'] = 4;
	  	$config['next_link'] = "Next";
	  	$config['prev_link'] = "Prev";
	  	$this->load->library("pagination");
	  	$this->pagination->initialize($config); 
	  	$start = $this->uri->segment(4);
	  	$data['data'] = "";
	  	$data['act'] = 3;
	  	$data['listall']= $this->model_position->listall($config['per_page'],$start);

	  	$this->load->view("layout",$data);
	}
	public function active(){
		$id  = $this->uri->segment(4);
		$status	= $this->uri->segment(5);
		$db = array("status" => $status );
		$this->model_position->update($db,$id);
		redirect(base_url()."admin/position");
	}
	public function add(){
		$data['title'] = "Add new position";
		$data['template'] = "positions/add";
		$data['data'] = "";
		$data['act'] = 3;
		if($this->input->post("ok") != ""){
			$url = str_replace(' ','-',strtolower($this->string->replace($this->input->post('name'))));
			$value = array(
				"name" => trim($_POST['name']),
				"title" => $this->input->post("title"),
				"rewrite" => $url,
				"shortinfo" => $this->input->post("shortinfo"),
				"keywords" => $this->input->post("keywords"),
				"description" => $this->input->post("description"),
				"datetime" => date("Y-m-d-H:i:s"),
				"order" => $this->input->post("order"),
			);
			if($_FILES['image']['name'] != NULL){
				$config['upload_path'] = './uploads/cate';
				$config['allowed_types'] = 'jpg|png|jpeg|gif';
				$config['max_size']	= '1000';
				$config['max_width']  = '750';
				$config['max_height']  = '750';
				$this->load->library('upload',$config);
				if(!$this->upload->do_upload("image")){
					$data = array('error' => $this->upload->display_errors());
					$data['title'] = "Add new position";
					$data['template'] = "positions/add";
					$data['data'] = "";
					$data['act'] = 3;
					$this->load->view("layout",$data);
					return FALSE;
				}else{
					$data = $this->upload->data();
					$value['image'] = $data['file_name'];
					$this->createThumbnail($value['image']);
				}
			}
			$this->model_position->add($value);
			redirect(base_url()."admin/position");
		}else{
			$this->load->view("layout",$data);
		}
	}
	public function update(){
		$id = $this->uri->segment(4);
		$data['title']= "Edit position";
		$data['template'] = "positions/edit";
		$data['data'] = "";
		$data['act'] = 3;
		$data['result'] = $this->model_position->getdata($id);
		if($data['result'] == NULL){die();}
		if($this->input->post("ok") != ""){
			$url = str_replace(' ','-',strtolower($this->string->replace($this->input->post('name'))));
			$value = array(
				"name" => trim($_POST['name']),
				"title" => $this->input->post("title"),
				"rewrite" => $url,
				"shortinfo" => $this->input->post("shortinfo"),
				"keywords" => $this->input->post("keywords"),
				"description" => $this->input->post("description"),
				"datetime" => date("Y-m-d-H:i:s"),
				"order" => $this->input->post("order"),
			);
			if($_FILES['image']['name'] != NULL){
				$config['upload_path'] = './uploads/cate';
				$config['allowed_types'] = 'jpg|png|jpeg|gif';
				$config['max_size']	= '1000';
				$config['max_width']  = '750';
				$config['max_height']  = '750';
				$this->load->library('upload',$config);
				if(!$this->upload->do_upload("image")){
					$data = array('error' => $this->upload->display_errors());
					$data['title']= "Edit position";
					$data['template'] = "positions/edit";
					$data['data'] = "";
					$data['act'] = 3;
					$data['result'] = $this->model_position->getdata($id);
					$this->load->view("layout",$data);
					return FALSE;
				}else{
					$data = $this->upload->data();
					$value['image'] = $data['file_name'];
					$this->createThumbnail($value['image']);
				}
			}
			$this->model_position->update($value,$id);
			redirect(base_url()."admin/position");
		}else{
			$this->load->view("layout",$data);
		}
	}
	public function del(){
		$id = $this->uri->segment(4);
		$this->model_position->del($id);
		redirect(base_url()."admin/position");
	}
	public function createThumbnail($fileName){
		$this->load->library('image_lib');
		//$this->load->helper('thumbnail_helper');
		$config['image_library'] = 'gd2';
		$config['source_image'] = 'uploads/cate/'.$fileName;
		$config['new_image'] = 'uploads/cate/thumb/'.$fileName;
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['thumb_marker'] = FALSE;
		$config['width'] = 90;
		$config['height'] = 70;
		$this->image_lib->initialize($config); 
		$this->image_lib->resize();
		$this->image_lib->clear();
	}
}