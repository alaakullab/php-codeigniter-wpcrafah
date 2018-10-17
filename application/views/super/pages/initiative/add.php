
 <form  class="form-horizontal" role="form" action="<?=base_url()?>Initiatives/addiniti" method="post">

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
                        <input class="form-control test "  data-class=".test-1"   name="initiTitle" type="text" id="pass1"
                               placeholder="أدخل عنوان المبادرة "/>
                   <span><?php echo form_error('initiTitle'); ?> </span>
                    </div>
                </div>
            
        <div class="form-group">
<label for="text1" class="control-label col-lg-4">تاريخ المبادرة</label>

<div class="col-lg-8">
<input type="date" name="initiAdate" id="adddate"  class="form-control">
</div>
</div>
                
  
              <div class="form-group">
                    <label for="pass1" class="control-label col-lg-4">أنشطة المبادرة</label>

                    <div class="col-lg-8">
                        <input class="form-control test"  data-class=".test-2" name="initiActiv" type="text" id="pass1"
                               placeholder="أدخل أنشطة المبادرة "/>
                    </div>
                </div>
               

                <div class="form-group">
                    <label for="text2" class="control-label col-lg-4">الجهة الممولة</label>

                    <div class="col-lg-8">
                        <input type="text" id="text2" name="initiSponsor" placeholder="أدخل الجهة الممولة" class="form-control">
                    </div>
                </div>
           <div class="form-group">
<label for="text1" class="control-label col-lg-4">مكان إنعقاد المبادرة</label>

<div class="col-lg-8">

<input type="text" id="text1" name="initiPlace"  placeholder="مطلوب"  class="form-control">
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
<label for="text1" class="control-label col-lg-4">عدد أيام المبادرة </label>

<div class="col-lg-8">
<input type="number" id="adddate" name="initiDays"  class="form-control">
</div>
</div>
    
<div class="form-group">
<label for="text1" class="control-label col-lg-4"> الجهات المشاركة</label>

<div class="col-lg-8">
<input type="text" id="adddate"  name="initiParici"  placeholder="مطلوب" class="form-control">
</div>
</div>
    
<div class="form-group">
<label for="text1" class="control-label col-lg-4">تكاليف المبادرة </label>

<div class="col-lg-8">
<input type="number" id="adddate" name="initiCosts"  class="form-control">
</div>
</div>

<div class="form-group">
<label for="text1" class="control-label col-lg-4"> الجهة / المدرب</label>

<div class="col-lg-8">
<input type="text" id="adddate"  name="initiTrainer" placeholder="مطلوب" class="form-control">
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
                                <td><input type="number" name="initiatMaelup18" id="text1"  class="form-control"></td>
                                <td><input type="number" name="initiMaeldon18" id="text1"   class="form-control"></td>
                                <td><input type="number" name="initiDismaelup18" id="text1"   class="form-control"></td>
                                <td><input type="number" name="initiDismaeldon18" id="text1"   class="form-control"></td>
                            </tr>
                            <tr>
                                <td>الإناث</td>
                                <td><input type="number" name="initiFemaelup18" id="text1"   class="form-control"></td>
                                <td><input type="number" name="initiFemaeldon18" id="text1"   class="form-control"></td>
                                <td><input type="number" name="initidisFemaelUp18" id="text1"  class="form-control"></td>
                                <td><input type="number" name="initidisFemaeldon18" id="text1"   class="form-control"></td>
                            </tr>
                        <tr>
                                <td>مجموع المشاركين</td>
                                <td colspan="2"><input disabled type="number" id="text1"   class="form-control"></td>
                               <td  colspan="2"><input disabled type="number" id="text1"  class="form-control"></td>
                             
                            </tr>

                    </tbody>                </table>
            </div>
<!--END SELECT-->
</div>

    <div class="form-group">
                    <label for="text2" class="control-label col-lg-2">ملاحظات</label>

                    <div class="col-lg-8">
                        <input type="text" name="initiNote" id="text2" placeholder="إدخال الملاحظات" class="form-control">
                    </div>
                </div>
    <div class="col-lg-4">
<label for="text1" class="control-label col-lg-8"></label>
<button name="btniniti" class="form-control btn btn-primary btn-rect">إضافة</button>
    
    </div>
    
    
</div>
<!-- /.row -->
      </div>
    </div>
    </form>

