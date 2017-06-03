<?php
	class Model_product extends CI_Model{
		protected $_table = "tbl_products";
		protected $_category = "tbl_category";
		protected $_categorie = "tbl_categorie";
		protected $_news = "tbl_news";
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function getdata($id){
			$this->db->where("pro_id",$id);
			return $this->db->get($this->_table)->row_array();
		}
		public function getrewrite($id){
			$this->db->where("cate_rewrite",$id);
			return $this->db->get($this->_category)->row_array();
		}
		public function getsubrewrite($id){
			$this->db->join($this->_category,$this->_category.".cate_id = ".$this->_categorie.".cate_id");
			$this->db->where($this->_categorie.".rewrite",$id);
			return $this->db->get($this->_categorie)->row_array();
		}
		public function getcate($id){
			$this->db->where("cate_id",$id);
			return $this->db->get($this->_category)->row_array();
		}
		public function count_all($id,$type=1){
			if($type == 1){
				$this->db->where("cate_id",$id);
			}else{
				$this->db->where("cago_id",$id);
			}
			return $this->db->count_all_results($this->_table);
		}
		public function listproduct($cagoid = null, $limit = 6){
            if($cagoid){
                $this->db->where("cago_id",$cagoid);
            }
            
			$this->db->limit($limit);
            
			return $this->db->get($this->_table)->result_array();
		}
        public function listavailable($limit){
			$this->db->where("pro_status",1);
			$this->db->limit($limit);
			return $this->db->get($this->_table)->result_array();
		}
		public function listall($id, $off, $start, $type=1){
            $this->db->select('tbl_products.*,tbl_categorie.name');
			if($type == 1){
				$this->db->where("tbl_products.cate_id",$id);
			}else{
				$this->db->where("tbl_products.cago_id",$id);
			}
            $this->db->join('tbl_categorie', 'tbl_categorie.id = tbl_products.cago_id', 'left');
			$this->db->limit($off, $start);
            $this->db->order_by("tbl_products.cate_id","asc");
            
			return $this->db->get($this->_table)->result_array();
		}
		public function listcago($id){
			$this->db->where("cate_id",$id);
			return $this->db->get($this->_categorie)->result_array();
		}
		public function listnews($id){
			$this->db->where("cate_id",$id);
			return $this->db->get($this->_news)->result_array();
		}
		public function listnew(){
			$this->db->order_by("pro_id","random");
			$this->db->limit(15);
			return $this->db->get($this->_table)->result_array();
		}
		public function getproduct($id,$limit){
			$this->db->where("cate_id",$id);
			$this->db->order_by("pro_order","desc");
			$this->db->limit($limit);
			return $this->db->get($this->_table)->result_array();
		}
		public function count_all_search($key){
			$this->db->like('pro_name',$key); 
			return $this->db->count_all_results($this->_table);
		}
		public function search($key,$off,$start){
			$this->db->like('pro_name',$key); 
			$this->db->limit($off,$start);
			return $this->db->get($this->_table)->result_array();
		}
		public function category($id){
			$this->db->where("cate_id",$id);
			return $this->db->get($this->_category)->row_array();
		}
		public function related($id,$cateid){
			$this->db->where("cate_id",$cateid);
			$this->db->where("pro_id !=",$id);
			$this->db->order_by("pro_id","random");
			$this->db->limit(5);
			return $this->db->get($this->_table)->result_array();
		}
	}