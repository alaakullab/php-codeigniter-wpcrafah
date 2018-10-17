
      
<div class="row">

  <div class="col-lg-12 " dir="rtl">
        <div class="box "  dir="rtl">
    

<div class="col-lg-6"  dir="rtl">

    <div class="box dark"  dir="rtl">
   
        <div id="div-1" class="body"  dir="rtl">
       
            <form class="form-horizontal">

                <div class="form-group" style="padding-top:6px;">
                    <label for="text1" name="fname" class="control-label col-lg-3 ">الاسم كامل</label>

                    <div class="col-lg-8" >
                        
           <input   style="font-weight:bold;coler:black;"   readonly id="form-input-readonly " type="text"  name="fulllName" value="<?php echo $rec['sub_fulllname'] ?>" id="text1" placeholder="أدخل الاسم كامل" class="form-control ">
                               
                    </div>
                </div>
                  <br style="padding-top:6px;">
                <!-- /.form-group -->

                <div class="form-group"   style="padding-top:6px;">
                    <label class="control-label col-lg-3">رقم الهوية</label>

                    <div class="col-lg-8">
                        <input  style="font-weight:bold;"    readonly id="form-input-readonly" type="text" type="text" value="<?php echo $rec['id_number'] ?>"   name="idNumbers" placeholder="أدخل رقم الهوية " class="form-control">
                      
                    </div>
                </div>
                <!-- /.form-group -->
                  <br style="padding-top:6px;">

                <!-- /.form-group -->

        
                   <div class="form-group"  style="padding-top:6px;" >
                    <label for="pass1" class="control-label col-lg-3">العنوان كامل</label>

                    <div class="col-lg-8">
<input  style="font-weight:bold;"    readonly id="form-input-readonly" type="text" class="form-control" value="<?php echo $rec['full_address'] ?>"  type="text" id="pass1" name="flAddress" placeholder="أدخل العنوان كامل"/>

                    </div>
                </div>
                                  <br style="padding-top:6px;">

    <div class="form-group"  style="padding-top:6px;">
<label for="text1" class="control-label col-lg-3">تاريخ الإنتساب</label>

<div class="col-lg-8" >
<input  style="font-weight:bold;"    readonly id="form-input-readonly" type="text" type="date" value="<?php echo $rec['reg_date'] ?>" name="rgDate" id="adddate"  class="form-control">
</div>
</div>
         <br style="padding-top:6px;">

                <div class="form-group" >
    <label class="control-label col-lg-3">حالة التسجيل</label>

    <div class="col-lg-8 "  style="padding-top:6px;">
    <select disabled name="regId"  class="form-control  ">
                  <option>(مطلوب)</option>
          
         <?php 


                  foreach($recc as $k){
          ?>
  <option value="<?php echo  $k->reg_id;  ?>"<?php if( $k->reg_id == $rec['reg_id']){?> selected <?php } ?>>
      <?php echo $k->reg_name ; ?></option>
              
        <?php } ?>
           
            
            
            
        </select>
    </div>
</div>

            <br style="padding-top:12px;"> 
  <div class="form-group"  style="padding-top:12px;">
      
    <label class="control-label col-lg-3">الجنس</label>

    <div class="col-lg-8">
        
             <select disabled name="suGender" class="form-control">
                  <option value="">غيرر محدد</option>
            <option value="1"<?php if($rec['sub_gender']==1){?> selected <?php } ?>>أنثى</option>   
            <option value="2"<?php if($rec['sub_gender']==2){?> selected <?php } ?>>ذكر</option>
          
        </select>
    </div>
</div>
         <br style="padding-top:6px;">

  <div class="form-group"  style="padding-top:6px;">
    <label class="control-label col-lg-3" >الحالة الإجتماعية</label>

    <div class="col-lg-8">
         <select disabled name="socId"   class="form-control">
             <option>(مطلوب)</option>
   <?php 

                foreach($recsoci as $k){
          ?>
          <option value="<?php echo $k->soci_id; ?>"<?php if($k->soci_id == $rec['reg_id']){?> selected <?php } ?>><?php echo $k->soci_name_status; ?></option>
          <?php } ?>
               </select>
                
    </div>
