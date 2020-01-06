<?php
class memberAccount_model extends CI_model{
    
    public function enter($formArray){
        $this->load->database();
        $this->db->insert("login",$formArray);
    }
}
?>