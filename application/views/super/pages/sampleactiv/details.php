
  <div class="row">
    <div class="col-lg-12">
        <div class="box">
 
<div class="col-lg-6">

    <div class="box dark">
   
        <div id="div-1" class="body">
       
            <form class="form-horizontal">
 <div class="form-group">
    <label class="control-label col-lg-4">اسم البرنامج</label>

    <div class="col-lg-8">
     <input name="actiProgId" disabled value="<?= $rec['activ_prog_id'] ?>" class="form-control" type="text" id="pass1"
                               placeholder="أدخل اسم البرنامج"/>    

    </div>
</div>

              <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">وصف النشاط</label>

                    <div class="col-lg-8">
                        <input value="<?php echo $rec['activ_discrip'] ?>" disabled name="actiDiscrip" class="form-control" type="text" id="pass1"
                               placeholder="أدخل وصف النشاط"/>
                    </div>
                </div>
  
              <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">مكان إنعقاد النشاط</label>

                    <div class="col-lg-8">
                        <input value="<?php echo $rec['activ_place'] ?>" disabled name="actiPlace" class="form-control" type="text" id="pass1"
                               placeholder="أدخل وصف النشاط"/>
                    </div>
                </div>
               

                <div class="form-group">
                    <label for="text2" class="control-label col-lg-4">مدة النشاط بالأيام</label>

                    <div class="col-lg-8">
                        <input value="<?php echo $rec['activ_duration'] ?>" disabled name="actiDuration" type="text" id="text2" placeholder="أدخل مدة النشاط بالأيام" class="form-control">
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
    <label class="control-label col-lg-4">نوع النشاط</label>

    <div class="col-lg-8">
         <input name="actiTypeId" value="<?= $rec['activ_type_id'] ?>" disabled class="form-control" type="text" id="pass1"
                               placeholder="أدخل نوع النشاط"/>
       
    </div>
</div>

<div class="form-group">
<label for="text1" class="control-label col-lg-4">الجهة المنظمة</label>

<div class="col-lg-8">

<input  value="<?php echo $rec['activ_organisers'] ?>" disabled  name="actiOrganis" type="text" id="text1"  placeholder="مطلوب"  class="form-control">
<label for="text1" class="control-label col-lg-4"></label>

</div>
</div>
    
<div class="form-group">
<label for="text1" class="control-label col-lg-4">تاريخ النشاط</label>

<div class="col-lg-8">
<input  value="<?php echo $rec['activ_date'] ?>" disabled name="actiDate" type="date" id="adddate"  class="form-control">
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
<td><input disabled    onchange="getValues(<? echo  'actisumfi'; ?>,<? echo  'actiMaleUp18'; ?>,<? echo  'actiMaleDon18'; ?>,<? echo 'needMaleUp18'; ?>,<? echo  'needMaleDon18'; ?>);"   value="<?php echo $rec['activ_male_up18'] ?>" name="actiMaleUp18" type="number" id="text1"  class="form-control"></td>
                                
<td><input disabled  onchange="getValues(<? echo  'actisumfi'; ?>,<? echo  'actiMaleUp18'; ?>,<? echo  'actiMaleDon18'; ?>,<? echo 'needMaleUp18'; ?>,<? echo  'needMaleDon18'; ?>);"   value="<?php echo $rec['activ_male_don18'] ?>" name="actiMaleDon18" type="number" id="text1"  class="form-control"></td>
                            
<td><input disabled  onchange="getValues(<? echo  'actisumfi'; ?>,<? echo  'actiMaleUp18'; ?>,<? echo  'actiMaleDon18'; ?>,<? echo 'needMaleUp18'; ?>,<? echo  'needMaleDon18'; ?>);"   value="<?php echo $rec['needs_male_up18'] ?>" name="needMaleUp18" type="number" id="text1"   class="form-control"></td>
                           
<td><input disabled  onchange="getValues(<? echo  'actisumfi'; ?>,<? echo  'actiMaleUp18'; ?>,<? echo  'actiMaleDon18'; ?>,<? echo 'needMaleUp18'; ?>,<? echo  'needMaleDon18'; ?>);"   value="<?php echo $rec['needs_male_don18'] ?>" name="needMaleDon18" type="number" id="text1"   class="form-control"></td>
                            </tr>
                            <tr>
                                
                                
                                <td>الإناث</td>
<td><input disabled  value="<?php echo $rec['activ_female_up18'] ?>"  name="actiFemaleUp18" type="number" id="text1"   class="form-control"></td>

<td><input disabled  value="<?php echo $rec['activ_female_don18'] ?>"  name="actiFemaleDon18"  type="number" id="text1"  class="form-control"></td>
                                
<td><input disabled  value="<?php echo $rec['needds_female_up18d'] ?>"  name="needFemaleUp18" type="number" id="text1"   class="form-control"></td>
                                
<td><input disabled  value="<?php echo $rec['needs_female_don18'] ?>"  name="needFemaleDon18" type="number" id="text1"   class="form-control"></td>
                            </tr>
                        <tr>
                            
                                <td colspan="1" >مجموع المشاركين</td>
  <td colspan="2"><input style="font-size:20px;color:#000;" type="number"  disabled   name="actisumfi"  value="<?php echo $rec['activ_male_up18']+$rec['activ_male_don18']+$rec['activ_female_up18']+$rec['activ_female_don18']; ?>"   class="form-control"></td>
            
                            
                            
 <td colspan="2"><input style="font-size:20px;color:#000;" type="number" disabled id="text1" value="<?php echo $rec['needs_male_up18']+$rec['needs_male_don18']+$rec['needds_female_up18d']+$rec['needs_female_don18']; ?>"  class="form-control"></td>
                            </tr>

                    </tbody>                </table>
            </div>
<!--END SELECT-->
</div>

    <div class="form-group">
                    <label for="text2" class="control-label col-lg-2">ملاحظات</label>

                    <div class="col-lg-8">
                    <input disabled  value="<?php echo $rec['activ_notes'] ?>"  name="actiNote" type="text" id="text2" placeholder="إدخال الملاحظات" class="form-control">
                    </div>
                </div>

            <label  class="col-lg-3"></label>
        <div  class="col-lg-2">
 <button   class="btn-block btn btn-primary"type="submit" name="btnBack" onclick="window.history.back();">رجوع</button>

        </div>
    
        </div>
    </div>
</div>
 
       
    
