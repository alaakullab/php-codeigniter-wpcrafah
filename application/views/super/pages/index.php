
<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

								أهلا وسهلا بك عزيزي
									<strong class="green">
										 <?php echo @$_SESSION['admnickname'] ; ?>
									</strong>,


 في لوحة التحكم الخاصة بك

</div>							
<div class="col-sm-12 infobox-container">

										<div class="infobox infobox-green">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-comments"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">  
                                                    <?php
                                                   $aid= @$_SESSION['adminid'] ;
           $sql ="SELECT * FROM tbl_messages WHERE reciverid = $aid ";
$query = $this->db->query($sql);
                if($query->num_rows() > 99){
                echo "+99";
                    }else{
                     echo $query->num_rows();
                }
         ?>
                                                </span>
												<div class="infobox-content">الرسائل الواردة</div>
											</div>
<?php          
$sql ="SELECT * FROM tbl_messages WHERE reciverid = $aid and Isread = 0 ";
$query = $this->db->query($sql);
?>
        <?php if ($query->num_rows() <= 0){echo '<span class="green">لا يوجد رسائل غير مقروءة</span>';}else{ ?>
<div style="color:red;" class="stat ">غير مقروءة 
<?php

                   if($query->num_rows() > 99){
                echo "+99";
                    }else{
                     echo $query->num_rows();
                }
         ?>
                                            </div><?php } ?>
										</div>

										<div class="infobox infobox-blue">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-user "></i >
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">
                                                                    <?php
                                                    
            $sql ="SELECT * FROM subscriber_tbl  ";
$query = $this->db->query($sql);
              if($query->num_rows() > 9999){
                echo "+9999";
                    }else{
                     echo $query->num_rows();
                }
           ?>
                                                </span>
												<div class="infobox-content">عدد المشتركين</div>
											</div>

									
										</div>

										<div class="infobox infobox-pink">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-tasks"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">
<?php
                                                    
            $sql ="SELECT * FROM activites_model_tbl";
$query = $this->db->query($sql);
              if($query->num_rows() > 9999){
                echo "+9999";
                    }else{
                     echo $query->num_rows();
                }
           ?>
               
                                                </span>
												<div class="infobox-content">عدد الأنشطة</div>
											</div>
										</div>

										<div class="infobox infobox-red">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-flask"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">
<?php
                                                    
            $sql ="SELECT * FROM initiatives_model_tbl  ";
$query = $this->db->query($sql);
              if($query->num_rows() > 9999){
                echo "+9999";
                    }else{
                     echo $query->num_rows();
                } ?>
                                                </span>
												<div class="infobox-content">عدد المبادرات</div>
											</div>
										</div>

    
    
										<div class="infobox infobox-orange">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-users"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">
                     <?php
                                                    
            $sql ="SELECT * FROM tbl_user WHERE parentid = $aid ";
$query = $this->db->query($sql);
              if($query->num_rows() > 9){
                echo "+9";
                    }else{
                     echo $query->num_rows();
                }
           ?>
                                                </span>
												<div class="infobox-content">المستخدمين</div>
											</div>
										</div>

										

									</div>     
<div class="vspace-12-sm"></div>

