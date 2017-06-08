<?php

class product extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("model_product");
        $this->load->model("model_position");
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
        $config['next_link'] = "Tiếp";
        $config['prev_link'] = "Trước";
        $config['first_link'] = "Trang đầu";
        $config['last_link'] = "Trang cuối";
        $config['cur_tag_open'] = '<strong class="pagecurrent">';
        $config['cur_tag_close'] = '</strong>';
        
        $this->load->library("pagination", $config);
        
        $start = (int)$this->uri->segment(2, 0);
        
        $data['support'] = $this->support();
        $data['config'] = $this->config();
        $data['listcate'] = $this->listcate();
        $data['link'] = base_url().uri_string().".html";
        $data['listCategories'] = $this->listcago(null, 10);
        $data['listPositions'] = $this->model_position->listall(10, 0);
        
        $data['listProducts'] = $this->model_product->listall($id, $config['per_page'], $start);
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

    public function view()
    {
        $item = $this->uri->segment(1);
        
        $id = array_pop(explode('-', $item));
        
        $data['support'] = $this->support();
        $data['config'] = $this->config();
        $data['listcate'] = $this->listcate();
        $data['link'] = base_url() . uri_string() . ".html";
        $data['result'] = $this->model_product->getdata($id);
        if ($data['result'] == null) {
            redirect(base_url());
        }
        
        switch($data['result']['cago_id']){
            case "1" : $data['galleryType'] = "Tranh đá quý";
                $data['madeIn'] = "Lục Yên - Yên Bái";
                $data['material'] = "Đá quý";
                break;
            case "2" : $data['galleryType'] = "Tranh gạo";
                $data['madeIn'] = "<a href='http://tranhgaoviet.com' target='_blank'>Tranh Gạo Việt</a>";
                $data['material'] = "Gạo rang";
                break;
            case "3" : $data['galleryType'] = "Tranh cát";
                $data['madeIn'] = "<a href='http://tranhcathanoi.com/' target='_blank'>Tranh Cát Hà Nội</a>";
                $data['material'] = "Hạt cát";
                break;
            default : $data['galleryType'] = "Tranh đá quý";
                $data['madeIn'] = "Lục Yên - Yên Bái";
                 $data['material'] = "Đá quý";
                break;
        }
        
        $data['listintro'] = $this->listintro();
        $data['relatedProducts'] = $this->model_product->related($id, $data['result']['cate_id']);
        $data['pronew'] = $this->model_product->listnew();
        $data['category'] = $this->model_product->category($data['result']['cate_id']);
        
        $data['dataPage'] = array(
            'title' => $data['galleryType'].' - '.$data['result']['pro_name'],
            'keywords' => $data['result']['pro_keys'],
            'description' => $data['result']['pro_des']
        );
        
        $data['template'] = 'product/detail';
        
        $this->load->view("layout", $data);
    }
    
    public function sales()
    {
        $items = $this->uri->segment(1);
        
        $config['base_url'] = base_url().$items."/";
        $config['total_rows'] = $this->model_product->countAllProductSales();
        $config['per_page'] = 15;
        $config['uri_segment'] = 2;
        $config['next_link'] = "Tiếp";
        $config['prev_link'] = "Trước";
        $config['first_link'] = "Trang đầu";
        $config['last_link'] = "Trang cuối";

        $config['cur_tag_open'] = '<strong class="pagecurrent">';
        $config['cur_tag_close'] = '</strong>';
        
        $this->load->library("pagination", $config);
        
        $start = (int)$this->uri->segment(2, 0);
        
        $data['support'] = $this->support();
        $data['config'] = $this->config();
        $data['listcate'] = $this->listcate();
        $data['link'] = base_url().uri_string().".html";
        $data['listCategories'] = $this->listcago(null, 10);
        $data['listPositions'] = $this->model_position->listall(10, 0);
        
        $data['listProducts'] = $this->model_product->getListProductSales($config['per_page'], $start);
        
        $data['dataPage'] = array(
            'title' => 'Sản phẩm đang khuyến mãi tại Tranh Đá Việt',
            'keywords' => 'Khuyến mãi, Giảm giá, Sales',
            'description' => 'Những sản phẩm đang khuyến mãi tại Tranh Đá Việt'
        );

        $data['template'] = 'product/sales';
        
        $this->load->view("layout", $data);
    }

}
