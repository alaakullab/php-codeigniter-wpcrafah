<?php
class Subscribersmdl extends CI_Model{

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
        $this->db->where('sub_id', $id);
        return $this->db->get('subscriber_tbl')->row_array();
     }
    
    
       public function get_by_idall(){
	return $this->db->get('subscriber_tbl')->result();

     }
    
    
    
    
    // استعلام خصائص النماذج البيانات
    
 
       public function get_by_reg_id(){
	return $this->db->get('reg_status_tbl')->result();

     }
       public function get_by_soci_id(){
        return $this->db->get('social_status_tbl')->result();
     }
       public function get_by_eco_id(){
        return $this->db->get('eco_situation_tbl')->result();
     }
           public function get_by_work_id(){
        return $this->db->get('status_work_tbl')->result();
     }
         public function get_by_workp_id(){

             return $this->db->get('sub_workplace_tbl')->result();
     }
         public function get_by_edu_id(){
        return $this->db->get('edu_level_tbl')->result();
     }
  
       public function get_by_dis_id(){
        return $this->db->get('disability_tbl')->result();
     }
    
    // نهاية استعلام خصائص النماذج البيانات
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     public function update($id, $data){
        $this->db->where('sub_id', $id);
        $this->db->update('subscriber_tbl', $data);
       }

     public function delete($id)
     {
        $this->db->where('sub_id',$id);
        $this->db->delete('subscriber_tbl');
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
           $this->db->order_by('sub_id', 'desc');
        $this->db->select('*');
        $this->db->from('subscriber_tbl');
            $this->db->join('tbl_user', 'tbl_user.id = subscriber_tbl.user_id','left');
         
            $this->db->group_start();
        $this->db->like('sub_fulllname',$search_term);
        $this->db->or_like('full_address',$search_term);
        $this->db->or_like('sub_tel',$search_term);
        $this->db->or_like('id_number',$search_term);
        $this->db->or_like('sub_phone',$search_term);
        $this->db->or_like('sub_no_logistics',$search_term);
         $this->db->or_like('username',$search_term);
            
        //  $this->db->where('substring(sub_fulllname,1,1)='.substr($search_term,0,1). ' ');
       // $this->db->or_like('reg_date',$search_term);
      //  $this->db->or_like('sub_age',$search_term);
                  $this->db->group_end();
            $query = $this->db->get();       

        if ($query->num_rows() > 0) {
            
           
        return $query->result();
        }
              
        }
       
    
    
          public function fetch_data_admin($table,$limit, $page,$search_term='default',$userID) {
         
        $this->db->limit($limit,$page);
       // $query = $this->db->get();
           $this->db->order_by('sub_id', 'desc');
        $this->db->select('*');
        $this->db->from('subscriber_tbl');
            $this->db->join('tbl_user', 'tbl_user.id = subscriber_tbl.user_id','left');
              $this->db->where('user_id',$userID);
            $this->db->group_start();
        $this->db->like('sub_fulllname',$search_term);
        $this->db->or_like('full_address',$search_term);
        $this->db->or_like('sub_tel',$search_term);
        $this->db->or_like('id_number',$search_term);
        $this->db->or_like('sub_phone',$search_term);
        $this->db->or_like('sub_no_logistics',$search_term);
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
           $this->db->order_by('sub_id', 'desc');
        $this->db->select('*');
        $this->db->from('subscriber_tbl');
            $this->db->join('tbl_user', 'tbl_user.id = subscriber_tbl.user_id','left');
              $this->db->where('user_id',$userpaid);
            $this->db->group_start();
        $this->db->like('sub_fulllname',$search_term);
        $this->db->or_like('full_address',$search_term);
        $this->db->or_like('sub_tel',$search_term);
        $this->db->or_like('id_number',$search_term);
        $this->db->or_like('sub_phone',$search_term);
        $this->db->or_like('sub_no_logistics',$search_term);
         $this->db->or_like('username',$search_term);
            
    
       
                  $this->db->group_end();
            $query = $this->db->get();       

        if ($query->num_rows() > 0) {
            
           
        return $query->result();
        }
              
        }
    
              public function fetch_dataas() {
                   $this->db->select('*');
        $this->db->from('subscriber_tbl');
                        $this->db->join('tbl_user', 'tbl_user.id = subscriber_tbl.user_id','left');
                   $query = $this->db->get();   
                return $query->result();
        }
                 public function fetch_dataas_users($userpaid) {
                   $this->db->select('*');
        $this->db->from('subscriber_tbl');
                        $this->db->join('tbl_user', 'tbl_user.id = subscriber_tbl.user_id','left');
                     $this->db->where('user_id',$userpaid);
                   $query = $this->db->get();   
                return $query->result();
        }
               public function fetch_dataas_admin($userID) {
                   $this->db->select('*');
        $this->db->from('subscriber_tbl');
                        $this->db->join('tbl_user', 'tbl_user.id = subscriber_tbl.user_id','left');
                     $this->db->where('user_id',$userID);
                   $query = $this->db->get();   
                return $query->result();
        }
    
        public function fetch_name($name) {
            
            $this->db->select('sub_tel');
            $this->db->limit(3);
            $this->db->like('sub_tel',$name);
        return $this->db->get('subscriber_tbl')->result();
     
        }
    
    
     public function fetch_users() {
                   $this->db->select('*');
        $this->db->from('tbl_user');
                 $query = $this->db->get();   
                return $query->result();
        }
    
  
}