<?php
require("libraries/student.php");
class Products extends Student
{
	public function __construct(){
		parent::__construct();
		$this->load->model("mproducts");
		$this->load->model("model_position");
		$this->load->model("model_product_position");
		$this->load->helper("form");
		$this->load->library("form_validation");	
		$this->load->library("string");					
	}

	public function index()
	{
		$config['base_url'] = base_url().'admin/products/index/';
		$config['total_rows'] = $this->mproducts->count_all();
		$config['per_page'] = 10;
		$config['uri_segment'] = 4;
		$config['next_link'] = "Next";
		$config['prev_link'] = "Prev";
		$this->load->library("pagination");
		$this->pagination->initialize($config); 
		$start = $this->uri->segment(4);
		$data['title']="Quản lý sản phẩm";
		$data['act'] = 5;
		$data['listcate'] = $this->mproducts->getcate();
		$data['data']['info']= $this->mproducts->listall($config['per_page'], $start);
//		echo '<pre>';
//		print_r($data['data']['info']); die;
		$data['template'] = "products/list_products";
		$this->load->view("layout",$data);
	}

	public function add()
	{
		$data['error'] = "";
		$data['title'] = "Thêm mới sản phẩm";
		$data['template'] = "products/add_products";
		$data['act'] = 5;
		$data['data']['info'] = $this->mproducts->getcate();
		$data['listcago'] = $this->mproducts->listcago();
		$data['listposition'] = $this->model_position->listall(20, 0);
		if($this->input->post("ok") != ""){
			$this->form_validation->set_rules("pro_name","Tên sản phẩm","min_length[5]");
			if($this->form_validation->run() == FALSE){
				$this->load->view("layout",$data);
			}else{
				  $url = str_replace(' ', '-',strtolower($this->string->replace($this->input->post('pro_name'))));
				  $db = array(
						"pro_name" => $this->input->post("pro_name"),
						"pro_rewrite" => $url,
						"pro_status" => $this->input->post("pro_status"),
						"pro_code" => $this->input->post("pro_code"),
						"pro_info" => $this->input->post("pro_info"),
						"pro_full" => $this->input->post("pro_full"),
						"pro_keys" => $this->input->post("pro_keys"),
						"pro_des" => $this->input->post("pro_des"),
						"pro_price" => $this->input->post("pro_price"),
						"pro_size" => $this->input->post("pro_size"),
						"pro_order" => $this->input->post("pro_order"),
						"cago_id" => $this->input->post("cago_id"),
						"cate_id" => $this->input->post("pro_cate")
					);
				if($_FILES['img']['name'] != NULL){
					$config['upload_path'] = './uploads/products';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']	= '2000';
					$config['max_width']  = '1024';
					$config['max_height']  = '1600';
					$this->load->library('upload',$config);
					if(!$this->upload->do_upload("img")){
						$data = array('error' => $this->upload->display_errors());
						$data['title'] = "Thêm mới sản phẩm";
						$data['template'] = "products/add_products";
						$data['act'] = 5;
						$data['listcago'] = $this->mproducts->listcago();
						$data['data']['info'] = $this->mproducts->getcate();
						$data['listposition'] = $this->model_position->listall(20, 0);
						$this->load->view("layout",$data);
						return FALSE;
					}else{
						$data = $this->upload->data();
						$db['pro_image'] = $data['file_name'];
						$this->createThumbnail($db['pro_image']);
					}
				 }
				 
				$id = $this->mproducts->add_pro($db);
				 
				 //del all by product_id
				$this->model_product_position->delByProduct($id);
				 
				$positionId = $this->input->post('position_id');
				 
				foreach($positionId as $position)
				{
					 $dataPosition = array(
						 'position_id' => $position,
						 'product_id' => $id,
						 'created_at' => date('Y-m-d H:i:s')
					 );
					 
					 $this->model_product_position->add($dataPosition);
				}
				  
				redirect(base_url()."admin/products/index");				}
		}else{
			$this->load->view("layout",$data);
		}
	}