</div>
              <br style="padding-top:6px;">
  <div class="form-group" style="padding-top:6px;">
    <label class="control-label col-lg-3">الوضع الإقتصادي</label>

    <div class="col-lg-8">
               <select name="ecomId" disabled class="form-control">
            <option>(مطلوب)</option>
           <?php 
          foreach($receco as $k){
          ?>
          <option value="<?php echo $k->eco_id; ?>"<?php if($k->eco_id==$rec['eco_id']){?> selected <?php } ?>><?php echo $k->eco_name; ?></option>
          <?php } ?>
        </select>
    </div>
</div>
                 <br style="padding-top:6px;">
 
  

             
            </form>
        </div>
    </div>
</div>

<!--END TEXT input  readonly id="form-input-readonly" type="text" FIELD-->

<!--BEGIN SELECT        -->

<div class="col-lg-6">
<div class="box inverse">

<div id="div-2" class="body">
 <div class="form-group" style="padding-top:6px;">
    <label class="control-label col-lg-3">حالة العمل</label>

    <div class="col-lg-8">
          <select disabled name="workId" class="form-control">
            <option>(مطلوب)</option>
   <?php 
          foreach($recwork as $k){
          ?>
          <option  value="<?= $k->work_id; ?>"<?php if($k->work_id==$rec['work_id']){?> selected <?php } ?>>
              <?php echo $k->work_name; ?></option>
          <?php } ?>
        </select>
    </div>
</div>
                 <br style="padding-top:6px;">
      <div class="form-group" style="padding-top:6px;">
    <label class="control-label col-lg-3">مكان العمل</label>

    <div class="col-lg-8">
             
                    	<div class="col-xs-12 col-sm-5">
 <input  disabled type="text" id="inputSuccess"  value="<?php echo $rec['workplace_name'] ?>" name="sworkPid" placeholder="أدخل مكان العمل  "  class="form-control" >
                
                    </div>
    </div>
</div>
                                 <br style="padding-top:6px;">

      <div class="form-group"  style="padding-top:6px;">
    <label class="control-label col-lg-3">المستوى العلمي</label>

    <div class="col-lg-8">
       <select disabled name="eduCid" class="form-control">
            <option>(مطلوب)</option>
   <?php 
          foreach($recedu as $k){
          ?>
        <option  value="<?= $k->edu_id ; ?>"<?php if($k->edu_id ==$rec['edu_id']){?> selected <?php } ?>>
              <?php echo $k->edu_name; ?></option>
          <?php } ?>
        </select>   
    </div>
</div>
                                 <br style="padding-top:6px;">

              <div class="form-group"  style="padding-top:6px;">
                    <label for="text2" class="control-label col-lg-3">عدد أفراد الأسرة</label>

                    <div class="col-lg-8">
                        <input  style="font-weight:bold;"    readonly id="form-input-readonly" type="text" type="text"  value="<?php echo $rec['familymemb'] ?>" name="famAmemb" id="text2" placeholder="أدخل عدد أفراد الأسرة" class="form-control">
                    </div>
                </div>
             <br style="padding-top:6px;">
              <div class="form-group"  style="padding-top:6px;">
                    <label for="text2" class="control-label col-lg-3">عدد الذكور</label>

                    <div class="col-lg-8">
                        <input  style="font-weight:bold;"    readonly id="form-input-readonly" type="text" type="text"  value="<?php echo $rec['malememb'] ?>" name="malEmemb" id="text2" placeholder="أدخل عدد الذكور" class="form-control">
                    </div>
                </div>
  <br style="padding-top:6px;">
                    <div class="form-group" style="padding-top:6px;">
                    <label for="text2" class="control-label col-lg-3">عدد الإناث</label>

                    <div class="col-lg-8">
                        <input  style="font-weight:bold;"    readonly id="form-input-readonly" type="text" type="text"  value="<?php echo $rec['femalememb'] ?>" name="femAmemb" id="text2" placeholder="أدخل عدد الإنناث" class="form-control">
                    </div>
                </div>

<div class="form-group" style="padding-top:6px;">
<label for="text1" class="control-label col-lg-3">تاريخ الميلاد</label>

