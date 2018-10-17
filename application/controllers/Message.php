<?php

class Message extends CI_Controller {

	public function index(){
	
		$data['message'] = $this->db->select('*')->from('message')->order_by('id','desc')->get();
		$this->load->view('message',$data);
	
	}

  
		public function detail(){

		$detail = $this->db->select('*')->from('tbl_messages')->where('id',$this->input->post('id'))->get()->row();

		if($detail){

				$this->db->where('id',$this->input->post('id'))->update('tbl_messages',array('Isread'=>1));
    
											
       //     "	<a href='assets/upload/$detail->senderfile' class='attached-file'>";
            
			$arr['name'] = $detail->sendername;
			$arr['email'] = $detail->email;
			$arr['subject'] = $detail->title;
			$arr['message'] = $detail->message;
			$arr['sendDate'] = $detail->sendDate;
            $arr['senderfile'] =  $detail->senderfile;
			$arr['update_count_message'] = $this->db->where('Isread',0)->count_all_results('tbl_messages');
			$arr['success'] = true;

		} else {

			$arr['success'] = false;
		}

		
		
		echo json_encode($arr);

	}

}