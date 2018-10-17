<?php
class Profilmdl extends CI_Model{
    
    public function doLogin($table,$username,$password){
		 $sql = "select * from $table where username = ".$this->db->escape($username)." and password = ".$this->db->escape($password);
         $query = $this->db->query($sql);
        if($query->num_rows() > 0)
        {
          return $query->row_array();
        }
        else { return null; }
    }

    
        public function modifysupermdl($id, $data){
        $this->db->where('id', $id);
        $this->db->update('tbl_user', $data); }    

    
     
         public function get_by_id($id){
          $this->db->where('id', $id);
	return $this->db->get('tbl_user')->row_array();

     }
  
    
    
}
