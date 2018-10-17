<?php
class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		//$this->load->helper('url');

		$this->load->model('Subscribersmdl');
        $this->load->model('Sampleactivmdl');
        $this->load->model('Initiativesmdl');
        $this->load->model('Usermdl');
        $this->load->model('Messegemdl');
       	$this->load->library('pagination');
		$this->_init();
	}

	private function _init()
	{
		$this->output->set_title("لوحة التحكم");
                    $userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
		$this->output->set_template( 'theme');
	}
    


	public function index()
	{
		$this->output->append_title("الرئيسية");
                    $userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
		$this->load->view('super/pages/index',$data);

	}
    


    
     public function imggallery(){
         $this->output->append_title("إدارة الصور - عرض الصور");
                             $userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
        $data['rec'] = $this->Usermdl->get_by_user_id();
         
       	$this->load->view('super/pages/nusers/gallery',$data);
	}
     public function Subscribersusers(){
         $this->output->append_title("إدارة المشتركين - عرض المشتركين");
        $data['rec'] = $this->Usermdl->get_by_user_id();
       	$this->load->view('super/pages/Subscribers/users',$data);
	}

     public function getdata($name = '')
   {
      // Get data from db 
    $data1['ajaxdata'] = $this->Subscribersmdl->fetch_name($name);
        $data1['ajaxdata'] = json_encode($data1['ajaxdata']);
     echo json_encode($data1['ajaxdata']);
      // Pass data to view
   //  $this->load->view('super/pages/Subscribers/list', $data);


   }
    
    
    public function Subscriberslist(){
           if(@$_SESSION['adminisread'] == 2){
         $this->output->append_title("إدارة المشتركين - عرض المشتركين");
                                   $userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
        $search_term = htmlentities($this->input->post('search'));
         $search_term = htmlentities($this->input->post('searchName'));
        $data['rex'] = $this->Subscribersmdl->fetch_dataas();
             
        $data['rexs'] = $this->Subscribersmdl->fetch_users();
          $data['recuser'] = $this->Usermdl->get_by_user_id();
        $config = array();
          $config["base_url"] = base_url() . "index.php/home/Subscriberslist";
          $count = $this->Subscribersmdl->count_rows('subscriber_tbl');
          $config["total_rows"] = $count; // 107
          $config["per_page"] =6;
          $config['use_page_numbers'] = FALSE;
          $config['num_links'] = $count;
          $config['cur_tag_open'] = '&nbsp;<a class="current">';
          $config['cur_tag_close'] = '</a>';
          $config['next_link'] = '<i class="ace-icon fa fa-angle-double-left"></i>';
          $config['prev_link'] = '<i class="ace-icon fa fa-angle-double-right"></i>';

          $this->pagination->initialize($config);
          if($this->uri->segment(3)){
          $page = ($this->uri->segment(3)) ;
          }
            else{
          $page = 0;
          }
           $search_term = $this->input->post('search');
     $data['results'] = $this->Subscribersmdl->fetch_data('subscriber_tbl',$config["per_page"], $page,$search_term );

        $str_links = $this->pagination->create_links();
          $data['links'] = explode('&nbsp;',$str_links );
        $this->load->view('super/pages/Subscribers/list',$data);
           }
	}
        
    public function Subscriberslistadmin(){
         $this->output->append_title("إدارة المشتركين - عرض المشتركين");
                            $userID = $this->session->userdata('adminid');
        $data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
         $userID = $this->session->userdata('adminid');
      $userpaid = $this->session->userdata('adminid');
        
        $search_term = htmlentities($this->input->post('search'));
         $search_term = htmlentities($this->input->post('searchName'));
        $data['rex'] = $this->Subscribersmdl->fetch_dataas_admin($userID);
         
        $data['rexs'] = $this->Subscribersmdl->fetch_users();
          $data['recuser'] = $this->Usermdl->get_by_user_id();
        $config = array();
          $config["base_url"] = base_url() . "index.php/home/Subscriberslistadmin";
          $count = $this->Subscribersmdl->count_rows('subscriber_tbl');
          $config["total_rows"] = $count; // 107
          $config["per_page"] =6;
          $config['use_page_numbers'] = FALSE;
          $config['num_links'] = $count;
          $config['cur_tag_open'] = '&nbsp;<a class="current">';
          $config['cur_tag_close'] = '</a>';
          $config['next_link'] = '<i class="ace-icon fa fa-angle-double-left"></i>';
          $config['prev_link'] = '<i class="ace-icon fa fa-angle-double-right"></i>';

          $this->pagination->initialize($config);
          if($this->uri->segment(3)){
          $page = ($this->uri->segment(3)) ;
          }
            else{
          $page = 0;
          }
         
           $search_term = $this->input->post('search');
       
          $data['results'] =   $this->Subscribersmdl->fetch_data_admin('subscriber_tbl',$config["per_page"], $page,$search_term,$userID );
           

        $str_links = $this->pagination->create_links();
          $data['links'] = explode('&nbsp;',$str_links );
    
 
	$this->load->view('super/pages/Subscribers/listadmin',$data);
       
	}
    
     public function Subscriberslistusers(){
         $this->output->append_title("إدارة المشتركين - عرض المشتركين");
                            $userID = $this->session->userdata('adminid');
     $userID = $this->session->userdata('adminid');
          $userpaid = $this->session->userdata('admparentid');
        
        $search_term = htmlentities($this->input->post('search'));
         $search_term = htmlentities($this->input->post('searchName'));
        $data['rex'] = $this->Subscribersmdl->fetch_dataas_users($userpaid);
         
        $data['rexs'] = $this->Subscribersmdl->fetch_users();
          $data['recuser'] = $this->Usermdl->get_by_user_id();
        $config = array();
          $config["base_url"] = base_url() . "index.php/home/Subscriberslistusers";
          $count = $this->Subscribersmdl->count_rows('subscriber_tbl');
          $config["total_rows"] = $count; // 107
          $config["per_page"] =6;
          $config['use_page_numbers'] = FALSE;
          $config['num_links'] = $count;
          $config['cur_tag_open'] = '&nbsp;<a class="current">';
          $config['cur_tag_close'] = '</a>';
          $config['next_link'] = '<i class="ace-icon fa fa-angle-double-left"></i>';
          $config['prev_link'] = '<i class="ace-icon fa fa-angle-double-right"></i>';

          $this->pagination->initialize($config);
          if($this->uri->segment(3)){
          $page = ($this->uri->segment(3)) ;
          }
            else{
          $page = 0;
          }
         
           $search_term = $this->input->post('search');
       
          $data['results'] =   $this->Subscribersmdl->fetch_data_users('subscriber_tbl',$config["per_page"], $page,$search_term,$userpaid );
           

        $str_links = $this->pagination->create_links();
          $data['links'] = explode('&nbsp;',$str_links );
    
 
	$this->load->view('super/pages/Subscribers/listeuser',$data);
       
	}
   
