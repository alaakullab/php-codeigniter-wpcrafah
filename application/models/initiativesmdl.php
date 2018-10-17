<?php
class Initiativesmdl extends CI_Model{

    

    public function save($table,$data){
    	$this->db->insert($table,$data);
    }
    
        public function get_by_id($id){
        $this->db->where('initiat_id', $id);
        return $this->db->get('initiatives_model_tbl')->row_array();
     }

    /* public function update($table,$where_column,$data)
     {
      $this->db->where($where_column);
      $this->db->update($table,$data);
     }*/
     public function update($id, $data){
        $this->db->where('initiat_id', $id);
        $this->db->update('initiatives_model_tbl', $data);
       }

     public function delete($id)
     {
        $this->db->where('initiat_id',$id);
        $this->db->delete('initiatives_model_tbl');
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
           $this->db->order_by('initiat_id', 'desc');
     $this->db->select('*');
       $this->db->from('initiatives_model_tbl');
                 $this->db->join('tbl_user', 'tbl_user.id = initiatives_model_tbl.user_id','left');
                     $this->db->group_start();
        $this->db->like('initiat_title',$search_term);
        $this->db->or_like('initiat_activ',$search_term);
        $this->db->or_like('initiat_sponsor',$search_term);
        $this->db->or_like('initiat_place',$search_term);
        $this->db->or_like('initiat_parici',$search_term);
         $this->db->or_like('username',$search_term);

                  $this->db->group_end();
            $query = $this->db->get();       

        if ($query->num_rows() > 0) {
                
        return $query->result();
        }
              
        
        }
    
    
       public function fetch_data_admin($table,$limit, $page,$search_term='default',$userID) {
         
        $this->db->limit($limit,$page);
           $this->db->order_by('initiat_id', 'desc');
     $this->db->select('*');
       $this->db->from('initiatives_model_tbl');
                          $this->db->join('tbl_user', 'tbl_user.id = initiatives_model_tbl.user_id','left');

                      $this->db->where('user_id',$userID);

                     $this->db->group_start();
        $this->db->like('initiat_title',$search_term);
        $this->db->or_like('initiat_activ',$search_term);
        $this->db->or_like('initiat_sponsor',$search_term);
        $this->db->or_like('initiat_place',$search_term);
        $this->db->or_like('initiat_parici',$search_term);
         $this->db->or_like('username',$search_term);

                  $this->db->group_end();
            $query = $this->db->get();       

        if ($query->num_rows() > 0) {
                
        return $query->result();
        }
              
        
        }
    

    
       public function fetch_data_users($table,$limit, $page,$search_term='default',$userpaid) {
         
        $this->db->limit($limit,$page);
           $this->db->order_by('initiat_id', 'desc');
     $this->db->select('*');
       $this->db->from('initiatives_model_tbl');
                          $this->db->join('tbl_user', 'tbl_user.id = initiatives_model_tbl.user_id','left');

                      $this->db->where('user_id',$userpaid);

                     $this->db->group_start();
        $this->db->like('initiat_title',$search_term);
        $this->db->or_like('initiat_activ',$search_term);
        $this->db->or_like('initiat_sponsor',$search_term);
        $this->db->or_like('initiat_place',$search_term);
        $this->db->or_like('initiat_parici',$search_term);
         $this->db->or_like('username',$search_term);

                  $this->db->group_end();
            $query = $this->db->get();       

        if ($query->num_rows() > 0) {
                
        return $query->result();
        }
              
        
        }
        public function fetch_dataas() {
                return $this->db->get('initiatives_model_tbl')->result();
              
        
        }
       public function fetch_dataas_admin($userID) {
                    $this->db->select('*');
        $this->db->from('initiatives_model_tbl');
                        $this->db->join('tbl_user', 'tbl_user.id = initiatives_model_tbl.user_id','left');
                     $this->db->where('user_id',$userID);
                   $query = $this->db->get();   
                return $query->result();

        }
    
      public function fetch_dataas_users($userID) {
                    $this->db->select('*');
        $this->db->from('initiatives_model_tbl');
                        $this->db->join('tbl_user', 'tbl_user.id = initiatives_model_tbl.user_id','left');
                     $this->db->where('user_id',$userID);
                   $query = $this->db->get();   
                return $query->result();

        }
    
    
}