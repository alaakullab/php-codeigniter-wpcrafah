<?php

class Subscribers extends CI_Controller{

  function __construct()
	{
		parent::__construct();
		$this->load->model('Subscribersmdl');
		//$this->load->library('form_validation');
	
	$this->_init();
	}

	private function _init()
	{
		$this->output->set_title("لوحة التحكم ::");
		$this->output->set_template('theme');

	}

// بداية نموذج إدخال المشتركين

	public function addsubscrib(){
		$this->output->append_title('إضافة مشترك');
   $userID = $this->session->userdata('adminid');
       	$this->form_validation->set_rules('fulllName', 'الاسم', 'required');
      $this->form_validation->set_rules('idNumbers', 'رقم الهوية', 'trim|required|min_length[9]|max_length[9]');
         $this->form_validation->set_rules('sTell', 'رقم الجوال', 'trim|required|min_length[7]|max_length[7]');
         $this->form_validation->set_rules('sPhone', 'رقم الهاتف', 'trim|required|min_length[7]|max_length[7]');

			$this->form_validation->set_rules('fulllName', 'الاسم', 'required');
        

		 if($this->form_validation->run() == FALSE){
             $data['recc'] = $this->Subscribersmdl->get_by_reg_id();
             $data['recsoci'] = $this->Subscribersmdl->get_by_soci_id();
             $data['receco'] = $this->Subscribersmdl->get_by_eco_id();
             $data['recwork'] = $this->Subscribersmdl->get_by_work_id();
          //   $data['recworkp'] = $this->Subscribersmdl->get_by_workp_id();
             $data['recedu'] = $this->Subscribersmdl->get_by_edu_id();
           //  $data['recnatffiliation'] = $this->Subscribersmdl->get_by_natffiliation_id();
             $data['reccdis'] = $this->Subscribersmdl->get_by_dis_id();
             $this->load->view('super/pages/Subscribers/add',$data);
         	}else{
        $data = array('sub_fulllname'=>htmlentities($this->input->post('fulllName')),
                     'id_number' =>htmlentities($this->input->post('idNumbers')),
                     'full_address' =>htmlentities($this->input->post('flAddress')),
                     'sub_gender' =>htmlentities($this->input->post('suGender')),
                     'age' =>htmlentities($this->input->post('aGe')),
                     'reg_date' =>htmlentities($this->input->post('rgDate')),
                     'sub_tel' =>htmlentities($this->input->post('sTell')),
                     'sub_phone' =>htmlentities($this->input->post('sPhone')),
                     'sub_age' =>htmlentities($this->input->post('suAge')),
                     'sub_no_logistics' =>htmlentities($this->input->post('sNlogistics')),
                     'persondis' =>htmlentities($this->input->post('personDis')),
                     'natffiliation_name' =>htmlentities($this->input->post('natffiliatId')),
                     'dis_id' =>htmlentities($this->input->post('disId')),
                     'dis_note' =>htmlentities($this->input->post('disNote')),
                     'reg_id' =>htmlentities($this->input->post('regId')),
                     'work_id' =>htmlentities($this->input->post('workId')),
                     'soci_id' =>htmlentities($this->input->post('socId')),
                     'eco_id' =>htmlentities($this->input->post('ecomId')),
                     'edu_id' =>htmlentities($this->input->post('eduCid')),
                     'workplace_name' =>htmlentities($this->input->post('sworkPid')),
                     'familymemb' =>htmlentities($this->input->post('famAmemb')),
                     'malememb' =>htmlentities($this->input->post('malEmemb')),
                     'femalememb' =>htmlentities($this->input->post('femAmemb')),
                      'user_id	' =>htmlentities($userID),
                     'newsDate' =>htmlentities(date('Y/m/d H:i:s')));
          $rs = $this->Subscribersmdl->save('subscriber_tbl',$data);
        
          $this->load->view('super/pages/Subscribers/add',$data);
        if(!$rs)
        redirect('home/Subscriberslist');
        else
        echo "Faild!"; 
		}
		
	}    // تهاية نموذج إدخال المشتركين
    