public function sampleactivlist(){
    if(@$_SESSION['adminisread'] == 2){

            $this->output->append_title("إدارة الأنشطة - عرض الأنشطة");
    $userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
        $search_term = htmlentities($this->input->post('search'));
        $data['rex'] = $this->Sampleactivmdl->fetch_dataas();
        $config = array();
          $config["base_url"] = base_url() . "index.php/home/sampleactivlist";
          $count = $this->Sampleactivmdl->count_rows('activites_model_tbl');
          $config["total_rows"] = $count; // 107
          $config["per_page"] =6;
          $config['use_page_numbers'] = FALSE;
          $config['num_links'] = $count;
          $config['cur_tag_open'] = '&nbsp;<a class="current">';
          $config['cur_tag_close'] = '</a>';
          $config['next_link'] = '<i class="ace-icon fa fa-angle-double-left"></i>';
          $config['prev_link'] = '<i class="ace-icon fa fa-angle-double-right"></i>';

          $this->pagination->initialize($config);
          if($this->uri->segment(3)){
          $page = ($this->uri->segment(3)) ;
          }
            else{
          $page = 0;
          }
         
           $search_term = $this->input->post('search');
          $data['results'] = $this->Sampleactivmdl->fetch_data('activites_model_tbl',$config["per_page"], $page,$search_term );
     

          $str_links = $this->pagination->create_links();
          $data['links'] = explode('&nbsp;',$str_links );
               	$this->load->view('super/pages/sampleactiv/list',$data);

    }
  }
    
 public function sampleactivlistadmin(){
            $this->output->append_title("إدارة الأنشطة - عرض الأنشطة");
$userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
        $search_term = htmlentities($this->input->post('search'));
        $data['rex'] = $this->Sampleactivmdl->fetch_dataas_admin($userID);
        $config = array();
          $config["base_url"] = base_url() . "index.php/home/sampleactivlistadmin";
          $count = $this->Sampleactivmdl->count_rows('activites_model_tbl');
          $config["total_rows"] = $count; // 107
          $config["per_page"] =6;
          $config['use_page_numbers'] = FALSE;
          $config['num_links'] = $count;
          $config['cur_tag_open'] = '&nbsp;<a class="current">';
          $config['cur_tag_close'] = '</a>';
          $config['next_link'] = '<i class="ace-icon fa fa-angle-double-left"></i>';
          $config['prev_link'] = '<i class="ace-icon fa fa-angle-double-right"></i>';

          $this->pagination->initialize($config);
          if($this->uri->segment(3)){
          $page = ($this->uri->segment(3)) ;
          }
            else{
          $page = 0;
          }
         
           $search_term = $this->input->post('search');
$data['results'] = $this->Sampleactivmdl->fetch_data_admin('activites_model_tbl',$config["per_page"], $page,$search_term,$userID);
        

          $str_links = $this->pagination->create_links();
          $data['links'] = explode('&nbsp;',$str_links );

                   	$this->load->view('super/pages/sampleactiv/listadmin',$data);

       
  }
  public function sampleactivlistusers(){
            $this->output->append_title("إدارة الأنشطة - عرض الأنشطة");
$userpaid = $this->session->userdata('admparentid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userpaid);
        $search_term = htmlentities($this->input->post('search'));
        $data['rex'] = $this->Sampleactivmdl->fetch_dataas_users($userpaid);
        $config = array();
          $config["base_url"] = base_url() . "index.php/home/sampleactivlistusers";
          $count = $this->Sampleactivmdl->count_rows('activites_model_tbl');
          $config["total_rows"] = $count; // 107
          $config["per_page"] =6;
          $config['use_page_numbers'] = FALSE;
          $config['num_links'] = $count;
          $config['cur_tag_open'] = '&nbsp;<a class="current">';
          $config['cur_tag_close'] = '</a>';
          $config['next_link'] = '<i class="ace-icon fa fa-angle-double-left"></i>';
          $config['prev_link'] = '<i class="ace-icon fa fa-angle-double-right"></i>';

          $this->pagination->initialize($config);
          if($this->uri->segment(3)){
          $page = ($this->uri->segment(3)) ;
          }
            else{
          $page = 0;
          }
         
           $search_term = $this->input->post('search');
$data['results'] = $this->Sampleactivmdl->fetch_data_users('activites_model_tbl',$config["per_page"], $page,$search_term,$userpaid);
        

          $str_links = $this->pagination->create_links();
          $data['links'] = explode('&nbsp;',$str_links );

                   	$this->load->view('super/pages/sampleactiv/listeusers',$data);

       
  }
    
    public function Initiativeslist(){
        if(@$_SESSION['adminisread'] == 2){

            $this->output->append_title("إدارة المبادرات - عرض المبادرات");
        $search_term = htmlentities($this->input->post('search'));
$userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
        $data['rex'] = $this->Initiativesmdl->fetch_dataas();
        $config = array();
          $config["base_url"] = base_url() . "index.php/home/Initiativeslist";
          $count = $this->Initiativesmdl->count_rows('initiatives_model_tbl');
          $config["total_rows"] = $count; // 107
          $config["per_page"] =6;
          $config['use_page_numbers'] = FALSE;
          $config['num_links'] = $count;
          $config['cur_tag_open'] = '&nbsp;<a class="current">';
          $config['cur_tag_close'] = '</a>';
          $config['next_link'] = '<i class="ace-icon fa fa-angle-double-left"></i>';
          $config['prev_link'] = '<i class="ace-icon fa fa-angle-double-right"></i>';

          $this->pagination->initialize($config);
          if($this->uri->segment(3)){
          $page = ($this->uri->segment(3)) ;
          }
            else{
          $page = 0;
          }
        
           $search_term = htmlentities($this->input->post('search'));
        
          $data['results'] = $this->Initiativesmdl->fetch_data('initiatives_model_tbl',$config["per_page"], $page,$search_term);
    
          $str_links = $this->pagination->create_links();
          $data['links'] = explode('&nbsp;',$str_links );
               	$this->load->view('super/pages/initiative/list',$data);
        }
    
    }
    

    public function Initiativeslistadmin(){
            $this->output->append_title("إدارة المبادرات - عرض المبادرات");
                    $userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
        $search_term = htmlentities($this->input->post('search'));
        $data['rex'] = $this->Initiativesmdl->fetch_dataas_admin($userID);
        $config = array();
          $config["base_url"] = base_url() . "index.php/home/Initiativeslist";
          $count = $this->Initiativesmdl->count_rows('initiatives_model_tbl');
          $config["total_rows"] = $count; // 107
          $config["per_page"] =6;
          $config['use_page_numbers'] = FALSE;
          $config['num_links'] = $count;
          $config['cur_tag_open'] = '&nbsp;<a class="current">';
          $config['cur_tag_close'] = '</a>';
          $config['next_link'] = '<i class="ace-icon fa fa-angle-double-left"></i>';
          $config['prev_link'] = '<i class="ace-icon fa fa-angle-double-right"></i>';

          $this->pagination->initialize($config);
          if($this->uri->segment(3)){
          $page = ($this->uri->segment(3)) ;
          }
            else{
          $page = 0;
          }
        
           $search_term = htmlentities($this->input->post('search'));
        
          $data['results'] = $this->Initiativesmdl->fetch_data_admin('initiatives_model_tbl',$config["per_page"], $page,$search_term,$userID );
             
          $str_links = $this->pagination->create_links();
          $data['links'] = explode('&nbsp;',$str_links );

     	$this->load->view('super/pages/initiative/listadmin',$data);

    }
    
    public function Initiativeslistusers(){
            $this->output->append_title("إدارة المبادرات - عرض المبادرات");
          $userpaid = $this->session->userdata('admparentid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userpaid);
        $search_term = htmlentities($this->input->post('search'));
        $data['rex'] = $this->Initiativesmdl->fetch_dataas_users($userpaid);
        $config = array();
          $config["base_url"] = base_url() . "index.php/home/Initiativeslist";
          $count = $this->Initiativesmdl->count_rows('initiatives_model_tbl');
          $config["total_rows"] = $count; // 107
          $config["per_page"] =6;
          $config['use_page_numbers'] = FALSE;
          $config['num_links'] = $count;
          $config['cur_tag_open'] = '&nbsp;<a class="current">';
          $config['cur_tag_close'] = '</a>';
          $config['next_link'] = '<i class="ace-icon fa fa-angle-double-left"></i>';
          $config['prev_link'] = '<i class="ace-icon fa fa-angle-double-right"></i>';

          $this->pagination->initialize($config);
          if($this->uri->segment(3)){
          $page = ($this->uri->segment(3)) ;
          }
            else{
          $page = 0;
          }
        
           $search_term = htmlentities($this->input->post('search'));
        
          $data['results'] = $this->Initiativesmdl->fetch_data_users('initiatives_model_tbl',$config["per_page"], $page,$search_term,$userpaid );
             
          $str_links = $this->pagination->create_links();
          $data['links'] = explode('&nbsp;',$str_links );

     	$this->load->view('super/pages/initiative/listuser',$data);

    }
   
    
    
    
    
    public function userslist(){
           if(@$_SESSION['adminisread'] == 2){
            $this->output->append_title("إدارة المستخدمين - عرض المستدخمين");
                        $userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
        $search_term = $this->input->post('search');
        $data['rex'] = $this->Usermdl->fetch_dataas();
        $config = array();
          $config["base_url"] = base_url() . "index.php/home/userslist";
          $count = $this->Usermdl->count_rows('tbl_user');
          $config["total_rows"] = $count; // 107
          $config["per_page"] =6;
          $config['use_page_numbers'] = FALSE;
          $config['num_links'] = $count;
          $config['cur_tag_open'] = '&nbsp;<a class="current">';
          $config['cur_tag_close'] = '</a>';
          $config['next_link'] = '<i class="ace-icon fa fa-angle-double-left"></i>';
          $config['prev_link'] = '<i class="ace-icon fa fa-angle-double-right"></i>';

          $this->pagination->initialize($config);
          if($this->uri->segment(3)){
          $page = ($this->uri->segment(3)) ;
          }
            else{
          $page = 0;
          }
        
           $search_term = $this->input->post('search');
          $data['results'] = $this->Usermdl->fetch_data('tbl_user',$config["per_page"], $page,$search_term );
          $str_links = $this->pagination->create_links();
          $data['links'] = explode('&nbsp;',$str_links );

              	$this->load->view('super/pages/nusers/list',$data);
           }
  }

    
  public function useraddlist(){
      if(@$_SESSION['adminisread'] == 1){
            $this->output->append_title("إدارة المستخدمين - عرض المستدخمين");
$userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
        $search_term = $this->input->post('search');
        $data['rex'] = $this->Usermdl->fetch_dataas();
        $config = array();
          $config["base_url"] = base_url() . "index.php/home/useraddlist";
          $count = $this->Usermdl->count_rows('tbl_user');
          $config["total_rows"] = $count; // 107
          $config["per_page"] =6;
          $config['use_page_numbers'] = FALSE;
          $config['num_links'] = $count;
          $config['cur_tag_open'] = '&nbsp;<a class="current">';
          $config['cur_tag_close'] = '</a>';
          $config['next_link'] = '<i class="ace-icon fa fa-angle-double-left"></i>';
          $config['prev_link'] = '<i class="ace-icon fa fa-angle-double-right"></i>';

          $this->pagination->initialize($config);
          if($this->uri->segment(3)){
          $page = ($this->uri->segment(3)) ;
          }
            else{
          $page = 0;
          
              $search_term = $this->input->post('search');
         $userID = $this->session->userdata('adminid');
        
           $data['results'] = $this->Usermdl->fetch_data_admin('tbl_user',$config["per_page"], $page,$search_term,$userID );
     
          $str_links = $this->pagination->create_links();
          $data['links'] = explode('&nbsp;',$str_links );

              	$this->load->view('super/pages/nusers/list',$data);
            }
  }}

 
    
    
    
       public function recmail(){
            $this->output->append_title(" صندوق الرسائل - عرض الرسائل الواردة");
                               $userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
           $search_term = $this->input->post('search');
           $data['rex'] = $this->Messegemdl->fetch_dataas();
            $config = array();
          $config["base_url"] = base_url() . "index.php/home/recmail";
          $count = $this->Messegemdl->count_rows('tbl_messages');
          $config["total_rows"] = $count; // 107
          $config["per_page"] =10;
          $config['use_page_numbers'] = FALSE;
          $config['num_links'] = $count;
          $config['cur_tag_open'] = '&nbsp;<a class="current">';
          $config['cur_tag_close'] = '</a>';
          $config['next_link'] = '<i class="ace-icon fa fa-angle-double-left"></i>';
          $config['prev_link'] = '<i class="ace-icon fa fa-angle-double-right"></i>';

          $this->pagination->initialize($config);
          if($this->uri->segment(3)){
          $page = ($this->uri->segment(3)) ;
          }
            else{
          $page = 0;
          }
           $search_term = $this->input->post('search');
            $userID = $this->session->userdata('adminid');
           $data['results'] = $this->Messegemdl->fetch_datarec('tbl_messages',$config["per_page"], $page,$search_term,$userID);

          $str_links = $this->pagination->create_links();
          $data['links'] = explode('&nbsp;',$str_links );

              	$this->load->view('super/pages/message/listrece',$data);

  }

    
    
    
 public function sendrmail(){
            $this->output->append_title("صندوق الرسائل - عرض الرسائل الصادرة");
                         $userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
        $search_term = $this->input->post('search');
        $data['rex'] = $this->Messegemdl->fetch_dataas();
        $config = array();
          $config["base_url"] = base_url() . "index.php/home/sendrmail";
          $count = $this->Messegemdl->count_rows('tbl_messages');
          $config["total_rows"] = $count; // 107
          $config["per_page"] =10;
          $config['use_page_numbers'] = FALSE;
          $config['num_links'] = $count;
          $config['cur_tag_open'] = '&nbsp;<a class="current">';
          $config['cur_tag_close'] = '</a>';
          $config['next_link'] = '<i class="ace-icon fa fa-angle-double-left"></i>';
          $config['prev_link'] = '<i class="ace-icon fa fa-angle-double-right"></i>';

          $this->pagination->initialize($config);
          if($this->uri->segment(3)){
          $page = ($this->uri->segment(3)) ;
          }
            else{
          $page = 0;
          }
           $search_term = $this->input->post('search');
     $userID = $this->session->userdata('adminid');
           $data['results'] = $this->Messegemdl->fetch_datasend('tbl_messages',$config["per_page"], $page,$search_term,$userID);
    
          $str_links = $this->pagination->create_links();
          $data['links'] = explode('&nbsp;',$str_links );

              	$this->load->view('super/pages/message/listsend',$data);

  }
    
    
    
    
    

}
