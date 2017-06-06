<?php
	class Search extends MY_Controller{
	    public function __construct(){
		   parent::__construct();
		   $this->load->helper("url");
		   $this->load->model("model_product");
	    }
        
		public function index()
        {    
			$keyword = $_GET['keyword'];
            if(!$keyword){
                redirect(base_url());
            }
            
			$data['config'] = $this->config();
			$data['listcate'] = $this->listcate();
            
			$config['base_url'] = base_url().'tim-kiem/';
		    $config['total_rows'] = $this->model_product->count_all_search($keyword);
		    $config['per_page'] = 12;
		    $config['uri_segment'] = 3;
		    $config['next_link'] = "Tiếp";
            $config['prev_link'] = "Trước";
            $config['first_link'] = "Trang đầu";
            $config['last_link'] = "Trang cuối";
            $config['cur_tag_open'] = '<strong class="pagecurrent">';
            $config['cur_tag_close'] = '</strong>';
		    $this->load->library("pagination",$config);
            
		    $start = (int)$this->uri->segment(3);						
			$data['listProducts'] = $this->model_product->search($keyword, $config['per_page'], $start);
            
            $data['dataPage'] = array(
                'title' => 'Kết quả tìm kiếm cho '.$keyword.' - Tranh đá quý, tranh gạo và tranh cát',
                'keywords' => 'Kết quả tìm kiếm cho '.$keyword,
                'description' => 'Kết quả tìm kiếm cho '.$keyword.', Tranh Gạo Việt chuyên cung cấp tranh đá quý, tranh gạo và tranh cát'
            );
            
            $data['template'] = 'search/index';
            
			$this->load->view("layout",$data);
		}
        
		public function ajax()
        {
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