    	public function addsubscribadd(){
		$this->output->append_title('إضافة مشترك');
   $parID = $_SESSION['admparentid'];
			$this->form_validation->set_rules('fulllName', 'الاسم', 'required');
      $this->form_validation->set_rules('idNumbers', 'رقم الهوية', 'trim|required|min_length[9]|max_length[9]');
         $this->form_validation->set_rules('sTell', 'رقم الجوال', 'trim|required|min_length[7]|max_length[7]');
         $this->form_validation->set_rules('sPhone', 'رقم الهاتف', 'trim|required|min_length[7]|max_length[7]');
		 if($this->form_validation->run() == FALSE){
             $data['recc'] = $this->Subscribersmdl->get_by_reg_id();
             $data['recsoci'] = $this->Subscribersmdl->get_by_soci_id();
             $data['receco'] = $this->Subscribersmdl->get_by_eco_id();
             $data['recwork'] = $this->Subscribersmdl->get_by_work_id();
          //   $data['recworkp'] = $this->Subscribersmdl->get_by_workp_id();
             $data['recedu'] = $this->Subscribersmdl->get_by_edu_id();
           //  $data['recnatffiliation'] = $this->Subscribersmdl->get_by_natffiliation_id();
             $data['reccdis'] = $this->Subscribersmdl->get_by_dis_id();
             $this->load->view('super/pages/Subscribers/addadmin',$data);
         	}else{
        $data = array('sub_fulllname'=>htmlentities($this->input->post('fulllName')),
                     'id_number' =>htmlentities($this->input->post('idNumbers')),
                     'full_address' =>htmlentities($this->input->post('flAddress')),
                     'sub_gender' =>htmlentities($this->input->post('suGender')),
                     'age' =>htmlentities($this->input->post('aGe')),
                     'reg_date' =>htmlentities($this->input->post('rgDate')),
                     'sub_tel' =>htmlentities($this->input->post('sTell')),
                     'sub_phone' =>htmlentities($this->input->post('sPhone')),
                     'sub_age' =>htmlentities($this->input->post('suAge')),
                     'sub_no_logistics' =>htmlentities($this->input->post('sNlogistics')),
                     'persondis' =>htmlentities($this->input->post('personDis')),
                     'natffiliation_name' =>htmlentities($this->input->post('natffiliatId')),
                     'dis_id' =>htmlentities($this->input->post('disId')),
                     'dis_note' =>htmlentities($this->input->post('disNote')),
                     'reg_id' =>htmlentities($this->input->post('regId')),
                     'work_id' =>htmlentities($this->input->post('workId')),
                     'soci_id' =>htmlentities($this->input->post('socId')),
                     'eco_id' =>htmlentities($this->input->post('ecomId')),
                     'edu_id' =>htmlentities($this->input->post('eduCid')),
                     'workplace_name' =>htmlentities($this->input->post('sworkPid')),
                     'familymemb' =>htmlentities($this->input->post('famAmemb')),
                     'malememb' =>htmlentities($this->input->post('malEmemb')),
                     'femalememb' =>htmlentities($this->input->post('femAmemb')),
                      'user_id' =>htmlentities($parID),
                     'newsDate' =>htmlentities(date('Y/m/d H:i:s')));
          $rs = $this->Subscribersmdl->save('subscriber_tbl',$data);
        
          $this->load->view('super/pages/Subscribers/addadmin',$data);
        if(!$rs)
        redirect('home/Subscriberslist');
        else
        echo "Faild!"; 
		}
		
	}    // تهاية نموذج إدخال المشتركين
    
