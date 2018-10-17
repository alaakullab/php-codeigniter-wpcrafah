<?php
class Messegemdl extends CI_Model{

    

    public function save($table,$data){
    	$this->db->insert($table,$data);
    }
    
        public function get_by_id($id){
            $this->db->where('id', $id);
         //   $this->db->join('tbl_user', 'tbl_user.id = tbl_messages.senderid','left');

      return $this->db->get('tbl_messages')->row_array();
     }

      public function get_by_user_id(){
        return $this->db->get('tbl_user')->result();
     }
    
     public function update($id, $data){
        $this->db->where('id', $id);
        $this->db->update('tbl_messages', $data);
       }

     public function delete($id)
     {
        $this->db->where('id',$id);
        $this->db->delete('tbl_messages');
     }
     
            public function get($table)
        {
                $this->db->order_by('id', 'desc');
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
        public function fetch_datarec($table,$limit, $page,$search_term='default',$userID) {
         
        $this->db->limit($limit,$page);
       // $query = $this->db->get();
           $this->db->order_by('id', 'desc');
     $this->db->select('*');
       $this->db->from('tbl_messages');
          $this->db->where('reciverid',$userID);
         $this->db->where_not_in('senderid',$userID);
              $this->db->group_start();
          $this->db->like('title',$search_term);
        $this->db->or_like('sendername',$search_term);
        $this->db->or_like('message',$search_term);
        $this->db->or_like('email',$search_term);
        $this->db->or_like('sendername',$search_term);
                  $this->db->group_end();
                
            $query = $this->db->get();       

        if ($query->num_rows() > 0) {
                
        return $query->result();
        }
              
        
        }
    
        public function fetch_datasend($table,$limit, $page,$search_term='default',$userID) {
         
        $this->db->limit($limit,$page);
       // $query = $this->db->get();
           $this->db->order_by('id', 'desc');
     $this->db->select('*');
       $this->db->from('tbl_messages');
        $this->db->where('senderid',$userID);
            $this->db->where_not_in('reciverid',$userID);
              $this->db->group_start();
          $this->db->like('title',$search_term);
        $this->db->or_like('sendername',$search_term);
        $this->db->or_like('message',$search_term);
        $this->db->or_like('email',$search_term);
        $this->db->or_like('sendername',$search_term);
                  $this->db->group_end();
                
            $query = $this->db->get();       

        if ($query->num_rows() > 0) {
                
        return $query->result();
        }
              
        
        }
    
    
    
        public function fetch_dataas() {
                return $this->db->get('tbl_messages')->result();
              
        
        }
      
            public function getmsg($table,$userID)
        {
          
                
                
                            $this->db->select('*');
        $this->db->from($table);
                          $this->db->order_by('id', 'desc');
                 $this->db->where('reciverid',$userID);
                  $this->db->where('Isread',0);
         $this->db->where_not_in('senderid',$userID);
                
                   $query = $this->db->get();   
                return $query->result();
                
                
                
                
        }
                public function getmsgexle($userID)
        {
          
                
                
                            $this->db->select('*');
        $this->db->from('tbl_messages');
                          $this->db->order_by('id', 'desc');
                 $this->db->where('reciverid',$userID);

                   $query = $this->db->get();   
                return $query->result();
  
                
        }
         public function getsendexle($userID)
        {
                       
                            $this->db->select('*');
        $this->db->from('tbl_messages');
                 $this->db->where('senderid',$userID);

                   $query = $this->db->get();   
                return $query->result();

                
        }
 
    
            public function fetch_name($name) {
            
  
           $this->db->select('*');
        $this->db->from('tbl_messages');
         $this->db->order_by('mail_status', 'desc');
         $this->db->limit('5');
                   $query = $this->db->get();   
                return $query->result();
              
        }
  
}