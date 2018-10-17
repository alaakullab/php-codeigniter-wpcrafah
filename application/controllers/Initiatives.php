<?php

class Initiatives extends CI_Controller{

  function __construct()
	{
		parent::__construct();
		$this->load->model('Initiativesmdl');
		//$this->load->library('form_validation');
	
	$this->_init();
	}

	private function _init()
	{
		$this->output->set_title("لوحة التحكم :: إدارة المبادرات ");
		$this->output->set_template('theme');

	}
	public function views($id = NULL){
        $this->output->append_title('عرض بيانات المبادرة');
      	 $data['rec'] = $this->Initiativesmdl->get_by_id($id);
            $this->load->view('super/pages/initiative/details', $data);
       
      }
    

	public function addiniti(){
		$this->output->append_title('إضافة مبادرة');
  $userID = $this->session->userdata('adminid');
        $this->form_validation->set_rules('initiTitle', 'العنوان', 'required');
		 if($this->form_validation->run() == FALSE){
         		$this->load->view('super/pages/initiative/add');
         	}else{
   				$data = array('initiat_title' =>htmlentities($this->input->post('initiTitle')),
                              'initiat_date' =>htmlentities($this->input->post('initiAdate')),
                             'initiat_activ' =>htmlentities($this->input->post('initiActiv')),
                             'initiat_sponsor' =>htmlentities($this->input->post('initiSponsor')),
                              'initiat_place' =>htmlentities($this->input->post('initiPlace')),
                              'initiat_days' =>htmlentities($this->input->post('initiDays')),
                              'initiat_parici' =>htmlentities($this->input->post('initiParici')),
                             'initiat_costs' =>htmlentities($this->input->post('initiCosts')),
                             'initiat_trainer' =>htmlentities($this->input->post('initiTrainer')),
                              'initiat_mael_up18' =>htmlentities($this->input->post('initiatMaelup18')),
                              'initiat_mael_don18' =>htmlentities($this->input->post('initiMaeldon18')),
                              'initiat_dis_mael_up18' =>htmlentities($this->input->post('initiDismaelup18')),
                              'initiat_dis_mael_don18' =>htmlentities($this->input->post('initiDismaeldon18')),
                              'initiat_femael_up18' =>htmlentities($this->input->post('initiFemaelup18')),
                              'initiat_femael_don18' =>htmlentities($this->input->post('initiFemaeldon18')),
                              'initiat_dis_femael_up18' =>htmlentities($this->input->post('initidisFemaelUp18')),
                              'initiat_dis_femael_don18' =>htmlentities($this->input->post('initidisFemaeldon18')),
                                'user_id	' =>htmlentities($userID),
                              'initiat_note' =>htmlentities($this->input->post('initiNote'))
                        
                             );
          $rs = $this->Initiativesmdl->save('initiatives_model_tbl',$data);
          $this->load->view('super/pages/initiative/add',$data);
        if(!$rs)
        redirect('home/Initiativeslist');
        else
        echo "Faild!"; 
		} 
		
	}
  
	public function addinitiadmin(){
		$this->output->append_title('إضافة مبادرة');
   $parID = $_SESSION['admparentid'];
        $this->form_validation->set_rules('initiTitle', 'العنوان', 'required');
		 if($this->form_validation->run() == FALSE){
         		$this->load->view('super/pages/initiative/addadmin');
         	}else{
   				$data = array('initiat_title' =>htmlentities($this->input->post('initiTitle')),
                              'initiat_date' =>htmlentities($this->input->post('initiAdate')),
                             'initiat_activ' =>htmlentities($this->input->post('initiActiv')),
                             'initiat_sponsor' =>htmlentities($this->input->post('initiSponsor')),
                              'initiat_place' =>htmlentities($this->input->post('initiPlace')),
                              'initiat_days' =>htmlentities($this->input->post('initiDays')),
                              'initiat_parici' =>htmlentities($this->input->post('initiParici')),
                             'initiat_costs' =>htmlentities($this->input->post('initiCosts')),
                             'initiat_trainer' =>htmlentities($this->input->post('initiTrainer')),
                              'initiat_mael_up18' =>htmlentities($this->input->post('initiatMaelup18')),
                              'initiat_mael_don18' =>htmlentities($this->input->post('initiMaeldon18')),
                              'initiat_dis_mael_up18' =>htmlentities($this->input->post('initiDismaelup18')),
                              'initiat_dis_mael_don18' =>htmlentities($this->input->post('initiDismaeldon18')),
                              'initiat_femael_up18' =>htmlentities($this->input->post('initiFemaelup18')),
                              'initiat_femael_don18' =>htmlentities($this->input->post('initiFemaeldon18')),
                              'initiat_dis_femael_up18' =>htmlentities($this->input->post('initidisFemaelUp18')),
                              'initiat_dis_femael_don18' =>htmlentities($this->input->post('initidisFemaeldon18')),
                                'user_id' =>htmlentities($parID),
                              'initiat_note' =>htmlentities($this->input->post('initiNote'))
                        
                             );
          $rs = $this->Initiativesmdl->save('initiatives_model_tbl',$data);
          $this->load->view('super/pages/initiative/addadmin',$data);
        if(!$rs)
        redirect('Initiatives/addinitiadmin');
        else
        echo "Faild!"; 
		} 
		
	}
  

