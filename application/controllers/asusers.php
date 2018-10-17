 <?php

class Asusers extends CI_Controller{

  function __construct()
	{
		parent::__construct();
		$this->load->model('Usermdl');
		 $this->load->model('Messegemdl');
	
	$this->_init();
	}

	private function _init()
	{
		$this->output->set_title("لوحة التحكم :: إدارة المبادرات ");
		$this->output->set_template('theme');

	}


	public function adduser(){
		$this->output->append_title('إضافة مستخدمين');
        $userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
        $this->form_validation->set_rules('username', 'الاسم', 'required');
        $this->form_validation->set_rules('password', 'كلمة المرور', 'required');
      $this->form_validation->set_rules('email', 'البريد الإلكتروني', 'required|valid_email');
         $this->form_validation->set_rules('Phone', 'رقم الجوال', 'trim|required|min_length[7]|max_length[7]');
        if($this->form_validation->run() == FALSE){
         		$this->load->view('super/pages/nusers/add',$data);
         	}else{
            $pid=$_SESSION['adminid'];
            $pname=$_SESSION['adminname'];
                        $salt = 'dc3s';
$salt1 = 'a59ab';
        $hashpPass=md5($this->input->post('password'));
$hashrep=substr_replace($hashpPass,'j2',14,-17);
$hashsalt=($salt1.$hashrep.$salt);
            
   	
   		  $data = array('username' =>$this->input->post('username'),
                          'password' =>$hashsalt,
                          'email' =>$this->input->post('email'),
                           'tell' =>$this->input->post('Phone'),
                           'addres' =>$this->input->post('addres'),
                        'parentid' =>$pid,
                        'Isread' =>1,
                         'parent_name' =>$pname,
                         'nickname' =>htmlentities($this->input->post('nicknames')),
                          'regdate'=>date('Y/m/d H:i:s') );
        
             
          $rs = $this->Usermdl->save('tbl_user',$data);
          $this->load->view('super/pages/nusers/add',$data);
        if(!$rs)
        redirect('home/index');
        else
        echo "Faild!"; 
		} 
		
	}
    
    	public function adduserad(){
		$this->output->append_title('إضافة مستخدمين');
 $userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
        $this->form_validation->set_rules('username', 'الاسم', 'required');
        $this->form_validation->set_rules('password', 'كلمة المرور', 'required');
      $this->form_validation->set_rules('email', 'البريد الإلكتروني', 'required|valid_email');
         $this->form_validation->set_rules('Phone', 'رقم الجوال', 'trim|required|min_length[7]|max_length[7]');
        if($this->form_validation->run() == FALSE){
         		$this->load->view('super/pages/nusers/adduser',$data);
         	}else{
                      $active = $this->input->post('cbact');
  if(isset($active)){
    $chBoxs = 1;
  }else{
    $chBoxs = 0;
  }
            $pid=$_SESSION['adminid'];
            $pname=$_SESSION['adminname'];
                        $salt = 'dc3s';
$salt1 = 'a59ab';
        $hashpPass=md5($this->input->post('password'));
$hashrep=substr_replace($hashpPass,'j2',14,-17);
$hashsalt=($salt1.$hashrep.$salt);
 
   		  $data = array('username' =>$this->input->post('username'),
                          'password' =>$hashsalt,
                          'email' =>$this->input->post('email'),
                           'tell' =>$this->input->post('Phone'),
                           'addres' =>$this->input->post('addres'),
                        'parentid' =>$pid,
                         'parent_name' =>$pname,
                        'Isread' =>$chBoxs,
                         'nickname' =>htmlentities($this->input->post('nicknames')),
                          'regdate'=>date('Y/m/d H:i:s') );
        
             
          $rs = $this->Usermdl->save('tbl_user',$data);
          $this->load->view('super/pages/nusers/adduser',$data);
        if(!$rs)
        redirect('home/index');
        else
        echo "Faild!"; 
		} 
        }
    

  

