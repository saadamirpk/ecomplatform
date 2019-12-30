<?php
class Product_model extends CI_Model {
  public function __construct()	{
    $this->load->database();
  }

  public function get_products() {
      $query = $this->db->query("SELECT * FROM products");
      return $query;
  }

  public function get_category($cat) {
      $query = $this->db->query("SELECT * FROM products WHERE category='$cat'");
      return $query;
  }

}