     	public function Modify($id = NULL){
        $this->output->append_title('تعديل المبادرات');
      	 $data['rec'] = $this->Initiativesmdl->get_by_id($id);
        $this->form_validation->set_rules('initiTitle', 'العنوان', 'required');
      	if($this->form_validation->run() == FALSE){
        $this->load->view('super/pages/initiative/edit', $data);
      	}else{
    			$data = array('initiat_title' =>htmlentities($this->input->post('initiTitle')),
                              'initiat_date' =>htmlentities($this->input->post('initiAdate')),
                             'initiat_activ' =>htmlentities($this->input->post('initiActiv')),
                             'initiat_sponsor' =>htmlentities($this->input->post('initiSponsor')),
                              'initiat_place' =>htmlentities($this->input->post('initiPlace')),
                              'initiat_days' =>htmlentities($this->input->post('initiDays')),
                              'initiat_parici' =>htmlentities($this->input->post('initiParici')),
                             'initiat_costs' =>htmlentities($this->input->post('initiCosts')),
                             'initiat_trainer' =>htmlentities($this->input->post('initiTrainer')),
                              'initiat_mael_up18' =>htmlentities($this->input->post('initiatMaelup18')),
                              'initiat_mael_don18' =>htmlentities($this->input->post('initiMaeldon18')),
                              'initiat_dis_mael_up18' =>htmlentities($this->input->post('initiDismaelup18')),
                              'initiat_dis_mael_don18' =>htmlentities($this->input->post('initiDismaeldon18')),
                              'initiat_femael_up18' =>htmlentities($this->input->post('initiFemaelup18')),
                              'initiat_femael_don18' =>htmlentities($this->input->post('initiFemaeldon18')),
                              'initiat_dis_femael_up18' =>htmlentities($this->input->post('initidisFemaelUp18')),
                              'initiat_dis_femael_don18' =>htmlentities($this->input->post('initidisFemaeldon18')),
                              'initiat_note' =>htmlentities($this->input->post('initiNote'))
                        
                             );
        $this->Initiativesmdl->update($id,$data);
        redirect('home/Initiativeslist');
		}
      }
    
       
      public function deleteiniti($id){
      	$this->Initiativesmdl->delete($id);
      	 redirect('home/Initiativeslist');
      }

 
    
   function action()
 {
         if(@$_SESSION['adminisread'] == 2){
  $this->load->model("initiativesmdl");
  $this->load->library("excel");
  $object = new PHPExcel();

  $object->setActiveSheetIndex(0);

  $table_columns = 
    array("عنوان المبادرة", "تاريخ المبادرة", "أنشطة المبادرة", "الجهة الممولة", "مكان إنعقاد المبادرة","الجهات المشاركة " );

  $column = 0;

  foreach($table_columns as $field)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
   $column++;
  }

  $employee_data = $this->initiativesmdl->fetch_dataas();

  $excel_row = 2;

  foreach($employee_data as $row)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->initiat_title);
   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->initiat_date);
   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->initiat_activ);
   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->initiat_sponsor);
   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->initiat_place);
    $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->initiat_parici);

   $excel_row++;
  }

  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="بيانات المشتركين.xls"');
  $object_writer->save('php://output');
         }
 }
 

    
       function actionadd()
 {
           
  $this->load->model("initiativesmdl");
  $this->load->library("excel");
  $object = new PHPExcel();
 $userID = $this->session->userdata('adminid');
  $object->setActiveSheetIndex(0);

  $table_columns = 
   array("عنوان المبادرة", "تاريخ المبادرة", "أنشطة المبادرة", "الجهة الممولة", "مكان إنعقاد المبادرة","الجهات المشاركة " );

  $column = 0;

  foreach($table_columns as $field)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
   $column++;
  }

  $employee_data = $this->initiativesmdl->fetch_dataas_admin($userID);

  $excel_row = 2;

  foreach($employee_data as $row)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->initiat_title);
   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->initiat_date);
   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->initiat_activ);
   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->initiat_sponsor);
   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->initiat_place);
    $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->initiat_parici);

   $excel_row++;
  }

  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="بيانات المشتركين.xls"');
  $object_writer->save('php://output');
 }
 
    
    
    
}