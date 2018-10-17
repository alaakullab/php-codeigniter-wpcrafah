 <form role="form" action="<?=base_url();?>Initiatives/Modify/<?= $rec['initiat_id']; ?>" method="post"> 

<div class="row">
<div class="col-lg-12">
        <div class="box">
    <div class="col-lg-6">

    <div class="box dark">
   
        <div id="div-1" class="body">
       
            <form class="form-horizontal">

              <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">عنوان المبادرة</label>

                    <div class="col-lg-8">
                        <input value="<?php echo $rec['initiat_title'] ?>" class="form-control"  name="initiTitle" type="text" id="pass1"
                               placeholder="أدخل عنوان المبادرة "/>
                         <span class="error"><?php echo form_error('initiTitle'); ?> </span>
                    </div>
                </div>
            
        <div class="form-group">
<label for="text1" class="control-label col-lg-4">تاريخ المبادرة</label>

<div class="col-lg-8">
<input value="<?php echo $rec['initiat_date'] ?>" type="date" name="initiAdate" id="adddate"  class="form-control">
     <span class="error"> </span>
</div>
</div>
                
  
              <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">أنشطة المبادرة</label>

                    <div class="col-lg-8">
                        <input value="<?php echo $rec['initiat_activ'] ?>" class="form-control" name="initiActiv" type="text" id="pass1"
                               placeholder="أدخل أنشطة المبادرة "/>
                     <span class="error"> </span>
                    </div>
                </div>
               

                <div class="form-group">
                    <label for="text2" class="control-label col-lg-4">الجهة الممولة</label>

                    <div class="col-lg-8">
                        <input value="<?php echo $rec['initiat_sponsor'] ?>" type="text" id="text2" name="initiSponsor" placeholder="أدخل الجهة الممولة" class="form-control">
                          <span class="error"> </span>
                    </div>
                </div>
           

                
             
            </form>
        </div>
    </div>
</div>

<!--END TEXT INPUT FIELD-->

<!--BEGIN SELECT        -->

<div class="col-lg-6">
<div class="box inverse">

<div id="div-2" class="body">

<div class="form-group">
<label for="text1" class="control-label col-lg-4">مكان إنعقاد المبادرة</label>

<div class="col-lg-8">

<input value="<?php echo $rec['initiat_place'] ?>" type="text" id="text1" name="initiPlace"  placeholder="مطلوب"  class="form-control">
     <span class="error"> </span>
</div>
</div>
    
<div class="form-group">
<label for="text1" class="control-label col-lg-4">عدد أيام المبادرة </label>

<div class="col-lg-8">
<input value="<?php echo $rec['initiat_days'] ?>" type="number" id="adddate" name="initiDays"  class="form-control">
</div>
</div>
    
<div class="form-group">
<label for="text1" class="control-label col-lg-4"> الجهات المشاركة</label>

<div class="col-lg-8">
<input value="<?php echo $rec['initiat_parici'] ?>" type="text" id="adddate"  name="initiParici"  placeholder="مطلوب" class="form-control">
</div>
</div>
    
<div class="form-group">
<label for="text1" class="control-label col-lg-4">تكاليف المبادرة </label>

<div class="col-lg-8">
<input value="<?php echo $rec['initiat_costs'] ?>" type="number" id="adddate" name="initiCosts"  class="form-control">
</div>
</div>

<div class="form-group">
<label for="text1" class="control-label col-lg-4"> الجهة / المدرب</label>

<div class="col-lg-8">
<input value="<?php echo $rec['initiat_trainer'] ?>" type="text" id="adddate"  name="initiTrainer" placeholder="مطلوب" class="form-control">
</div>
</div>
    

    
</div>
</div>
</div>
<div class="col-lg-12">
         <div id="collapse4" class="body">
                <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                    <thead>
                    <tr>
                        <th class="col-lg-2"></th>
                        <th>مشاركون فوق 18</th>
                        <th>مشاركون تحت 18</th>
                        <th>مشاركون من ذوي الإحتياجات فوق 18</th>
                        <th>مشاركون من ذوي الإحتياجات تحت 18</th>
                       </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>الذكور</td>