  		public function Modify($id = NULL){
            
			$this->output->append_title(' تعديل بيانات المشتركين');
        $data['rec'] = $this->Subscribersmdl->get_by_id($id);
         $data['recal'] = $this->Subscribersmdl->get_by_idall();
       $data['recc'] = $this->Subscribersmdl->get_by_reg_id();
             $data['recsoci'] = $this->Subscribersmdl->get_by_soci_id();
             $data['receco'] = $this->Subscribersmdl->get_by_eco_id();
             $data['recwork'] = $this->Subscribersmdl->get_by_work_id();
             $data['recedu'] = $this->Subscribersmdl->get_by_edu_id();
             $data['recdis'] = $this->Subscribersmdl->get_by_dis_id();
            
        		$this->form_validation->set_rules('fulllName', 'الاسم', 'required');
      $this->form_validation->set_rules('idNumbers', 'رقم الهوية', 'trim|required|min_length[9]|max_length[9]');
         $this->form_validation->set_rules('sTell', 'رقم الجوال', 'trim|required|min_length[7]|max_length[7]');
         $this->form_validation->set_rules('sPhone', 'رقم الهاتف', 'trim|required|min_length[7]|max_length[7]');
 	if($this->form_validation->run() == FALSE){
        $this->load->view('super/pages/Subscribers/edit', $data);
      	}else{
        $data = array('sub_fulllname'=>htmlentities($this->input->post('fulllName')),
                     'id_number' =>htmlentities($this->input->post('idNumbers')),
                     'full_address' =>htmlentities($this->input->post('flAddress')),
                     'sub_gender' =>htmlentities($this->input->post('suGender')),
                     'age' =>htmlentities($this->input->post('aGe')),
                     'reg_date' =>htmlentities($this->input->post('rgDate')),
                     'sub_tel' =>htmlentities($this->input->post('sTell')),
                     'sub_phone' =>htmlentities($this->input->post('sPhone')),
                     'sub_age' =>htmlentities($this->input->post('suAge')),
                     'sub_no_logistics' =>htmlentities($this->input->post('sNlogistics')),
                     'persondis' =>htmlentities($this->input->post('personDis')),
                     'natffiliation_name' =>htmlentities($this->input->post('natffiliatId')),
                     'dis_id' =>htmlentities($this->input->post('disIId')),
                     'dis_note' =>htmlentities($this->input->post('disNote')),
                     'reg_id' =>htmlentities($this->input->post('regId')),
                     'work_id' =>htmlentities($this->input->post('workId')),
                     'soci_id' =>htmlentities($this->input->post('socId')),
                     'eco_id' =>htmlentities($this->input->post('ecomId')),
                     'edu_id' =>htmlentities($this->input->post('eduCid')),
                     'workplace_name' =>htmlentities($this->input->post('sworkPid')),
                     'familymemb' =>htmlentities($this->input->post('famAmemb')),
                     'malememb' =>htmlentities($this->input->post('malEmemb')),
                     'femalememb' =>htmlentities($this->input->post('femAmemb')),
                     'newsDate' =>htmlentities(date('Y/m/d H:i:s')));
        $this->Subscribersmdl->update($id,$data);
       redirect('home/Subscriberslist');
        
      }
        }
    
		public function views($id = NULL){
            
			$this->output->append_title(' عرض بيانات المشتركين');
        $data['rec'] = $this->Subscribersmdl->get_by_id($id);
         $data['recal'] = $this->Subscribersmdl->get_by_idall();
       $data['recc'] = $this->Subscribersmdl->get_by_reg_id();
             $data['recsoci'] = $this->Subscribersmdl->get_by_soci_id();
             $data['receco'] = $this->Subscribersmdl->get_by_eco_id();
             $data['recwork'] = $this->Subscribersmdl->get_by_work_id();
             $data['recedu'] = $this->Subscribersmdl->get_by_edu_id();
             $data['recdis'] = $this->Subscribersmdl->get_by_dis_id();
            $this->load->view('super/pages/Subscribers/details', $data);
        
        }
    

    
      public function deleteCat($id){
      	$this->Subscribersmdl->delete($id);
      	 redirect('home/Subscriberslist');
      }
    
    
   function action()
 {
         if(@$_SESSION['adminisread'] == 2){
  $this->load->model("subscribersmdl");
  $this->load->library("excel");
  $object = new PHPExcel();

  $object->setActiveSheetIndex(0);

  $table_columns = 
    array("الاسم", "رقم الهوية", "رقم التموين", "العنوان", "رقم الجوال","رقم الهاتف","تاريخ الميلاد","تاريخ التسجيل");

  $column = 0;

  foreach($table_columns as $field)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
   $column++;
  }

  $employee_data = $this->subscribersmdl->fetch_dataas();

  $excel_row = 2;

  foreach($employee_data as $row)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->sub_fulllname);
   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->id_number);
   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->sub_no_logistics);
   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->full_address);
   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->sub_tel);
    $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->sub_phone);
    $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->sub_age);
    $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->reg_date);
   $excel_row++;
  }

  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="بيانات المشتركين.xls"');
  $object_writer->save('php://output');
         }
 }
 

    
       function actionad()
 {
           
  $this->load->model("subscribersmdl");
  $this->load->library("excel");
  $object = new PHPExcel();
 $userID = $this->session->userdata('adminid');
  $object->setActiveSheetIndex(0);

  $table_columns = 
    array("الاسم", "رقم الهوية", "رقم التموين", "العنوان", "رقم الجوال","رقم الهاتف","تاريخ الميلاد","تاريخ الاإنتساب");

  $column = 0;

  foreach($table_columns as $field)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
   $column++;
  }

  $employee_data = $this->subscribersmdl->fetch_dataas_admin($userID);

  $excel_row = 2;

  foreach($employee_data as $row)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->sub_fulllname);
   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->id_number);
   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->sub_no_logistics);
   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->full_address);
   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->sub_tel);
    $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->sub_phone);
    $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->sub_age);
    $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->reg_date);
   $excel_row++;
  }

  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="بيانات المشتركين.xls"');
  $object_writer->save('php://output');
 }
 

}