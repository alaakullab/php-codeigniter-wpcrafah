

<form class="form-horizontal" role="form" action="<?=base_url()?>Sampleactiv/addsample" method="post">
		
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
         <input name="actiProgId" class="form-control" type="text" id="pass1"
                               placeholder="أدخل اسم البرنامج"/>
       
    </div>
</div>

              <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">وصف النشاط</label>

                    <div class="col-lg-8">
                        <input name="actiDiscrip" class="form-control" type="text" id="pass1"
                               placeholder="أدخل وصف النشاط"/>
                    </div>
                </div>
  
              <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">مكان إنعقاد النشاط</label>

                    <div class="col-lg-8">
                        <input name="actiPlace" class="form-control" type="text" id="pass1"
                               placeholder="أدخل وصف النشاط"/>
                    </div>
                </div>
               

                <div class="form-group">
                    <label for="text2" class="control-label col-lg-4">مدة النشاط بالأيام</label>

                    <div class="col-lg-8">
                        <input name="actiDuration" type="text" id="text2" placeholder="أدخل مدة النشاط بالأيام" class="form-control">
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
         <input name="actiTypeId" class="form-control" type="text" id="pass1"
                               placeholder="أدخل نوع النشاط"/>

    </div>
</div>

<div class="form-group">
<label for="text1" class="control-label col-lg-4">الجهة المنظمة</label>

<div class="col-lg-8">

<input name="actiOrganis" type="text" id="text1"  placeholder="مطلوب"  class="form-control">
<label for="text1" class="control-label col-lg-4"></label>

</div>
</div>
    
<div class="form-group">
<label for="text1" class="control-label col-lg-4">تاريخ النشاط</label>

<div class="col-lg-8">
<input name="actiDate" type="date" id="adddate"  class="form-control">
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
                        <th> مشاركون من ذوي الإحتياجات فوق 18</th>
                        <th> مشاركون من ذوي الإحتياجات تحت 18</th>
                       </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>الذكور</td>
                                <td><input name="actiMaleUp18" type="number" id="text1"  class="form-control"></td>
                                <td><input name="actiMaleDon18" type="number" id="text1"  class="form-control"></td>
                                <td><input name="needMaleUp18" type="number" id="text1"   class="form-control"></td>
                                <td><input name="needMaleDon18" type="number" id="text1"   class="form-control"></td>
                            </tr>
                            <tr>
                                <td>الإناث</td>
                                <td><input name="actiFemaleUp18" type="number" id="text1"   class="form-control"></td>
                                <td><input name="actiFemaleDon18"  type="number" id="text1"  class="form-control"></td>
                                <td><input name="needFemaleUp18" type="number" id="text1"   class="form-control"></td>
                                <td><input name="needFemaleDon18" type="number" id="text1"   class="form-control"></td>
                            </tr>
                        <tr>
                                <td colspan="1" >مجموع المشاركين</td>
<td colspan="2"><input disabled type="number" class="form-control"></td>
                               <td colspan="2"><input disabled type="number" id="text1"  class="form-control"></td>
                            </tr>

                    </tbody>                </table>
            </div>
<!--END SELECT-->
</div>

    <div class="form-group">
                    <label for="text2" class="control-label col-lg-2">ملاحظات</label>

                    <div class="col-lg-8">
                        <input name="actiNote" type="text" id="text2" placeholder="إدخال الملاحظات" class="form-control">
                    </div>
                </div>
    <div class="col-lg-4">
<label for="text1" class="control-label col-lg-8"></label>
<button name="btnSam" class="form-control btn btn-primary btn-rect">إضافة</button>
    
    </div>
    
        </div>
    </div>
</div>
</form>