<td><input onchange="getValues(<? echo  'insumfi'; ?>,<? echo  'initiatMaelup18'; ?>,<? echo  'actiMaleDon18'; ?>,<? echo 'needMaleUp18'; ?>,<? echo  'needMaleDon18'; ?>); "   value="<?php echo $s1=$rec['initiat_mael_up18'] ?>" type="number" name="initiatMaelup18" id="text1"  class="form-control"></td>
<td><input onchange="getValues(<? echo  'insumfi'; ?>,<? echo  'initiatMaelup18'; ?>,<? echo  'actiMaleDon18'; ?>,<? echo 'needMaleUp18'; ?>,<? echo  'needMaleDon18'; ?>);" value="<?php echo $s2=$rec['initiat_mael_don18'] ?>" type="number" name="initiMaeldon18" id="text1"   class="form-control"></td>
<td><input onchange="getValues(<? echo  'insumfi'; ?>,<? echo  'initiatMaelup18'; ?>,<? echo  'actiMaleDon18'; ?>,<? echo 'needMaleUp18'; ?>,<? echo  'needMaleDon18'; ?>);" value="<?php echo $d1=$rec['initiat_dis_mael_up18'] ?>" type="number" name="initiDismaelup18" id="text1"   class="form-control"></td>
<td><input onchange="getValues(<? echo  'insumfi'; ?>,<? echo  'initiatMaelup18'; ?>,<? echo  'actiMaleDon18'; ?>,<? echo 'needMaleUp18'; ?>,<? echo  'needMaleDon18'; ?>);" value="<?php echo $d2=$rec['initiat_dis_mael_don18'] ?>" type="number" name="initiDismaeldon18" id="text1"   class="form-control"></td>
                            </tr>
                            <tr>
                                <td>الإناث</td>
<td><input value="<?php echo $s3=$rec['initiat_femael_up18'] ?>" type="number" name="initiFemaelup18" id="text1"   class="form-control"></td>
<td><input value="<?php echo $s4=$rec['initiat_femael_don18'] ?>" type="number" name="initiFemaeldon18" id="text1"   class="form-control"></td>
<td><input value="<?php echo $d3=$rec['initiat_dis_femael_up18'] ?>" type="number" name="initidisFemaelUp18" id="text1"  class="form-control"></td>
<td><input value="<?php echo $d4=$rec['initiat_dis_femael_don18'] ?>" type="number" name="initidisFemaeldon18" id="text1"   class="form-control"></td>
                            </tr>
                        <tr>
<?php $fulla=$s1+$s2+$s3+$s4;  ?>
<?php $fullb=$d1+$d2+$d3+$d4;  ?>

                                <td>مجموع المشاركين</td>
<td colspan="2"><input disabled  name="insumfi"  style="font-size:20px;color:#000;" type="number"  value="<?php echo $fulla;  ?>" id="text1"   class="form-control "></td>
<td  colspan="2"><input disabled style="font-size:20px;color:#000;" type="number" value="<?php echo $fullb;    ?>" id="text1"  class="form-control"></td>
                             
                            </tr>

                    </tbody>                </table>
            </div>
<!--END SELECT-->
</div>

    <div class="form-group">
                    <label for="text2" class="control-label col-lg-2">ملاحظات</label>

                    <div class="col-lg-8">
<input value="<?php echo $rec['initiat_note'] ?>" type="text" name="initiNote" id="text2" placeholder="إدخال الملاحظات" class="form-control">
                    </div>
                </div>
    <div class="col-lg-4">
<label for="text1" class="control-label col-lg-8"></label>
<button name="btnINT" class="form-control btn btn-primary btn-rect">تحديث</button>
    
    </div>
            <label  class="col-lg-3"></label>
        <div  class="col-lg-2">
 <button   class="btn-block btn btn-primary"type="submit" name="btnBack" onclick="window.history.back();">رجوع</button>

        </div>
    
</div>
<!-- /.row -->
      </div>
    </div>
    </form>