     	public function Modify($id = NULL){
        $this->output->append_title('تعديل بيانات المستخدمين');
            $userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
      	 $data['recs'] = $this->Usermdl->get_by_id($id);
        $this->form_validation->set_rules('username', 'الاسم', 'required');
        $this->form_validation->set_rules('password', 'كلمة المرور', 'required');
      $this->form_validation->set_rules('email', 'البريد الإلكتروني', 'required|valid_email');
         $this->form_validation->set_rules('Phone', 'رقم الجوال', 'trim|required|min_length[7]|max_length[7]');
      	if($this->form_validation->run() == FALSE){
        $this->load->view('super/pages/nusers/edit', $data);
      	}else{
            
            $salt = 'dc3s';
$salt1 = 'a59ab';
        $hashpPass=md5($this->input->post('password'));
$hashrep=substr_replace($hashpPass,'j2',14,-17);
$hashsalt=($salt1.$hashrep.$salt);

    		  $data = array('username' =>htmlentities($this->input->post('username')),
                          'password' =>htmlentities($hashsalt),
                          'email' =>htmlentities($this->input->post('email')),
                           'tell' =>htmlentities($this->input->post('Phone')),
                           'addres' =>htmlentities($this->input->post('addres')),
                             'nickname' =>htmlentities($this->input->post('nicknames')),
                          'regdate'=>date('Y/m/d H:i:s')  );
            
        $this->Usermdl->update($id,$data);
        redirect('home/index');
		}
      }
    

     	public function Modifyadd($id = NULL){
        $this->output->append_title('تعديل المبادرات');
            $userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
      	 $data['recs'] = $this->Usermdl->get_by_id($id);
        $this->form_validation->set_rules('username', 'الاسم', 'required');
        $this->form_validation->set_rules('password', 'كلمة المرور', 'required');
          $this->form_validation->set_rules('email', 'البريد الإلكتروني', 'required|valid_email');
         $this->form_validation->set_rules('Phone', 'رقم الجوال', 'trim|required|min_length[7]|max_length[7]');
      	if($this->form_validation->run() == FALSE){
        $this->load->view('super/pages/nusers/editad', $data);
      	}else{
            $active = $this->input->post('cbact');
  if(isset($active)){
    $chBoxs = 4;
  }else{
    $chBoxs = 0;
  }
            $salt = 'dc3s';
$salt1 = 'a59ab';
        $hashpPass=md5($this->input->post('password'));
$hashrep=substr_replace($hashpPass,'j2',14,-17);
$hashsalt=($salt1.$hashrep.$salt);

    		  $data = array('username' =>htmlentities($this->input->post('username')),
                        'password' =>htmlentities($hashsalt),
                          'email' =>htmlentities($this->input->post('email')),
                           'tell' =>htmlentities($this->input->post('Phone')),
                           'addres' =>htmlentities($this->input->post('addres')),
                             'Isread' =>htmlentities($chBoxs),
                             'nickname' =>htmlentities($this->input->post('nicknames')),
                          'regdate'=>date('Y/m/d H:i:s')  );
            
        $this->Usermdl->update($id,$data);
        redirect('home/useraddlist');
		}
      }
    
       
      public function deleteuser($id){
      	$this->Usermdl->delete($id);
          if( $_SESSION['adminisread'] == 1){
       	 redirect('home/useraddlist'); 
              
          }elseif( $_SESSION['adminisread'] == 2){
              	 redirect('home/userslist'); 
          }
      
      }
    

     
       function actionuser()
 {
           
  $this->load->model("Usermdl");
  $this->load->library("excel");
  $object = new PHPExcel();
 $userID = $this->session->userdata('adminid');
  $object->setActiveSheetIndex(0);

  $table_columns = 
   array(" رقم المستخدم","اسم المستخدم", "الكنية", "البريد الالكتروني", "رقم الجوال", "العنوان","المشرف","التاريخ"  );

  $column = 0;

  foreach($table_columns as $field)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
   $column++;
  }

  $employee_data = $this->Usermdl->getuserexle($userID);

  $excel_row = 2;

  foreach($employee_data as $row)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->id);
   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->username);
   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->nickname);
   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->email);
   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->tell);
    $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->addres);
      $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->parent_name);
  $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->regdate);
   $excel_row++;
  }

  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="بيانات المتخدمين .xls"');
  $object_writer->save('php://output');
 }
    

}