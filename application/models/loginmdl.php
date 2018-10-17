<?php
	
	 class LoginMdl extends CI_Model{

       // Model login   
         
     public function logmesuper($username, $password){
     	$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('tbl_user')->row_array();
     }
     }
  