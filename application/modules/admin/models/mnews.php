<?php
	class Mnews extends CI_Model{
		protected $_table="tbl_news";
		protected $_cate="tbl_category";
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function check_news($news,$id=""){
			if($id != ""){
				$this->db->where("news_id !=",$id);
			}
			$this->db->where("news_title",$news);
			$query=$this->db->get($this->_table);
			if($query->num_rows() == 0){
				return TRUE;
			}else{
				return FALSE;
			}
		}
		public function listall($off,$start){
			$this->db->from($this->_table);
			$this->db->join("tbl_category","tbl_category.cate_id = tbl_news.cate_id");
			$this->db->order_by("news_id","DESC");
			$this->db->limit($off,$start);
			return $this->db->get()->result_array();
		}
		public function search_ajax($name){
			$this->db->like("news_title",$name);
			$this->db->limit(4);
		    return $this->db->get($this->_table)->result_array();
		}
		public function count_all(){
			$this->db->from($this->_table);
			$this->db->join("tbl_category","tbl_category.cate_id = tbl_news.cate_id");
			return $this->db->count_all_results();
		}
		public function add_news($data){
			$this->db->set('news_date', 'now()', FALSE);
			$this->db->insert($this->_table,$data);
		}
		public function del_news($id){
			$this->db->where("news_id",$id);
			$this->db->delete($this->_table);
		}
		public function get_newsdata($id){
			$this->db->where("news_id",$id);
			$query = $this->db->get($this->_table);
			return $query->row_array();
		}
		public function update($data,$id){
			$this->db->where("news_id",$id);
			$this->db->set('news_date', 'now()', FALSE);
			$this->db->update($this->_table,$data);
		}
		public function listcate(){
			return $this->db->get($this->_cate)->result_array();
		}
	}