<?php
  	class Model_position extends CI_Model{
		protected $_table = "tbl_position";
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function listall($off,$start){
			$this->db->limit($off,$start);
			return $this->db->get($this->_table)->result_array();
		}
		public function count_all(){
			return $this->db->count_all($this->_table);
		}
		public function add($data){
			return $this->db->insert($this->_table,$data);
		}
		public function update($data,$id){
			$this->db->where("id",$id);
			$this->db->update($this->_table,$data);
		}
		public function getdata($id){
			$this->db->where("id",$id);
			return $this->db->get($this->_table)->row_array();
		}
		public function del($id){
			$this->db->where("id",$id);
			return $this->db->delete($this->_table);
		}
	}
?>