<div class="col-lg-8">
<input  style="font-weight:bold;"    readonly id="form-input-readonly" type="text" type="date"  value="<?php echo $rec['sub_age'] ?>"   name="suAge" id="adddate"  class="form-control">
</div>
</div>
    <br style="padding-top:6px;">
  <div class="form-group" style="padding-top:6px;">
    <label class="control-label col-lg-3">طبيعة الإنتساب</label>

    <div class="col-lg-8">
       <input type="text" disabled id="inputSuccess" value="<?php echo $rec['natffiliation_name'] ?>" name="natffiliatId" placeholder="أدخل طبيعة الإنتساب  "  class="width-100" >
    </div>
</div>
<br style="padding-top:6px;">
<div class="form-group"  style="padding-top:6px;">
    <label class="control-label col-lg-3">رقم التموين</label>
    <div class="col-lg-8">
        <input  style="font-weight:bold;"    readonly id="form-input-readonly" type="text" class="form-control"  value="<?php echo $rec['sub_no_logistics'] ?>" type="text" name="sNlogistics">
        
    </div>
</div>
    <br style="padding-top:6px;">
    
<div class="form-group"  style="padding-top:6px;">
    <label class="control-label col-lg-3">العمر</label>
    <div class="col-lg-8">
        <input  style="font-weight:bold;"    readonly id="form-input-readonly" type="text" class="form-control"  value="<?php echo $rec['age'] ?>" type="number"  name="aGe">
    </div>
</div>
 <br style="padding-top:6px;">
    
<div class="form-group"  style="padding-top:6px;">
    <label class="control-label col-lg-3">رقم الجوال</label>
    <div class="col-lg-8">
        <input  style="font-weight:bold;"    readonly id="form-input-readonly" type="text" class="form-control"  value="<?php echo $rec['sub_tel'] ?>" name="sTell" type="number" >
    </div>
</div>
 <br style="padding-top:6px;">

<div class="form-group" style="padding-top:6px;">
    <label class="control-label col-lg-3">رقم الهاتف</label>
    <div class="col-lg-8">
        <input  style="font-weight:bold;"    readonly id="form-input-readonly" type="text" class="form-control"  value="<?php echo $rec['sub_phone'] ?>"  name="sPhone" type="number" >
    </div>
</div>
     <br style="padding-top:6px;">

<div class="form-group" style="padding-top:6px;">
    <label class="control-label col-lg-3">شخص ذو إعاقة</label>

    <div class="col-lg-8" >
        <select style="font-weight:bold;"  readonly id="form-input-readonly" type="text"   name="personDis" class="form-control">
        <option  value="<?php echo $rec['persondis']; ?>"<?php if($rec['persondis']==1){?> selected <?php } ?>> يوجد</option>
        <option  value="<?php echo $rec['persondis']; ?>"<?php if($rec['persondis']==2){?> selected <?php } ?>>لا يوجد</option>
        </select>
    </div>
</div>
     <br style="padding-top:6px;">

<div class="form-group" style="padding-top:6px;">
    <label class="control-label col-lg-3">طبيعة الإعاقة</label>

    <div  class="col-lg-8">
  <select disabled   name="personDis" class="form-control">
               <option>(مطلوب)</option>
        <option  value="<?php echo $rec['persondis']; ?>"<?php if($rec['persondis']==1){?> selected <?php } ?>> يوجد</option>
        <option  value="<?php echo $rec['persondis']; ?>"<?php if($rec['persondis']==2){?> selected <?php } ?>>لا يوجد</option>
        </select>
    </div>
</div>
  <br style="padding-top:6px;">
    
<div class="form-group" style="padding-top:6px;">
<label for="text1" class="control-label col-lg-3">نوع الإعاقة</label>

<div class="col-lg-8">

<input  style="font-weight:bold;"    readonly id="form-input-readonly" type="text" type="text" value="<?php echo $rec['dis_note'] ?>"  id="text1" name="disNote" placeholder="مطلوب"  class="form-control">
<label for="text1" class="control-label col-lg"></label>

</div>
</div>
    
    

    
</div>
    
</div>
</div>
<!--END SELECT-->
</div>
    </div>
     </div>
<!-- /.row -->
        <label  class="col-lg-3"></label>
        <div  class="col-lg-2">
 <button   class="btn-block btn btn-primary"type="submit" name="btnBack" onclick="window.history.back();">رجوع</button>

        </div>
    