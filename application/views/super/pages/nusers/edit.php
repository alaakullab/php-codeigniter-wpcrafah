
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
   
    </head>
<body>
 
           <div class="col-lg-6"  dir="rtl">
<div class="box inverse">
    <div class="box dark"  dir="rtl">
        <div id="div-1" >
    <div class="back">
    <center>
       <table id="datatables"  align="center" style="margin:0;" class="main-table text-center table table-striped  ">
    <form action="<?=base_url(); ?>Asusers/Modify/<?= $recs['id'] ?>" method="post" enctype="multipart/form-data" >
                           
        <tr>
        <th >  </th>
        <th><center><h1>تعديل بيانات المستخدم </h1></center></th>
            
       </tr>
           
        
           <tr>  <th></th> <th>
                <div class="form-group">
        <label  for="text1" class="control-label col-lg-3">الاسم :</label>
                     <div class="col-lg-8">
                          <div class="input-group">
<span class="input-group-addon"><i class="ace-icon fa fa-user"></i></span>
                <input type="text" name="username" value="<?php  echo $recs['username']; ?>"  data-class=".live-name"  class="form-control live" required="required" placeholder="أضف اسم المستخدم " >
      
                         </div>  <span class="errname"><?php echo form_error('username'); ?></span></div></div>
                </th> <th></th></tr>
             <tr>  <th></th> <th>
                <div class="form-group">
        <label  for="text1" class="control-label col-lg-3">الكنية :</label>
                     <div class="col-lg-8">
                          <div class="input-group">
<span class="input-group-addon"><i class="ace-icon fa fa-user"></i></span>
                <input type="text" name="nicknames" value="<?php  echo $recs['nickname']; ?>"  data-class=".live-nicknames"  class="form-control live" required="required" placeholder="أضف الكنية هنا" >
        <span class="errname"></span>
                         </div></div></div>
                </th> <th></th></tr>
                 <tr>  <th></th> <th>
                      <div class="form-group">
       <label  for="text1" class="control-label col-lg-3">كلمة المرور : </label>
             <div class="col-lg-8">
                 <div class="input-group">
  <span class="input-group-addon"><i class="ace-icon fa fa-key " aria-hidden="true"></i></span>
                 <input type="password" name="password" required="required" class="form-control">
              
                 </div>  <span class="errname"><?php echo form_error('password'); ?></span></div></div>
                </th> <th></th></tr>
                 <tr>  <th></th> <th>
                       <div class="form-group">
        <label  for="text1" class="control-label col-lg-3">الإيميل  : </label>
        <div class="col-lg-8">
    <div class="input-group margin-bottom-sm">
  <span class="input-group-addon"><i class="fa fa-envelope-o " aria-hidden="true"></i></span>
        <input type="email" name="email" value="<?php echo $recs['email'] ?>"  data-class=".live-email"  class="form-control live">
     
            </div>   <span class="errname"><?php echo form_error('email'); ?></span></div></div>
                </th> <th></th></tr>
                 <tr>  <th></th> <th>
                
                       <div class="form-group">
        <label  for="text1" class="control-label col-lg-3">الجوال : </label>
             <div class="col-lg-8">
                   <div class="input-group">
<span class="input-group-addon"><i class="ace-icon fa fa-phone"></i></span>
            <input type="tel"  name="Phone" value="<?php  echo  $recs['tell']; ?>"  data-class=".live-mobile"  class="form-control live">
       <span class="input-group-addon"><i class="ace-icon"></i>059</span>
          </div>  <span class="errname"><?php echo form_error('Phone'); ?></span></div>	</div>
                </th> <th></th></tr>
                 <tr>  <th></th> <th>
                       <div class="form-group">
         <label  for="text1" class="control-label col-lg-3">العنوان : </label>
            <div class="col-lg-8">
                    <div class="input-group margin-bottom-sm">
  <span class="input-group-addon"><i class="fa fa-home  " aria-hidden="true"></i></span>
            <input type="text" name="addres" value="<?php  echo $recs['addres'];?>"   data-class=".live-addres" class="form-control live">
                        <span class="errname"></span></div></div></div>
            </th> <th></th></tr>

             <tr>  <th></th> <th>
           <div class="col-lg-8">
               <center> 
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-3"></label>
                    <div class="col-lg-8">
           <center>   
    <p id="submit"><input type="submit"  class="btn btn-primary btn-block"  name="submod" value="تعديل "> 
               </p></center>
                        </div></div></center></div>
    
                     </th> <th></th></tr>       
    </form>
             </table>   
    </center>
            </div></div>
        </div></div></div>
      
          
    <div class="col-lg-6">
<div class="box inverse">

<div id="div-2" class="body">
<table id="datatables"  align="center" style="margin:0;" class="main-table text-center table table-striped  table-bordered  ">

<tr>
<th></th><th> 
<div  class="hr dotted ace-thumbnails clearfix"></div>
    <div  id="user-profile-1"  class="user-profile row">
<center>
   
<a href="<?php 
        if($recs['imgsrc']==""){ ?>assets/image/users/user.png<?php }else{ 
            ?>assets/image/users/<?php  echo $recs['imgsrc']; ?><?php  } ?>" data-rel="colorbox" class="cboxElement">
    <span  class="profile-picture" style=" no-repeat center;border-radius:50%; ">
      <?php 
           if($recs['imgsrc']==""){ ?>
    <img id="avatar" class="editable img-responsive editable-click editable-empty" alt="Alex's Avatar"src="assets/image/users/user.png" style="display: block;border-radius:50%" width="150" height="150">
          <?php }else{
            ?>
    
    <img id="avatar2" class="editable img-responsive editable-click editable-empty" alt="Alex's Avatar" src="assets/image/users/<?php  echo $recs['imgsrc']; ?> " style="display: block; border-radius:50%;"  width="150" height="150">
      <?php  } ?>
    </span>  <div class="text">
												
												</div>
											</a> 
        </center>
    </div>

 </th>
    </tr>    

<th> <h4  for="text1" >الاسم :</h4></th><th> <h4 class="control-label  live-name"><?php echo $recs['username']; ?></h4></th>
     <tr>
<th><h4  for="text1"  >الإيميل :</h4></th><th><h4  class="control-label  live-email"><?php  echo $recs['email'] ?></h4> </th>  
       </tr>
     <tr>
<th><h4  for="text1"  >الجوال :</h4></th><th><h4  class="control-label  live-mobile"><?php   echo $recs['tell']; ?></h4> </th>  
       </tr>
     <tr>
<th><h4  for="text1"  >العنوان :</h4></th><th><h4  class="control-label  live-addres"><?php  echo $recs['addres']; ?></h4> </th>  
       </tr>
    

    
    </table>
    </div> 
    
    
            
        </div></div>
    


        </body>
</html>