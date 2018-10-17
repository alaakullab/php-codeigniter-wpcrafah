
    <div class="col-lg-6"  dir="rtl">
<div class="box inverse">
    <div class="box dark"  dir="rtl">
        <div id="div-1" >
    <div class="back">
    <center>
       <table id="datatables"  align="center" style="margin:0;" class="main-table text-center table table-striped  ">
  <form class="form-horizontal" role="form" action="<?=base_url()?>asusers/adduserad"  method="post" >
          <tr><th></th>
<th><center><h1>تسجيل المستخدم </h1></center></th>
              <th></th>
              </tr>
           <tr>  <th></th> <th>
                <div class="form-group">
       <label for="text1" class="control-label col-lg-3">اسم المتسخدم : </label>
                      <div class="col-lg-8">
            <input type="text" name="username"  data-class=".live-name" class="form-control live">
                       <span class="errname"><?php echo form_error('username'); ?></span> </div></div>
                </th> <th></th></tr>
           <tr>  <th></th> <th>
                <div class="form-group">
       <label for="text1" class="control-label col-lg-3">الكنية : </label>
                      <div class="col-lg-8">
            <input type="text" name="nicknames"  data-class=".live-nicknames" class="form-control live">
                         </div></div>
                </th> <th></th></tr>
                 <tr>  <th></th> <th>
                <div class="form-group">
       <label for="text1" class="control-label col-lg-3">كلمة المرور : </label>
                   <div class="col-lg-8">      
        <input type="password" name="password" class="form-control " >
                    <span class="errname"><?php echo form_error('password'); ?></span> </div></div>
                      </th> <th></th></tr>
                 <tr>  <th></th> <th>
                <div class="form-group"> 
        <label for="text1" class="control-label col-lg-3">الإيميل : </label>
                     <div class="col-lg-8">  
                    <input type="email" name="email" data-class=".live-email" class="form-control live" >
                     <span class="errname"><?php echo form_error('email'); ?></span></div></div>
           </th> <th></th></tr>
                 <tr>  <th></th> <th>
                <div class="form-group">
        <label for="text1" class="control-label col-lg-3">الجوال : </label>
                     <div class="col-lg-8">  
                    <input type="number" name="Phone" data-class=".live-mobile" class="form-control live">
                      <span class="errname"><?php echo form_error('Phone'); ?></span></div></div>
           </th> <th></th></tr>
                 <tr>  <th></th> <th>
                <div class="form-group">
         <label for="text1" class="control-label col-lg-3">العنوان : </label>
                     <div class="col-lg-8">  
                    <input type="text" name="addres"  data-class=".live-addres"  class="form-control live">
                         <span class="errname"></span></div></div>
                      </th> <th></th></tr>
      
        <tr>  <th></th> <th>

                                                            <div class="form-group">
                <label class="col-sm-4 control-label no-padding-right" for="form-field-1">تفعيل كمحرر :</label>

<div class="col-sm-2">
            
         <input type="checkbox" id="checkbox"  class="ace ace-switch ace-switch-6" onchange="showCD(this.value)" name="cbact" />
                               <span class="lbl"></span>                                 </div></div>
             
                      </th> <th></th></tr>
             <tr>  <th></th> <th>
           <div class="col-lg-8">
               <center> 
                    <div class="form-group">
                        <label for="text1" class="control-label col-lg-3"></label>
                    <div class="col-lg-8">
           <center>   
               <p id="submit"><input type="submit" class="btn btn-info btn-block" name="submit" value="تسجيل "> </p></center> 
               
                        </div></div>
               </center>
          </div>
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
<td></td><td>  <img src="assets/image/users/user.png" widtd="150" height="150"></td>
    </tr>    

<td> <h4  for="text1" >الاسم :</h4></td><td> <h4 class="control-label  live-name"></h4></td>
     <tr>
<td><h4  for="text1"  >الإيميل :</h4></td><td><h4  class="control-label  live-email"></h4> </td>  
       </tr>
     <tr>
<td><h4  for="text1"  >الجوال :</h4></td><td><h4  class="control-label  live-mobile"></h4> </td>  
       </tr>
     <tr>
<td><h4  for="text1"  >العنوان :</h4></td><td><h4  class="control-label  live-addres"></h4> </td>  
       </tr>
    

    
    </table>
    </div> 
    
    
            
        </div></div>
