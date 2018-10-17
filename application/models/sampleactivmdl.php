<?php
class Sampleactivmdl extends CI_Model{

 /* public function listCat(){
  	return $this->db->get('tbl_category')->result();
  	  }
*/
public function doLogin($table,$username,$password){
		 $sql = "select * from $table where username = ".$this->db->escape($username)." and password = ".$this->db->escape($password);
         $query = $this->db->query($sql);
        if($query->num_rows() > 0)
        {
          return $query->row_array();
        }
        else { return null; }
    }

    public function save($table,$data){
    	$this->db->insert($table,$data);
    }
    
        public function get_by_id($id){
        $this->db->where('activ_id', $id);
        return $this->db->get('activites_model_tbl')->row_array();
     }


    /* public function update($table,$where_column,$data)
     {
      $this->db->where($where_column);
      $this->db->update($table,$data);
 }*/
     public function update($id, $data){
        $this->db->where('activ_id', $id);
        $this->db->update('activites_model_tbl', $data);
       }

     public function delete($id)
     {
        $this->db->where('activ_id',$id);
        $this->db->delete('activites_model_tbl');
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
           $this->db->order_by('activ_id', 'desc');
     $this->db->select('*');
       $this->db->from('activites_model_tbl');
$this->db->join('tbl_user', 'tbl_user.id = activites_model_tbl.user_id','left');   
                     $this->db->group_start();
        $this->db->like('activ_discrip',$search_term);
        $this->db->or_like('activ_place',$search_term);
        $this->db->or_like('activ_duration',$search_term);
        $this->db->or_like('activ_organisers',$search_term);
        $this->db->or_like('activ_notes',$search_term);
         $this->db->or_like('username',$search_term);

                  $this->db->group_end();
            $query = $this->db->get();       

        if ($query->num_rows() > 0) {
        return $query->result();
        }
              
        
        }
    
           public function fetch_data_admin($table,$limit, $page,$search_term='default',$userID) {
         
        $this->db->limit($limit,$page);
       // $query = $this->db->get();
           $this->db->order_by('activ_id', 'desc');
     $this->db->select('*');
       $this->db->from('activites_model_tbl');
               $this->db->join('tbl_user', 'tbl_user.id = activites_model_tbl.user_id','left');
              $this->db->where('user_id',$userID);
                     $this->db->group_start();
        $this->db->like('activ_discrip',$search_term);
        $this->db->or_like('activ_place',$search_term);
        $this->db->or_like('activ_duration',$search_term);
        $this->db->or_like('activ_organisers',$search_term);
        $this->db->or_like('activ_notes',$search_term);
         $this->db->or_like('username',$search_term);

                  $this->db->group_end();
            $query = $this->db->get();       

        if ($query->num_rows() > 0) {
        return $query->result();
        }
              
        
        }
    
    
           public function fetch_data_users($table,$limit, $page,$search_term='default',$userpaid) {
         
        $this->db->limit($limit,$page);
       // $query = $this->db->get();
           $this->db->order_by('activ_id', 'desc');
     $this->db->select('*');
       $this->db->from('activites_model_tbl');
               $this->db->join('tbl_user', 'tbl_user.id = activites_model_tbl.user_id','left');
              $this->db->where('user_id',$userpaid);
                     $this->db->group_start();
        $this->db->like('activ_discrip',$search_term);
        $this->db->or_like('activ_place',$search_term);
        $this->db->or_like('activ_duration',$search_term);
        $this->db->or_like('activ_organisers',$search_term);
        $this->db->or_like('activ_notes',$search_term);
         $this->db->or_like('username',$search_term);

                  $this->db->group_end();
            $query = $this->db->get();       

        if ($query->num_rows() > 0) {
        return $query->result();
        }
              
        
        }
        public function fetch_dataas() {
                return $this->db->get('activites_model_tbl')->result();

              
        
        }
          public function fetch_dataas_admin($userID) {
                    $this->db->select('*');
        $this->db->from('activites_model_tbl');
                        $this->db->join('tbl_user', 'tbl_user.id = activites_model_tbl.user_id','left');
                     $this->db->where('user_id',$userID);
                   $query = $this->db->get();   
                return $query->result();
          

              
        
        }
      public function fetch_dataas_users($userpaid) {
                    $this->db->select('*');
        $this->db->from('activites_model_tbl');
                        $this->db->join('tbl_user', 'tbl_user.id = activites_model_tbl.user_id','left');
                     $this->db->where('user_id',$userpaid);
                   $query = $this->db->get();   
                return $query->result();
          

              
        
        }
    
  
}