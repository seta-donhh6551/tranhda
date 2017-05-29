<?php

class product extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("model_product");
    }

    public function index()
    {
        $items = $this->uri->segment(1);
        $result = $this->model_product->getrewrite($items);
        
        if ($result == null) {
            redirect(base_url());
        }
        
        $id = $result['cate_id'];
        
        $data['cateInfo'] = $this->model_product->getcate($id);
        if($data['cateInfo'] == null){
            redirect(base_url());
        }
        
        $config['base_url'] = base_url() . $items . "/";
        $config['total_rows'] = $this->model_product->count_all($id);
        $config['per_page'] = 15;
        $config['uri_segment'] = 2;
        $config['next_link'] = "Next";
        $config['prev_link'] = "Prev";
//        $config['prev_tag_open'] = '<div class="product-page">';
//        $config['prev_tag_close'] = '</div>';
//        $config['first_tag_open'] = '<div class="product-page">';
//        $config['first_tag_close'] = '</div>';
//        $config['last_tag_open'] = '<div class="product-page">';
//        $config['last_tag_close'] = '</div>';
//        $config['num_tag_open'] = '<div class="product-page">';
//        $config['num_tag_close'] = '</div>';
//        $config['cur_tag_open'] = '<div class="product-page">';
//        $config['cur_tag_close'] = '</div>';
//        $config['next_tag_open'] = '<div class="product-page">';
//        $config['next_tag_close'] = '</div>';
//        $config['cur_tag_open'] = '<div class="product-page selected">';
//        $config['cur_tag_close'] = '</div>';
        
        $this->load->library("pagination", $config);
        
        $start = (int)$this->uri->segment(2);
        $data['support'] = $this->support();
        $data['config'] = $this->config();
        $data['listcate'] = $this->listcate();
        $data['link'] = base_url() . uri_string() . ".html";
        
        $data['listProducts'] = $this->model_product->listall($id, $config['per_page'], $start);
        //$this->debug($data['listProducts']);
        foreach($data['listcate'] as $category) 
        {
            $product[] = $this->model_product->getproduct($category['cate_id'], 4);
            $listcago[$category['cate_id']] = $this->listcago($category['cate_id']);
        }
        
        $data['listall'] = array("listcagotop" => $listcago);
        $data['dataPage'] = array(
            'title' => $data['cateInfo']['cate_title'],
            'keywords' => $data['cateInfo']['cate_keys'],
            'description' => $data['cateInfo']['cate_des']
        );

        $data['template'] = 'product/index';
        
        $this->load->view("layout", $data);
    }

    public function cagorie()
    {
        $first = $this->uri->segment(1);
        $items = $this->uri->segment(2);
        $cutted = preg_replace("/tranh-/", "", $items);
        $data['result'] = $this->model_product->getsubrewrite($cutted);

        if ($data['result'] == NULL) {
            redirect(base_url());
        }
        
        $id = $data['result']['id'];
        
        $config['base_url'] = base_url() . $first . "/" . $items . "/";
        $config['total_rows'] = $this->model_product->count_all($id, 2);
        $config['per_page'] = 9;
        $config['uri_segment'] = 3;
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
        
        $this->load->library("pagination", $config);
        
        $start = (int) $this->uri->segment(3);
        
        $data['title'] = $data['result']['title'];
        $data['listintro'] = $this->listintro();
        $data['listcate'] = $this->listcate();
        $data['listcago'] = $this->model_product->listcago($data['result']['cate_id']);
        $data['listnews'] = $this->model_product->listnews($data['result']['cate_id']);
        $data['listproducts'] = $this->model_product->listall($data['result']['id'], $config['per_page'], $start, 2);
        
        foreach($data['listcate'] as $category)
        {
            $product[] = $this->model_product->getproduct($category['cate_id'], 4);
            $listcago[$category['cate_id']] = $this->listcago($category['cate_id']);
        }
        
        $data['listall'] = array("listcagotop" => $listcago);
        
        $this->load->view("categories/layout", $data);
    }

    public function available() {
        $data['title'] = 'Tranh có sẵn, tranh gạo việt';
        $data['listintro'] = $this->listintro();
        $data['listcate'] = $this->listcate();
        $data['results'] = $this->model_product->listavailable(30);
        $this->load->view("product/available/layout", $data);
    }

    public function view() {
        $id1 = $this->uri->segment(2);
        $id = array_pop(explode('-', $id1));
        $data['support'] = $this->support();
        $data['access'] = $this->access();
        $data['online'] = $this->online();
        $data['config'] = $this->config();
        $data['listcate'] = $this->listcate();
        $data['link'] = base_url() . uri_string() . ".html";
        $data['result'] = $this->model_product->getdata($id);
        //$this->debug($data['result']);
        if ($data['result'] == NULL) {
            redirect(base_url());
            exit();
        }
        $data['listintro'] = $this->listintro();
        $data['related'] = $this->model_product->related($id, $data['result']['cate_id']);
        $data['pronew'] = $this->model_product->listnew();
        //$this->debug($data['related']);
        $data['category'] = $this->model_product->category($data['result']['cate_id']);
        foreach ($data['listcate'] as $category) {
            $product[] = $this->model_product->getproduct($category['cate_id'], 4);
            $listcago[$category['cate_id']] = $this->listcago($category['cate_id']);
        }
        $data['listall'] = array("listcagotop" => $listcago);
        $data['title'] = $data['result']['pro_name'];
        //$data['rewrite'] = $data['catename']['cate_rewrite'];
        $this->load->view("product/detail/layout", $data);
    }

}
