<?php

class Sampleactiv extends CI_Controller{

  function __construct(){
		parent::__construct();
		$this->load->model('Sampleactivmdl');
		$this->load->model('Messegemdl');

	
	$this->_init();
	}

	private function _init(){
		$this->output->set_title("لوحة التحكم :: إدارة الأنشطة");
		$this->output->set_template('theme');
    }
    
    
     	public function views($id = NULL){
        $this->output->append_title('عرض بيانات النشاط');
                      $userID = $this->session->userdata('adminid');
      	 $data['rec'] = $this->Sampleactivmdl->get_by_id($id);
    $data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);

             $this->load->view('super/pages/sampleactiv/details', $data);
      }
    
    
	public function addsample(){
		$this->output->append_title('إضافة نشاط');
          $userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
		$this->form_validation->set_rules('actiDiscrip', 'وصف النشاط', 'required');
        $this->form_validation->set_rules('actiPlace', 'مكان إنعقاد النشاط', 'required');

		 if($this->form_validation->run() == FALSE){
         		$this->load->view('super/pages/sampleactiv/add',$data);
         	}else{
   				$data = array('activ_prog_id' =>htmlentities($this->input->post('actiProgId')),
                              'activ_discrip' =>htmlentities($this->input->post('actiDiscrip')),
                             'activ_place' =>htmlentities($this->input->post('actiPlace')),
                             'activ_duration' =>htmlentities($this->input->post('actiDuration')),
                              'activ_type_id' =>htmlentities($this->input->post('actiTypeId')),
                              'activ_organisers' =>htmlentities($this->input->post('actiOrganis')),
                              'activ_date' =>htmlentities($this->input->post('actiDate')),
                               'user_id' =>htmlentities($userID),
                             'activ_male_up18' =>htmlentities($this->input->post('actiMaleUp18')),
                             'activ_male_don18' =>htmlentities($this->input->post('actiMaleDon18')),
                              'needs_male_up18' =>htmlentities($this->input->post('needMaleUp18')),
                              'needs_male_don18' =>htmlentities($this->input->post('needMaleDon18')),
                              'activ_female_up18' =>htmlentities($this->input->post('actiFemaleUp18')),
                              'activ_female_don18' =>htmlentities($this->input->post('actiFemaleDon18')),
                              'needds_female_up18d' =>htmlentities($this->input->post('needFemaleUp18')),
                              'needs_female_don18' =>htmlentities($this->input->post('needFemaleDon18')),
                              'activ_notes' =>htmlentities($this->input->post('actiNote'))
                        
                             );
          $rs = $this->Sampleactivmdl->save('activites_model_tbl',$data);
          $this->load->view('super/pages/sampleactiv/add',$data);
        if(!$rs)
        redirect('home/sampleactivlist');
        else
        echo "Faild!"; 
		} }
   
