

<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container" >
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                        </select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="row">
							<div class="col-xs-12">

								<div class="hr hr-18 hr-double dotted"></div>

								<div class="widget-box">
                                 
									<div class="widget-header widget-header-blue widget-header-flat">
										<h4 class="widget-title lighter">تعديل بيانات المشتركين</h4>

									</div>
     
									<div class="widget-body" >
                      <form role="form" action="<?=base_url();?>subscribers/Modify/<?= $rec['sub_id']; ?>" method="post" >  
										<div class="widget-main">

											<div id="fuelux-wizard-container">

												<div>
													<ul class="steps">
														<li data-step="1" class="active">
															<span class="step">1</span>
															<span class="title">الخطوة الأولى</span>
														</li>

														<li data-step="2">
															<span class="step">2</span>
															<span class="title">الخطوة الثانية</span>
														</li>

														<li data-step="3">
															<span class="step">3</span>
															<span class="title">الخطوة الثالثة</span>
														</li>

														<li data-step="4">
															<span class="step">4</span>
															<span class="title">الخطوة الرابعة</span>
														</li>
                                                        <li data-step="5">
															<span class="step">5</span>
															<span class="title">الخطوة الأخيرة</span>
														</li>
                                                     
													</ul>
												</div>

												<hr />

								<div class="step-content pos-rel">
													<div class="step-pane active" data-step="1">
														<h3 class="lighter block green">أدخل المعلومات التالية</h3>


									<div class="form-group ">				
                    <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">الاسم كامل</label>

                    	<div class="col-xs-12 col-sm-5">
            <input type="text" id="inputSuccess"   name="fulllName" value="<?php echo $rec['sub_fulllname'] ?>"  placeholder="أدخل الاسم كامل"  class="width-100"    >
                
                    </div>
            <div class="help-block col-xs-12 col-sm-reset inline"><?php echo form_error('fulllName'); ?> </div>
                </div>
                    <div class="form-group ">				
        <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">رقم الهوية :</label>

                    	<div class="col-xs-12 col-sm-5">
            <input type="text" id="inputSuccess"  value="<?php echo $rec['id_number'] ?>"   name="idNumbers" placeholder="أدخل رقم الهوية "  class="width-100">
                
                    </div>
<div class="help-block col-xs-12 col-sm-reset inline"><span class="errname"><?php echo form_error('idNumbers'); ?></span>  </div>
                        </div>
                                                                
    <div class="form-group ">				
 <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">العنوان كامل :</label>

                    	<div class="col-xs-12 col-sm-5">
 <input type="text" id="inputSuccess" value="<?php echo $rec['full_address'] ?>" name="flAddress" placeholder="أدخل العنوان كامل "  class="width-100"    >
                
                    </div>
<div class="help-block col-xs-12 col-sm-reset inline">  </div>
                        </div>
                                                                
    <div class="form-group ">				
      <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">تاريخ الإنتساب :</label>

                    	<div class="col-xs-12 col-sm-5">
            <input type="date" id="inputSuccess" type="date" value="<?php echo $rec['reg_date'] ?>" name="rgDate"    class="width-100">
                
                    </div>
<div class="help-block col-xs-12 col-sm-reset inline">  </div>
                        </div>

				    <div class="form-group ">				
     <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">حالة التسجيل :</label>

                    	<div class="col-xs-12 col-sm-5">
           <select name="regId" class="form-control  ">
                  <option>(مطلوب)</option>
          
         <?php 


                  foreach($recc as $k){
          ?>
  <option value="<?php echo  $k->reg_id;  ?>"<?php if( $k->reg_id == $rec['reg_id']){?> selected <?php } ?>>
      <?php echo $k->reg_name ; ?></option>
              
        <?php } ?>
           
            
            
            
        </select>
                    </div>
<div class="help-block col-xs-12 col-sm-reset inline">  </div>
                        </div>
                                            
				    <div class="form-group ">				
     <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">الجنس :</label>

                    	<div class="col-xs-12 col-sm-5">
            <select name="suGender" class="form-control">
                  <option value="">غيرر محدد</option>
            <option value="1"<?php if($rec['sub_gender']==1){?> selected <?php } ?>>أنثى</option>   
            <option value="2"<?php if($rec['sub_gender']==2){?> selected <?php } ?>>ذكر</option>
          
        </select>
                
                    </div>
<div class="help-block col-xs-12 col-sm-reset inline">  </div>
                        </div>  
 
													
                                                        
                                    </div>

													<div class="step-pane" data-step="2">
												<h3 class="lighter block green">أدخل المعلومات التالية</h3>


									<div class="form-group ">				
        <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">الحالة الإجتماعية :</label>

                    	<div class="col-xs-12 col-sm-5">
            <select name="socId"  class="form-control">
             <option>(مطلوب)</option>
   <?php 

                foreach($recsoci as $k){
          ?>
          <option value="<?php echo $k->soci_id; ?>"<?php if($k->soci_id == $rec['reg_id']){?> selected <?php } ?>><?php echo $k->soci_name_status; ?></option>
          <?php } ?>
               </select>
                
                    </div>
            <div class="help-block col-xs-12 col-sm-reset inline"> </div>
                </div>
                  
				    <div class="form-group ">				
     <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">الوضع الإقتصادي :</label>

                    	<div class="col-xs-12 col-sm-5">
                  <select name="ecomId" class="form-control">
            <option>(مطلوب)</option>
           <?php 
          foreach($receco as $k){
          ?>
          <option value="<?php echo $k->eco_id; ?>"<?php if($k->eco_id==$rec['eco_id']){?> selected <?php } ?>><?php echo $k->eco_name; ?></option>
          <?php } ?>
        </select>
                    </div>
