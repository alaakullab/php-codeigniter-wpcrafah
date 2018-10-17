
<center>
<div  class="col-md-10">

                            <!-- START STRIPED TABLE SAMPLE -->
                            <div class="panel panel-primary">
                                <div class="panel-heading ui-draggable-handle">
                                    <h3 class="panel-title">نموذج إرسال الرسائل</h3>
                                </div>
                                <div class="panel-body">



        
<form action=""  id="id-message-form" class=" form-horizontal message-form col-xs-12" method="post"  enctype="multipart/form-data" dir="rtl">
<table  align="center"  class="table table-striped">
    <tr>
		<td colspan="3" align="center">
           <span class="succses"></span>
		</td>
	</tr>
	<tr>
		<td width="13%" style="font-weight: bolder; font-size: 16px;color:#585858;">اسم المرسل</td>
		<td  width="13%" style="font-weight: bolder; font-size: 16px;color:#585858;">:</td>
        <td>
             <div class="col-sm-6 col-xs-12">
            <div class="input-icon block col-xs-12 no-padding">
            <span class="input-icon"><input class="form-control" type="text" name="txtSender" value = "<?php echo $_SESSION['adminname']; ?>">
            <i class="ace-icon fa fa-user"></i>
            </span> 
              <span class="errname"><?php echo form_error('txtSender'); ?></span>     </div></div>
 		<span  class="msg"></span>
            
		</td>
	</tr>
		<tr>
		<td width="14%" style="font-weight: bolder; font-size: 16px;color:#585858;">اسم المستقبل</td>
		<td width="14%" style="font-weight: bolder; font-size: 16px;color:#585858;">:</td>
		<td >
                    <div class="col-sm-6 col-xs-12">
<div class="input-icon block col-xs-12 no-padding">
            <select class="form-control  " name="reciver">
			<option value="">الرجاء تحديد اسم المستخدم</option>
        <?php 
           foreach($recc as $k){ 
          ?>
                       <?php if( @$k->Isread != 0 ){ ?>
         <option value="<?php echo $k->id; ?>"><?php echo $k->username; ?></option>
   <?php
           }}

        ?>
		</select>
                        </div></div>
 		<span  class="msg"></span>
		</td>
	</tr>
		<tr>
		<td style="font-weight: bolder; font-size: 16px;color:#585858;">البريد الالكتروني</td>
		<td  style="font-weight: bolder;font-size: 16px;color:#585858;">:</td>
		<td>

        <div class="col-sm-6 col-xs-12">
<div class="input-icon block col-xs-12 no-padding">
            <input class="form-control" type="email" value = "<?= $_SESSION['adminemail']; ?>" name="txtEmail" >
    <i class="ace-icon fa fa-envelope-o"></i>
                   <span class="errname"><?php echo form_error('txtEmail'); ?></span> </div></div>
		<span  class="msg"></span>
		</td>
	</tr>
	<tr>

		<td  style="font-weight: bolder; font-size: 16px;color:#585858;">عنوان الرسالة</td>
		<td  style="font-weight: bolder; font-size: 16px;color:#585858;"> </td>
		<td>
                    <div class="col-sm-6 col-xs-12">
<div class="input-icon block col-xs-12 no-padding">
            <input class="form-control col-xs-12 " id="form-field-subject"  type="text" name="txtTitle">
    <i class="ace-icon fa fa-comment-o"></i>
    <span class="errname"><?php echo form_error('txtTitle'); ?></span></div></div>
		<span  class="msg"></span>
		</td>
	</tr>
	<tr>
		<td  style="font-weight: bolder; font-size: 16px;color:#585858;">نص الرسالة</td>
		<td  style="font-weight: bolder; font-size: 16px;color:#585858;">:</td>
		<td>
            <div class="col-sm-9">
          
              
            <textarea class="form-control" rows="7" name="txtMessage"></textarea>

            </div>
		<span  class="msg"></span>
		</td>
	</tr>	
	<tr>
      
		<td colspan="3" align="center">
             	<div class="hr hr-18 dotted"></div>

										<div class="form-group no-margin-bottom">

											<div class="col-sm-9">
												<div id="form-attachments">
                                                    
                            <input type="file" name="fleImage"  />
                                                    
												</div>
											</div>
										</div>

        <button type="submit" class=" btn btn-success btn-rect" name="btnSend">ارسال الرسالة</button>

        </td>
	</tr>
</table>
  
    
    
    

									
    
    
    
</form>
                                    </div></div></div>
        </center>











