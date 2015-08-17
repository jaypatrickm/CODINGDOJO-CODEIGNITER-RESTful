<?php
class product extends CI_Model
{
	function get_all_products()
	{
		return $this->db->query("SELECT * FROM products")->result_array();
	}
	function get_product_by_id($product_id)
	{
		return $this->db->query("SELECT * FROM products WHERE id = ?", array($product_id))->row_array();
	}
	function add_product($product_values)
	{
		$query = "INSERT INTO products (name, description, price, created_at, updated_at) VALUES (?,?,?, NOW(), NOW())";
		return $this->db->query($query, $product_values);
	}
	function update_product($product_id, $product_updates)
	{	
		$where = "id = ". $product_id; 
		return $this->db->update('products', $product_updates, $where);
	}
	function destroy_product($product_id)
	{
		$query = "DELETE FROM products WHERE products.id = $product_id";
		return $this->db->query($query);
	}
}
?>