<div class="help-block col-xs-12 col-sm-reset inline">  </div>
                        </div>
                                        
				    <div class="form-group ">				
     <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">حالة العمل :</label>
	<div class="col-xs-12 col-sm-5">
           <select name="workId" class="form-control">
            <option>(مطلوب)</option>
   <?php 
          foreach($recwork as $k){
          ?>
          <option  value="<?= $k->work_id; ?>"<?php if($k->work_id==$rec['work_id']){?> selected <?php } ?>>
              <?php echo $k->work_name; ?></option>
          <?php } ?>
        </select>
                    </div>    
<div class="help-block col-xs-12 col-sm-reset inline">  </div>
                      
                    </div>
    	    <div class="form-group ">				
     <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">مكان العمل :</label>
             
                
                    	<div class="col-xs-12 col-sm-5">
 <input type="text" id="inputSuccess" value="<?php echo $rec['workplace_name'] ?>" name="sworkPid" placeholder="أدخل مكان العمل  "  class="width-100" >
                
                    </div>
<div class="help-block col-xs-12 col-sm-reset inline">  </div>
                      
                    </div>
    <div class="form-group ">				
     <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">المستوى العلمي :</label>
	<div class="col-xs-12 col-sm-5">
           <select name="eduCid" class="form-control">
            <option>(مطلوب)</option>
   <?php 
          foreach($recedu as $k){
          ?>
        <option  value="<?= $k->edu_id ; ?>"<?php if($k->edu_id ==$rec['edu_id']){?> selected <?php } ?>>
              <?php echo $k->edu_name; ?></option>
          <?php } ?>
        </select>   
                    </div>    
<div class="help-block col-xs-12 col-sm-reset inline">  </div>
                      
                    </div>
    
      <div class="form-group ">				
     <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">عدد أفراد الأسرة :</label>
	<div class="col-xs-12 col-sm-5">
        <input type="text"  value="<?php echo $rec['familymemb'] ?>" name="famAmemb" id="text2" placeholder="أدخل عدد أفراد الأسرة" class="form-control"> 
                    </div>    
<div class="help-block col-xs-12 col-sm-reset inline">  </div>
                      
                    </div>

                                  
													
                                                        
													</div>

													<div class="step-pane" data-step="3">
										<h3 class="lighter block green">أدخل المعلومات التالية</h3>


								  <div class="form-group ">				
     <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">عدد الذكور :</label>
	<div class="col-xs-12 col-sm-5">
  <input type="text"  value="<?php echo $rec['malememb'] ?>" name="malEmemb" id="text2" placeholder="أدخل عدد الذكور" class="form-control"> 
                    </div>    
<div class="help-block col-xs-12 col-sm-reset inline">  </div>
                      
                    </div>
    <div class="form-group ">				
        <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">عدد الإناث :</label>

                    	<div class="col-xs-12 col-sm-5">
            <input type="text"  value="<?php echo $rec['femalememb'] ?>" name="femAmemb" id="text2" placeholder="أدخل عدد الإنناث" class="form-control">
                
                    </div>
<div class="help-block col-xs-12 col-sm-reset inline">  </div>
                        </div>
                                                                
    <div class="form-group ">				
      <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">تاريخ الميلاد :</label>

                    	<div class="col-xs-12 col-sm-5">
            <input type="date" type="date" value="<?php echo $rec['reg_date'] ?>" name="suAge"   id="inputSuccess"  class="width-100"  >
                
                    </div>
<div class="help-block col-xs-12 col-sm-reset inline">  </div>
                        </div>

				           <div class="form-group ">				

                    	
     <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">طبيعة الإنتساب :</label>
             
                    	<div class="col-xs-12 col-sm-5">
 <input type="text" id="inputSuccess" value="<?php echo $rec['natffiliation_name'] ?>" name="natffiliatId" placeholder="أدخل طبيعة الإنتساب  "  class="width-100" >
                
                    </div>
                               
                       
                    
                               
<div class="help-block col-xs-12 col-sm-reset inline">  </div>
                        </div>
  <div class="form-group ">				
     <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">رقم التموين :</label>

                    	<div class="col-xs-12 col-sm-5">
<input type="text"  value="<?php echo $rec['sub_no_logistics'] ?>" name="sNlogistics" id="text2" placeholder="أدخل عدد الإنناث" class="form-control">
                    </div>
