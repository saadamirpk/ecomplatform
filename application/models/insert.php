<?php
class member_model extends CI_model(){
    
    function insert($formArray){
    $this->db->insert('login',$formArray);    
    }
}
?>