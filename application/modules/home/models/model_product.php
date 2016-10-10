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
		public function listproduct($cagoid = null, $limit = 6){
			if($cagoid){
				$this->db->where('cago_id',$cagoid);
			}
			$this->db->limit($limit);
			return $this->db->get($this->_table)->result_array();
		}
		public function related($id,$cateid){
			$this->db->where("cate_id",$cateid);
			$this->db->where("pro_id !=",$id);
			$this->db->order_by("pro_id","random");
			$this->db->limit(15);
			return $this->db->get($this->_table)->result_array();
		}
	}