<?php

class Category extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_category");
        $this->load->model("model_position");
        $this->load->model("model_product_position");
    }

    public function index()
    {
        $basePath = $this->uri->segment(1);
        $items = $this->uri->segment(2);
        $data['result'] = $this->model_product->getsubrewrite($items);
        if(!$data['result']){
            redirect(base_url());
        }
        
        $config['base_url'] = base_url().$basePath.'/'.$items."/";
        $config['total_rows'] = $this->model_product->count_all($data['result']['id'], 2);
        $config['per_page'] = 15;
        $config['uri_segment'] = 3;
        $config['next_link'] = "Tiếp";
        $config['prev_link'] = "Trước";
        $config['first_link'] = "Trang đầu";
        $config['last_link'] = "Trang cuối";
        $config['cur_tag_open'] = '<strong class="pagecurrent">';
        $config['cur_tag_close'] = '</strong>';
        
        $this->load->library("pagination", $config);
        
        $start = (int)$this->uri->segment(3, 0);
        
        $data['support'] = $this->support();
        $data['config'] = $this->config();
        $data['listcate'] = $this->listcate();
        $data['link'] = base_url().uri_string().".html";
        
        //get list products
        $data['listProducts'] = $this->model_product->listproduct($data['result']['id'], $config['per_page'], $start);
        
        $data['dataPage'] = array(
            'title' => $data['result']['title'],
            'keywords' => $data['result']['keywords'],
            'description' => $data['result']['description']
        );

        $data['template'] = 'category/index';
        
        $this->load->view("layout", $data);
    }
    
    public function position()
    {
        $basePath = $this->uri->segment(1);
        $items = $this->uri->segment(2);
        $data['result'] = $this->model_position->getRewrite($items);
        if(!$data['result']){
            redirect(base_url());
        }
        
        $listProductByPosition = $this->model_product_position->getListProductByPosition($data['result']['id']);
        $listProductPositionId = array_column($listProductByPosition, 'product_id');
        $start = (int)$this->uri->segment(3, 0);
        $config['base_url'] = base_url().$basePath.'/'.$items."/";
        $config['per_page'] = 15;
        $data['listProducts'] = array();
        if($listProductPositionId)
        {
            $config['total_rows'] = $this->model_product->countAllPosition($listProductPositionId);
            //get list products
            $data['listProducts'] = $this->model_product->listProductByPosition($listProductPositionId, $config['per_page'], $start);
        }
        
        $config['uri_segment'] = 3;
        $config['next_link'] = "Tiếp";
        $config['prev_link'] = "Trước";
        $config['first_link'] = "Trang đầu";
        $config['last_link'] = "Trang cuối";
        $config['cur_tag_open'] = '<strong class="pagecurrent">';
        $config['cur_tag_close'] = '</strong>';
        
        $this->load->library("pagination", $config);
        
        $data['support'] = $this->support();
        $data['config'] = $this->config();
        $data['listcate'] = $this->listcate();
        $data['listCategories'] = $this->listcago(null, 10);
        $data['link'] = base_url().uri_string().".html";
        
        $data['dataPage'] = array(
            'title' => $data['result']['title'],
            'keywords' => $data['result']['keywords'],
            'description' => $data['result']['description']
        );

        $data['template'] = 'category/position';
        
        $this->load->view("layout", $data);
    }
}