public function addsampleadd(){
		$this->output->append_title('إضافة نشاط');
       $userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
		$this->form_validation->set_rules('actiDiscrip', 'وصف النشاط', 'required');
        $this->form_validation->set_rules('actiPlace', 'مكان إنعقاد النشاط', 'required');
 $parID = $_SESSION['admparentid'];
		 if($this->form_validation->run() == FALSE){
         		$this->load->view('super/pages/sampleactiv/addadmin',$data);
         	}else{
   				$data = array('activ_prog_id' =>htmlentities($this->input->post('actiProgId')),
                              'activ_discrip' =>htmlentities($this->input->post('actiDiscrip')),
                             'activ_place' =>htmlentities($this->input->post('actiPlace')),
                             'activ_duration' =>htmlentities($this->input->post('actiDuration')),
                              'activ_type_id' =>htmlentities($this->input->post('actiTypeId')),
                              'activ_organisers' =>htmlentities($this->input->post('actiOrganis')),
                              'activ_date' =>htmlentities($this->input->post('actiDate')),
                                'user_id' =>htmlentities($parID),
                             'activ_male_up18' =>htmlentities($this->input->post('actiMaleUp18')),
                             'activ_male_don18' =>htmlentities($this->input->post('actiMaleDon18')),
                              'needs_male_up18' =>htmlentities($this->input->post('needMaleUp18')),
                              'needs_male_don18' =>htmlentities($this->input->post('needMaleDon18')),
                              'activ_female_up18' =>htmlentities($this->input->post('actiFemaleUp18')),
                              'activ_female_don18' =>htmlentities($this->input->post('actiFemaleDon18')),
                              'needds_female_up18d' =>htmlentities($this->input->post('needFemaleUp18')),
                              'needs_female_don18' =>htmlentities($this->input->post('needFemaleDon18')),
                              'activ_notes' =>htmlentities($this->input->post('actiNote'))
                        
                             );
          $rs = $this->Sampleactivmdl->save('activites_model_tbl',$data);
          $this->load->view('super/pages/sampleactiv/addadmin',$data);
        if(!$rs)
        redirect('Sampleactiv/addsampleadd');
        else
        echo "Faild!"; 
		} }
   
     	public function Modify($id = NULL){
        $this->output->append_title('تعديل بيانات النشاط');
      	 $data['rec'] = $this->Sampleactivmdl->get_by_id($id);
       $userID = $this->session->userdata('adminid');
$data['mesge'] = $this->Messegemdl->getmsg('tbl_messages',$userID);
      	$this->form_validation->set_rules('actiDiscrip', 'وصف النشاط', 'required');
        $this->form_validation->set_rules('actiPlace', 'مكان إنعقاد النشاط', 'required');
      	if($this->form_validation->run() == FALSE){
        $this->load->view('super/pages/sampleactiv/edit', $data);
      	}else{
         				$data = array('activ_prog_id' =>htmlentities($this->input->post('actiProgId')),
                              'activ_discrip' =>htmlentities($this->input->post('actiDiscrip')),
                             'activ_place' =>htmlentities($this->input->post('actiPlace')),
                             'activ_duration' =>htmlentities($this->input->post('actiDuration')),
                              'activ_type_id' =>htmlentities($this->input->post('actiTypeId')),
                              'activ_organisers' =>htmlentities($this->input->post('actiOrganis')),
                              'activ_date' =>htmlentities($this->input->post('actiDate')),
                             'activ_male_up18' =>htmlentities($this->input->post('actiMaleUp18')),
                             'activ_male_don18' =>htmlentities($this->input->post('actiMaleDon18')),
                              'needs_male_up18' =>htmlentities($this->input->post('needMaleUp18')),
                              'needs_male_don18' =>htmlentities($this->input->post('needMaleDon18')),
                              'activ_female_up18' =>htmlentities($this->input->post('actiFemaleUp18')),
                              'activ_female_don18' =>htmlentities($this->input->post('actiFemaleDon18')),
                              'needds_female_up18d' =>htmlentities($this->input->post('needFemaleUp18')),
                              'needs_female_don18' =>htmlentities($this->input->post('needFemaleDon18')),
                              'activ_notes' =>htmlentities($this->input->post('actiNote'))
                        
                             );
        $this->Sampleactivmdl->update($id,$data);
        redirect('home/sampleactivlistadmin');
		}  }
    
    
    
        
   function action()
 {
        if(@$_SESSION['adminisread'] == 2){
  $this->load->model("sampleactivmdl");
  $this->load->library("excel");
  $object = new PHPExcel();

  $object->setActiveSheetIndex(0);

  $table_columns = 
    array("وصف النشاط", "مكان إنعقاد النشاط", "مدة النشاط بالأيام", "الجهة المنظمة", "تاريخ النشاط","ملاحظات النشاط");

  $column = 0;

  foreach($table_columns as $field)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
   $column++;
  }

  $employee_data = $this->sampleactivmdl->fetch_dataas();

  $excel_row = 2;

  foreach($employee_data as $row)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->activ_discrip);
   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->activ_place);
   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->activ_duration);
   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->activ_organisers);
   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->activ_date);
    $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->activ_notes);

   $excel_row++;
  }

  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="بيانات الأنشطة.xls"');
  $object_writer->save('php://output');
        }
 }
 
    
    
       function actionadd()
 {
  $this->load->model("sampleactivmdl");
  $this->load->library("excel");
  $object = new PHPExcel();
 $userID = $this->session->userdata('adminid');

  $object->setActiveSheetIndex(0);

  $table_columns = 
    array("وصف النشاط", "مكان إنعقاد النشاط", "مدة النشاط بالأيام", "الجهة المنظمة", "تاريخ النشاط","ملاحظات النشاط");

  $column = 0;

  foreach($table_columns as $field)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
   $column++;
  }

  $employee_data = $this->sampleactivmdl->fetch_dataas_admin($userID);

  $excel_row = 2;

  foreach($employee_data as $row)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->activ_discrip);
   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->activ_place);
   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->activ_duration);
   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->activ_organisers);
   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->activ_date);
    $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->activ_notes);

   $excel_row++;
  }

  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="بيانات الأنشطة.xls"');
  $object_writer->save('php://output');
 }
 
    
    
    
 }