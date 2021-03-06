<?php
	class Model_home extends CI_Model{
		protected $_intro = "tbl_intro";
		protected $_table = "tbl_students";
		protected $_educa = "tbl_education";
		protected $_contact = "tbl_contact_info";
		protected $_usercontact = "tbl_contact";
		protected $_article = "tbl_articles";
		protected $_subject = "tbl_subjects";
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function intro(){
			return $this->db->get($this->_intro)->result_array();
		}
		public function subjects(){
			$this->db->order_by("subject_order","ASC");
			return $this->db->get($this->_subject)->result_array();
		}
		public function random_student(){
			$this->db->where("student_status",1);
			$this->db->order_by("student_id","RANDOM");
			$this->db->limit(3);
			return $this->db->get($this->_table)->result_array();	
		}
		public function count_all_student(){
			$this->db->where("student_status","1");
			return $this->db->count_all_results($this->_table);
		}
		public function listall_student($off,$start){
			$this->db->where("student_status","1");
			$this->db->order_by("student_id","RANDOM");
			$this->db->limit($off,$start);
			return $this->db->get($this->_table)->result_array();
		}
		public function education(){
			$this->db->where("edu_id","1");
			return $this->db->get($this->_educa)->row_array();
		}
		public function contact(){
			$this->db->where("contact_id","1");
			return $this->db->get($this->_contact)->row_array();
		}
		public function insert_contact($data){
			$this->db->insert($this->_usercontact,$data);
		}
		public function add($data){
			$this->db->insert($this->_table,$data);
		}
	}