<div class="help-block col-xs-12 col-sm-reset inline">  </div>
                        </div>  
                  
                                            
				    <div class="form-group ">				
     <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">العمر :</label>

                    	<div class="col-xs-12 col-sm-5">
<input type="number"  value="<?php echo $rec['age'] ?>" name="aGe" id="text2" placeholder="أدخل العمر " class="form-control">
                    </div>
<div class="help-block col-xs-12 col-sm-reset inline">  </div>
                        </div>  

													
                                                        
													</div>

													<div class="step-pane" data-step="4">
														<h3 class="lighter block green">أدخل المعلومات التالية</h3>


									<div class="form-group ">				
        <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">رقم الجوال :</label>

                    	<div class="col-xs-12 col-sm-5">
                            <div class="input-group">
           <input  class="form-control"  value="<?php echo $rec['sub_tel'] ?>" name="sTell" type="number" >
                    <span class="input-group-addon"><i class="ace-icon"></i>059</span>
                            </div></div>
            <div class="help-block col-xs-12 col-sm-reset inline"><span class="errname"><?php echo form_error('sTell'); ?></span> </div>
                </div>
                    <div class="form-group ">				
        <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">رقم الهاتف :</label>

                    	<div class="col-xs-12 col-sm-5">
                             <div class="input-group">
        <input class="form-control"  value="<?php echo $rec['sub_phone'] ?>"  name="sPhone" type="number" >  
                              <span class="input-group-addon"><i class="ace-icon"></i>08</span>
                            </div></div>
<div class="help-block col-xs-12 col-sm-reset inline"> <span class="errname"><?php echo form_error('sPhone'); ?></span> </div>
                        </div>
                                                                

				    <div class="form-group ">				
     <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">شخص ذو إعاقة:</label>

                    	<div class="col-xs-12 col-sm-5">
      <select   name="personDis" class="form-control">
               <option>(مطلوب)</option>
        <option  value="<?php echo $rec['persondis']; ?>"<?php if($rec['persondis']==1){?> selected <?php } ?>> يوجد</option>
        <option  value="<?php echo $rec['persondis']; ?>"<?php if($rec['persondis']==2){?> selected <?php } ?>>لا يوجد</option>
        </select>
                
                    </div>
<div class="help-block col-xs-12 col-sm-reset inline">  </div>
                        </div>
                                            
    <div class="form-group ">				
     <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">نوع الإعاقة :</label>

                    	<div class="col-xs-12 col-sm-5">
          <select name="disIId" class="form-control">
            <option>إذا وجدت إعاقة الرجاء إضافة طبيعة الإعاقة</option>
   <?php 

          foreach($recdis as $k){
          ?>
<option  value="<?= $rec['sub_id']; ?>"<?php if($k->dis_id==$rec['dis_id']){?> selected <?php } ?>>
    <?php echo $k->dis_nature_case; ?></option>
          <?php } ?>
        </select>
                
                    </div>
<div class="help-block col-xs-12 col-sm-reset inline">  </div>
                        </div>
    	<div class="form-group ">				
        <label for="text1" name="fname" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">طبيعة الإعاقة  :</label>

                    	<div class="col-xs-12 col-sm-5">
<input type="text" value="<?php echo $rec['dis_note'] ?>"  id="text1" name="disNote" placeholder="مطلوب"  class="form-control">
                
                    </div>
            <div class="help-block col-xs-12 col-sm-reset inline"> </div>
    </div>
													
                                                        
													</div>
                                    	<div class="step-pane" data-step="5">
														<div class="center">
															<h3 class="green">مبروك!</h3>
التسجيل الخاص بك هو على استعداد للحفظ! انقر على الانتهاء للمتابعة!
														</div>
                                            
	<hr/>
    	  
             				<div class="wizard-actions right" >
                                     
    

                                             <button   class="btn  btn-primary  btn-prev " type="submit"   name="btnSubmody"    data-last="إنهاء"  >
													حفظ
													<i class="ace-icon fa  fa-floppy-o icon-on-left"></i>
												</button> 
            
											</div>   
                                            
                                            
                                    
                                            
													</div>
             </div>

                              </div>                         
                                        	<hr/>
    	  
             				<div class="wizard-actions right" >
                                     

												<a class="btn btn-prev" >
													<i class="ace-icon fa fa-arrow-right"></i>
													السابق
												</a>
          
            <button type="button"   name="btnSubmody"   class="btn btn-success btn-next"  data-last="إنهاء" >
													التالي
													<i class="ace-icon fa fa-arrow-left icon-on-left"></i>
												</button>
    
    
            
             <button   class="btn  btn-primary  btn-prev " type="submit"   name="btnSubmody"    data-last="إنهاء"  >
													حفظ
													<i class="ace-icon fa  fa-floppy-o icon-on-left"></i>
												</button> 
											</div>   
										                
                                            		 	</div><!-- /.widget-main --> 
                                          	</form>  

								 	</div><!-- /.widget-body -->
								</div>
						</div><!-- /.col -->
    </div>  		</div><!-- /.row -->
				

     


       
    
   
