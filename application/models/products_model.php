<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}

	function get_all() {
		$this->db->select('id, name, description, price, picture');
		$query = $this->db->get('products');

		return $query->result_array();
	}
	
	function get_product($product_id) {
		$this->db->select('id, name, description, price, picture');
		$this->db->where('id', $product_id);
		$query = $this->db->get('products');

		return $query->row_array();
	}

	
	public function insert_product($data)
	{
		$this->db->insert('products', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	}

	public function update_product($product_id, $data)
	{
		$this->db->where('id', $product_id);
		$this->db->update('products', $data);
	}
	
	public function del_product($product_id)
	{
		$this->db->where('id', $product_id);
		$this->db->delete('products');
	}
}