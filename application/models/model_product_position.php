<?php
class Model_product_position extends CI_Model

{
	protected $_table = "tbl_product_position";

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function add($data)
	{
		return $this->db->insert($this->_table, $data);
	}

	public function update($data, $id)
	{
		$this->db->where("id", $id);
		$this->db->update($this->_table, $data);
	}

	public function getListByProduct($productId)
	{
		$this->db->where("product_id", $productId);
		return $this->db->get($this->_table)->result_array();
	}
    
    public function getListProductByPosition($positionId)
	{
		$this->db->where("position_id", $positionId);
		return $this->db->get($this->_table)->result_array();
	}

	public function del($id)
	{
		$this->db->where("id", $id);
		return $this->db->delete($this->_table);
	}

	public function delByProduct($productId)
	{
		$this->db->where("product_id", $productId);
		return $this->db->delete($this->_table);
	}
}

?>