	public function update()
	{
		$id = $this->uri->segment(4);
		$this->load->helper("form");
		$this->load->library("form_validation");
		$data['error'] = "";
		$data['act'] = 5;
		$data['title'] = "Sửa thông tin sản phẩm";
		$data['template'] = "products/edit_products";
		$data['data']['info'] = $this->mproducts->getcate();
		$data['data']['get'] = $this->mproducts->get_prodata($id);
		$data['listcago'] = $this->mproducts->listcago();
		$data['listposition'] = $this->model_position->listall(20, 0);
		$data['list_product_position'] = $this->model_product_position->getListByProduct($id);
		if($this->input->post("ok") != ""){
			$this->form_validation->set_rules("pro_name","Tên sản phẩm","min_length[5]");
			if($this->form_validation->run() == FALSE){
				$this->load->view("layout",$data);
			}else{
				$url = str_replace(' ', '-',strtolower($this->string->replace($this->input->post('pro_name'))));
				$db = array(
					"pro_name" => $this->input->post("pro_name"),
					"pro_rewrite" => $url,
					"pro_status" => $this->input->post("pro_status"),
					"pro_code" => $this->input->post("pro_code"),
					"pro_info" => $this->input->post("pro_info"),
					"pro_full" => $this->input->post("pro_full"),
					"pro_keys" => $this->input->post("pro_keys"),
					"pro_des" => $this->input->post("pro_des"),
					"pro_price" => $this->input->post("pro_price"),
					"pro_size" => $this->input->post("pro_size"),
					"pro_order" => $this->input->post("pro_order"),
					"cago_id" => $this->input->post("cago_id"),
					"cate_id" => $this->input->post("pro_cate")
				  );
				if($_FILES['img']['name'] != NULL){
					$config['upload_path'] = './uploads/products';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']	= '1000';
					$config['max_width']  = '1024';
					$config['max_height']  = '1000';
					$this->load->library('upload',$config);
					if(!$this->upload->do_upload("img")){
						$data = array('error' => $this->upload->display_errors());
						$data['title'] = "Sủa thông tin sản phẩm";
						$data['template'] = "products/edit_products";
						$data['act'] = 5;
						$data['listcago'] = $this->mproducts->listcago();
						$data['data']['info'] = $this->mproducts->getcate();
						$data['data']['get'] = $this->mproducts->get_prodata($id);
						$data['listposition'] = $this->model_position->listall(20, 0);
						$data['list_product_position'] = $this->model_product_position->getListByProduct($id);
						$this->load->view("layout",$data);
						return FALSE;
					}else{
						$data = $this->upload->data();
						$db['pro_image'] = $data['file_name'];
						$this->createThumbnail($db['pro_image']);							
					}
				 }
				 
				//del all by product_id
				$this->model_product_position->delByProduct($id);
				 
				$positionId = $this->input->post('position_id');
				 
				foreach($positionId as $position)
				{
					 $dataPosition = array(
						 'position_id' => $position,
						 'product_id' => $id,
						 'created_at' => date('Y-m-d H:i:s')
					 );
					 
					 $this->model_product_position->add($dataPosition);
				}
				 
				$this->mproducts->update($db,$id);
				
				redirect(base_url()."admin/products/index");
			}
		}else{
			$this->load->view("layout",$data);
		}
	}

	public function del()
	{
		$id = $this->uri->segment(4);
		$data = $this->mproducts->get_prodata($id);
		$ok = $data['pro_image'];
		@unlink("uploads/products/".$ok);
		@unlink("uploads/products/thumb/".$ok);
		$this->mproducts->del_pro($id);
		redirect(base_url()."admin/products");
	}
	
	public function delall()
	{
		$id = $this->input->post("check");
		if($id != NULL){
			foreach($id as $item){
				$data = $this->mproducts->get_prodata($item);
				$ok = $data['pro_image'];
				$this->mproducts->del_pro($item,$ok);
			}
			redirect(base_url()."admin/products");
		}else{
			redirect(base_url()."admin/products");
		}
	}

	public function createThumbnail($fileName)
	{
		$this->load->library('image_lib');
		//$this->load->helper('thumbnail_helper');
		$config['image_library'] = 'gd2';
		$config['source_image'] = 'uploads/products/'.$fileName;
		$config['new_image'] = 'uploads/products/thumb/'.$fileName;
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['thumb_marker'] = FALSE;
		$config['width'] = 160;
		$config['height'] = 160;
		$this->image_lib->initialize($config); 
		$this->image_lib->resize();
		$this->image_lib->clear();
	}
}