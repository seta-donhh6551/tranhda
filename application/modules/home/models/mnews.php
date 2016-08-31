<?php
	class Mnews extends CI_Model{
		protected $_news = "tbl_news";
		protected $_category = "tbl_category";
		protected $_categorie = "tbl_categorie";
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function news(){
			$this->db->order_by("news_id","DESC");
			$this->db->limit(6);
			return $this->db->get($this->_news)->result_array();
		}
		public function listnews($id1,$id2){
			$this->db->where("cate_id",$id1);
			$this->db->where("news_id !=",$id2);
			$this->db->limit(5);
			return $this->db->get($this->_news)->result_array();
		}
		public function randomcago($limit){
			$this->db->join($this->_category,$this->_category.".cate_id = ".$this->_categorie.".cate_id");
			$this->db->limit($limit);
			return $this->db->get($this->_categorie)->result_array();
		}
		public function getnews($id,$off,$start){
			$this->db->where("cate_id",$id);
			$this->db->limit($off,$start);
			return $this->db->get($this->_news)->result_array();
		}
		public function count_all(){
			return $this->db->count_all($this->_news);
		}
		public function list_all($off,$start){
			$this->db->order_by("news_id","DESC");
			$this->db->limit($off,$start);
			return $this->db->get($this->_news)->result_array();
		}
		public function count_all_news(){
			return $this->db->count_all($this->_news);
		}
		public function getcate($id){
			$this->db->where("cate_id",$id);
			$data = $this->db->get("news_type")->row_array();
			return $data;
		}
		public function lienquan($id1,$id2){
			$this->db->where("cate_id",$id1);
			$this->db->where("news_id !=",$id2);
			$this->db->order_by("news_id","DESC");
			$this->db->limit(5);
			return $this->db->get($this->_news)->result_array();
		}
		public function detail($id){
			$this->db->where("news_id",$id);
			return $this->db->get($this->_news)->row_array();
		}
	}