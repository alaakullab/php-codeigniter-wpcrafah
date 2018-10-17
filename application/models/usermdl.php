<?php
class Usermdl extends CI_Model{

    

    public function save($table,$data){
    	$this->db->insert($table,$data);
    }
    
        public function get_by_id($id){
        $this->db->where('id', $id);
        return $this->db->get('tbl_user')->row_array();
     }
    
     

      public function get_by_user_id(){
        return $this->db->get('tbl_user')->result();
     }
    
     public function update($id, $data){
        $this->db->where('id', $id);
        $this->db->update('tbl_user', $data);
       }

     public function delete($id)
     {
        $this->db->where('id',$id);
        $this->db->delete('tbl_user');
     }
    
     public function count_rows_users($table) {
         
         
        return $this->db->count_all_results($table);
         }
     
            public function get($table)
        {
        	return $this->db->get($table)->result();
        }

         public function get_row($table,$where_column,$where_value)
        {
        	$this->db->where($where_column,$where_value);
        	return $this->db->get($table)->result();
        }


         public function get_name($table,$where_column,$where_value,$get_column)
        {
        	$this->db->select($get_column);
        	$this->db->where($where_column,$where_value);
        	return $this->db->get($table)->row_array();
        }

        public function count_rows($table) {
        return $this->db->count_all($table);
         }

       // Fetch data according to per_page limit.
        public function fetch_data($table,$limit, $page,$search_term='default') {
         
        $this->db->limit($limit,$page);
       // $query = $this->db->get();
            
           $this->db->order_by('id', 'desc');

     $this->db->select('*');
       $this->db->from('tbl_user');

            $this->db->group_start();
        $this->db->like('username',$search_term);
        $this->db->or_like('email',$search_term);
        $this->db->or_like('tell',$search_term);
        $this->db->or_like('addres',$search_term);
        $this->db->or_like('parent_name',$search_term);

                  $this->db->group_end();
            $query = $this->db->get();       

        if ($query->num_rows() > 0) {
                
        return $query->result();
        }
              
        
        }
            public function fetch_data_admin($table,$limit, $page,$search_term='default',$userID) {
         
        $this->db->limit($limit,$page);
       // $query = $this->db->get();
            
           $this->db->order_by('id', 'desc');

     $this->db->select('*');
       $this->db->from('tbl_user');
              $this->db->where('parentid',$userID);
                     $this->db->group_start();
        $this->db->like('username',$search_term);
        $this->db->or_like('email',$search_term);
        $this->db->or_like('tell',$search_term);
        $this->db->or_like('addres',$search_term);

                  $this->db->group_end();
            $query = $this->db->get();       

        if ($query->num_rows() > 0) {
                
        return $query->result();
        }
              
        
        }
    
    
        public function fetch_dataas() {
                return $this->db->get('tbl_user')->result();
              
        
        }
          public function getuserexle($userID)
        {
                       
                            $this->db->select('*');
        $this->db->from('tbl_user');
               $this->db->where('parentid',$userID);

                   $query = $this->db->get();   
                return $query->result();

                
        }
 
      public function fetch_dataas_admin() {
                return $this->db->get('tbl_user')->result();
              
        
        }
  
}