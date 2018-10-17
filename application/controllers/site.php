<?php

	  class Site extends CI_Controller{

	  	public function __construct(){
	  		parent::__construct();
	  	   $this->load->model('loginMdl');
            		$this->load->model('Subscribersmdl');

	  	}
	 public function index(){
	  		$this->login();
     }
	  	/* 	
// code Supre login in and login out
	public function index()
	{
		$this->output->append_title("الرئيسية");
		$this->load->view('login');

	} } */
	public function login(){

	$this->form_validation->set_rules('username','اسم المستخدم', 'trim|required');
	$this->form_validation->set_rules('password','كلمة المرور', 'trim|required|min_length[6]');
	      	
	if($this->form_validation->run() == FALSE){	
		$this->load->view('super/login');
       
		}else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
        $salt = 'dc3s';
$salt1 = 'a59ab';
        $hashpPass=md5($password);
$hashrep=substr_replace($hashpPass,'j2',14,-17);
$hashsalt=($salt1.$hashrep.$salt);

        $row = $this->loginMdl->logmesuper($username, $hashsalt);
        
 /*              
$token = md5(uniqid(rand(), TRUE));
        $timeoutt=time() + 60 * 60 *7;
       setcookie('auth', "$password:$token", $timeout);
           */    

         if($row != ''){
           if($username==$row['username'] && $hashsalt==$row['password']){
            $data = array('adminid'=> $row['id'],
                          'adminname'=> $row['username'],
                          'adminimgsrc'=> $row['imgsrc'],
                          'adminemail'=> $row['email'],
                          'adminisread'=> $row['Isread'],
                          'admparentid'=> $row['parentid'],
                           'admnickname'=> $row['nickname'],
							  'Logedin'=> TRUE );
            $this->session->set_userdata($data);
    //$adminid = $this->session->all_userdata($data);

				redirect('home/index');
            }
        else{ redirect('site/
        login');}
             
		}
		}
	}

	public function logout(){
		$data = array('username' => '',
							  'id'=>'',
							  'Logedin'=> FALSE );
				$this->session->set_userdata($data);
				$this->session->sess_destroy();
				redirect('site/index');
	}
          
    /*         public function getdata($name = '')
   {
      // Get data from db 
    $data['ajaxdata'] = $this->Subscribersmdl->fetch_name($name);
                
     $data['ajaxdata'] = json_encode($data['ajaxdata']);

               echo $data['ajaxdata'];


             }       
*/
          

 

          
      }

?>