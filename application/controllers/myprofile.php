<?php

class Myprofile extends CI_Controller{

  function __construct() {
		parent::__construct();
		$this->load->model('profilmdl');
		//$this->load->library('form_validation');
	
	$this->_init();
	}
	private function _init() {
		$this->output->set_title("لوحة التحكم ::");
		$this->output->set_template('theme'); }
    
    
    		 public function upload($oldIMG) {
    $configUpload['upload_path']    = FCPATH.'assets/image/users/';      #the folder placed in the root of project
    $configUpload['allowed_types']  = 'gif|jpg|png|bmp|jpeg';       #allowed types description
    $configUpload['max_size']       = '0';                          #max size
    $configUpload['max_width']      = '0';                          #max width
    $configUpload['max_height']     = '0';                          #max height
    $configUpload['encrypt_name']   = true;                         #encrypt name of the uploaded file
    $this->load->library('upload', $configUpload);                  #init the upload class
    $this->upload->initialize($configUpload);
     if ( ! $this->upload->do_upload('fleImage')) {
        if ("You did not select a file to upload." != $this->upload->display_errors('','')) {
        $errors  =	$this->upload->display_errors('','');
        $this->session->set_flashdata('error', $errors);
        redirect('home/index');
        } else {
           //if you didnt choose image will save zero as name of image
            return $oldIMG; }
    } else { 
         $data = array('upload_data' => $this->upload->data());
         $fullpath= $data['upload_data']['full_path'];
        return $file_name = $data['upload_data']['file_name']; }  }


		public function Modifysup($id = NULL){
            
			$this->output->append_title(' تعديل بيانات المشتركين');
            $data['recs'] = $this->profilmdl->get_by_id($id);

          
            
            $racord  = $this->profilmdl->get_by_id($id);
         $this->form_validation->set_rules('username', 'اسم المستخدم', 'required');
        $this->form_validation->set_rules('password', 'كلمة المرور', 'required');
        $this->form_validation->set_rules('email', 'البريد الإلكتروني', 'required|valid_email');
         $this->form_validation->set_rules('Phone', 'رقم الجوال', 'trim|required|min_length[7]|max_length[7]');
            
      	if($this->form_validation->run() == FALSE){
        $this->load->view('super/pages/profile/modify',$data);

        }else{
                          $password = $this->input->post('password');
        $salt = 'dc3s';
$salt1 = 'a59ab';
        $hashpPass=md5($password);
$hashrep=substr_replace($hashpPass,'j2',14,-17);
$hashsalt=($salt1.$hashrep.$salt);
            $data = array('username' =>htmlentities($this->input->post('username')),
                          'password' =>htmlentities($hashsalt),
                          'email' =>htmlentities($this->input->post('email')),
                           'tell' =>htmlentities($this->input->post('Phone')),
                           'addres' =>htmlentities($this->input->post('addres')),
                            'nickname' =>htmlentities($this->input->post('nicknames')),
                          'imgsrc' => htmlentities($this->upload($racord['imgsrc'])),
                          'last_login'=>htmlentities(date('Y/m/d H:i:s'))  );
            
         $rs = $this->profilmdl->modifysupermdl($id,$data);
             redirect('home/index');
             $this->session->set_flashdata("msg","current image");
           } 

       }
    		public function Modifyadmin($id = NULL){
            
			$this->output->append_title(' تعديل بيانات المشتركين');
            $data['recs'] = $this->profilmdl->get_by_id($id);

          
            
            $racord  = $this->profilmdl->get_by_id($id);
       $this->form_validation->set_rules('username', 'اسم المستخدم', 'required');
        $this->form_validation->set_rules('password', 'كلمة المرور', 'required');
        $this->form_validation->set_rules('email', 'البريد الإلكتروني', 'required|valid_email');
        $this->form_validation->set_rules('Phone', 'رقم الجوال', 'trim|required|min_length[7]|max_length[7]');
      	if($this->form_validation->run() == FALSE){
        $this->load->view('super/pages/profile/modifyadmin',$data);

        }else{
                          $password = $this->input->post('password');
        $salt = 'dc3s';
$salt1 = 'a59ab';
        $hashpPass=md5($password);
$hashrep=substr_replace($hashpPass,'j2',14,-17);
$hashsalt=($salt1.$hashrep.$salt);
            $data = array('username' =>htmlentities($this->input->post('username')),
                          'password' =>htmlentities($hashsalt),
                          'email' =>htmlentities($this->input->post('email')),
                           'tell' =>htmlentities($this->input->post('Phone')),
                           'addres' =>htmlentities($this->input->post('addres')),
                          'imgsrc' => htmlentities($this->upload($racord['imgsrc'])),
                          'last_login'=>htmlentities(date('Y/m/d H:i:s'))  );
            
         $rs = $this->profilmdl->modifysupermdl($id,$data);
             redirect('home/index');
             $this->session->set_flashdata("msg","current image");
           } 

       }
    

    


}