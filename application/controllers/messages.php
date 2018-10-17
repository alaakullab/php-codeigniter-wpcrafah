<?php

class Messages extends CI_Controller{

  function __construct()
	{
		parent::__construct();
		$this->load->model('Messegemdl');
		//$this->load->library('form_validation');
	
	$this->_init();
	}

	private function _init()
	{
		$this->output->set_title("لوحة التحكم ::");
		$this->output->set_template('theme');

	}

public function msget(){
	
		$data['message'] = $this->db->select('*')->from('message')->order_by('id','desc')->get();
		$this->load->view('super/pages/message',$data);
	
	}
    

    
    public function detailsmsg($id){
        
		$this->output->append_title('إرسال رسالة');
        $userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
 $data['view'] = $this->Messegemdl->get_by_id($id);
    	
   if($data ){

			$this->db->where('id',$this->input->post('id'))->update('tbl_messages',array('Isread'=>1));

        } 
             $this->load->view('super/pages/message/views',$data);
        
	
	}   
    

    
    		 public function upload() {
    $configUpload['upload_path']    = 'assets/upload/';      #the folder placed in the root of project
$configUpload['allowed_types']  = 'doc|docx|xls|xlsx|ppt|pptx|pdf|txt|jpg|png|jpeg|bmp|gif|avi|flv|mpg|wmv|mp3|wma|wav|zip|rar';       #allowed types description
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
  
    

	public function sendmsg(){
        
		$this->output->append_title('إرسال رسالة');
$userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
		$this->form_validation->set_rules('txtSender', 'الاسم', 'required');
        $this->form_validation->set_rules('txtEmail', 'البريد الإلكتروني', 'required|valid_email');
        $this->form_validation->set_rules('txtTitle', 'عنوان الرسالة', 'trim|required');

		 if($this->form_validation->run() == FALSE){
             $data['recc'] = $this->Messegemdl->get_by_user_id();
           
             $this->load->view('super/pages/message/send',$data);
         	}else{
             
         	$as=$_SESSION['adminid'];    
         $img=$_SESSION['adminimgsrc']; 
  

             $data = array('title'=>htmlentities($this->input->post('txtTitle')),
                     'reciverid' =>htmlentities($this->input->post('reciver')),
                     'sendername' =>htmlentities($this->input->post('txtSender')),
                     'senderid' =>htmlentities($as),
                      'senderimg' =>htmlentities($img),
                     'message' =>htmlentities($this->input->post('txtMessage')),
                    'senderfile' =>htmlentities($this->upload($racord['senderfile'])),
                     'email' =>htmlentities($this->input->post('txtEmail')),                  
                     'sendDate' =>htmlentities(date('Y/m/d H:i:s')));
          $rs = $this->Messegemdl->save('tbl_messages',$data);
        
             $this->load->view('super/pages/message/send');
        if(!$rs)
        redirect('home/sendrmail');

        else
        echo "Faild!"; 
		}
	
	}   
    
  	
	public function replymsg($id = NULL){
        
		$this->output->append_title('إرسال رسالة');
    $userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
		$this->form_validation->set_rules('txtSender', 'الاسم', 'required');
        $this->form_validation->set_rules('txtEmail', 'البريد الإلكتروني', 'required|valid_email');
        $this->form_validation->set_rules('txtTitle', 'عنوان الرسالة', 'trim|required');

		 if($this->form_validation->run() == FALSE){
             $data['recc'] = $this->Messegemdl->get_by_user_id();
           $data['recmsg'] = $this->Messegemdl->get_by_id($id);
             $this->load->view('super/pages/message/replay',$data);
         	}else{
         	 	$as=$_SESSION['adminid'];    
         $img=$_SESSION['adminimgsrc']; 
      $data = array('title'=>htmlentities($this->input->post('txtTitle')),
                     'reciverid' =>htmlentities($this->input->post('reciver')),
                     'sendername' =>htmlentities($this->input->post('txtSender')),
                     'senderid' =>htmlentities($as),
                      'senderimg' =>htmlentities($img),
                     'message' =>htmlentities($this->input->post('txtMessage')),
                    'senderfile' =>htmlentities($this->upload($racord['senderfile'])),
                     'email' =>htmlentities($this->input->post('txtEmail')),                  
                     'sendDate' =>htmlentities(date('Y/m/d H:i:s')));
          $rs = $this->Messegemdl->save('tbl_messages',$data);
             $this->load->view('super/pages/message/replay');
        if(!$rs)
        redirect('home/recmail');
        else
        echo "Faild!"; 
		}
	
	}

    
      public function deleterec($id){
      	$this->Messegemdl->delete($id);
      	 redirect('home/recmail');
      }

 
  
      public function deletesed($id){
      	$this->Messegemdl->delete($id);
      	 redirect('home/sendrmail');
      }
    
    /*
      public function detail()
   {
      // Get data from db 
    $data['ajaxdata'] = $this->messegemdl->fetch_name();
                
     $data['ajaxdata'] = json_encode($data['ajaxdata']);

               echo $data['ajaxdata'];


             }   */
    
         
       function actionrec()
 {
           
  $this->load->model("Messegemdl");
  $this->load->library("excel");
  $object = new PHPExcel();
 $userID = $this->session->userdata('adminid');
  $object->setActiveSheetIndex(0);

  $table_columns = 
   array(" رقم الرسالة","عنوان الرسالة", "اسم المرسل", "البريد الالكتروني", "تاريخ الارسال", "موضوع الرسالة"  );

  $column = 0;

  foreach($table_columns as $field)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
   $column++;
  }

  $employee_data = $this->Messegemdl->getmsgexle($userID);

  $excel_row = 2;

  foreach($employee_data as $row)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->id);
   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->title);
   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->sendername);
   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->email);
   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->sendDate);
    $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->message);

   $excel_row++;
  }

  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="الرسائل الواردة.xls"');
  $object_writer->save('php://output');
 }
 
    
       function actionsend()
 {
           
  $this->load->model("Messegemdl");
  $this->load->library("excel");
  $object = new PHPExcel();
 $userID = $this->session->userdata('adminid');
  $object->setActiveSheetIndex(0);

  $table_columns = 
   array(" رقم الرسالة","عنوان الرسالة", "اسم المرسل", "البريد الالكتروني", "تاريخ الارسال", "موضوع الرسالة"  );

  $column = 0;

  foreach($table_columns as $field)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
   $column++;
  }

  $employee_data = $this->Messegemdl->getsendexle($userID);

  $excel_row = 2;

  foreach($employee_data as $row)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->id);
   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->title);
   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->sendername);
   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->email);
   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->sendDate);
    $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->message);

   $excel_row++;
  }

  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="الرسائل الصادرة.xls"');
  $object_writer->save('php://output');
 }
    
    
 
    
    
    

}