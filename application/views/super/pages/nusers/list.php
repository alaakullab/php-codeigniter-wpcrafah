<div class="col-xs-12">
<div class="row">
	<div class="col-xs-12">

    <div  class='panel panel-heading  dark'> 
    <div  align='center'>
 <div class='panel-heading ui-draggable-handle dark'>
       
            <div class='box'>       

                   
  <form  method='post' action=''  id="form" class='frms'>
  
  <div class=' col-lg-4'>
      
      <div id="container">
	      <input  type='text' data-class=".live-email"   class='form-control' autocomplete="off" id="search"  placeholder="ابحث هنا"  name='search' >  
          
           </div>
      </div>
    
      
<div class="pull-right tableTools-container">
    <div class="dt-buttons btn-overlap btn-group">
        <button class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold"  aria-controls="dynamic-table" name='submit' type="submit"  title=""><span><i class="fa fa-search bigger-110 blue"></i> <span class="hidden">Show/hide columns</span></span></button>
          <?php if( @$_SESSION['adminisread'] == 2){ ?>
        <a  href='Asusers/adduser' class="dt-button buttons-copy buttons-html5 btn btn-white btn-primary btn-bold"  aria-controls="dynamic-table" data-original-title="" title=""><span><i class="fa fa-plus-circle purple bigger-110 pink"></i> <span class="hidden">Copy to clipboard</span></span></a>
        <?php }elseif( @$_SESSION['adminisread'] == 1){ ?>
                <a  href='Asusers/adduserad' class="dt-button buttons-copy buttons-html5 btn btn-white btn-primary btn-bold"  aria-controls="dynamic-table" data-original-title="" title=""><span><i class="fa fa-plus-circle purple bigger-110 pink"></i> <span class="hidden">Copy to clipboard</span></span></a>
        
        <?php } ?>
      <a href="Asusers/actionuser"  class="dt-button buttons-csv buttons-html5 btn btn-white btn-primary btn-bold" hidden   name="export" class="btn btn-success" value="Export" ><span><i class="fa fa-database bigger-110 orange"></i> <span class="hidden">Export to CSV</span></span></a>
        <button class="dt-button buttons-print btn btn-white btn-primary btn-bold"  aria-controls="dynamic-table" onclick="window.print();" title=""><span><i class="fa fa-print bigger-110 grey"></i> <span class="hidden">Print</span></span></button>
    </div>
      </div>
      

      
      
      
      
      
      
      
            <div class=' col-lg-3 live-email'>
      
       <h4 style="color:red;">
      <?php
           
       $search=$this->input->post('search');
            foreach($rex as $row){ 
           $res=$row->username;
            

            similar_text($search, $res, $similarity_pst);
                if(number_format($similarity_pst,0) > 90){
                    $too_similar= $row->username;
                    
                               echo "  هل تقصد  :  &quot;  <input  style='background-color:white;border:0px;color:blue;'  type='submit'    name='search' value='$row->username' id='search btnInput'>&quot;  "; 
                     break;
                }
            }
          
        
            ?>
           </h4>  
          </div>

 
                </form>
    
      </div>  </div> </div>  </div>


    <div class="panel-body">
       <div class="table-responsive">
      
           
<table id="dynamic-table" align="center" style="margin:0;" class="main-table text-center table table-striped  table-bordered  ">

	<thead>
<tr>
    <th id="name"  style="text-align: center;">#</th>
	  <th id="name"  style="text-align: center;">اسم المستخدم</th>
    <th id="name"  style="text-align: center;">الكنية</th>
		<th id="name"  style="text-align: center;">كلمة المرور</th>   
		<th id="name"  style="text-align: center;">البريد الالكتروني</th>
        <th id="name"  style="text-align: center;">رقم الجوال</th>
        <th id="name"  style="text-align: center;">العنون</th>
    <th id="name"  style="text-align: center;">الصلاحية</th>
     <th id="name"  style="text-align: center;">المشرف</th>
        <th  id="name" style="text-align: center;"> التاريخ</th>
	<th>الاجراء</th>
</tr>
</thead>
<tbody>
	<?php 
     if($results != NULL){
	foreach($results as $row){ ?>
	<tr>
    <td><?php echo $row->id; ?></td>
	<td><?php echo $row->username; ?></td>
    <td><?php echo $row->nickname; ?></td>
    <td>***</td>
    <td><?php echo $row->email; ?></td>
    <td><?php echo $row->tell; ?></td>
    <td><?php echo $row->addres; ?></td>
    <td><label><?php if($row->Isread==4){?> محرر <?php }elseif($row->Isread==0) { ?>مدخل بيانات<?php }
        elseif($row->Isread==2) { ?>
        مدير
        <?php }
        ?></label></td>
     <td><label><?php   echo $row->parent_name; ?></label></td>
    <td><?php echo $row->regdate; ?></td>

	<td>

<div class="hidden-sm hidden-xs action-buttons">          

   <?php if( @$_SESSION['adminisread'] == 2 ){ if($row->parentid == $_SESSION['adminid']){ ?>
    
<a class="green" href="Asusers/modify/<?= $row->id;  ?>">
<i class="ace-icon fa fa-pencil bigger-130"></i>
</a>
<?php }} ?>
   <?php if( @$_SESSION['adminisread'] == 1){ ?>
<a class="green" href="Asusers/Modifyadd/<?= $row->id;  ?>">
<i class="ace-icon fa fa-pencil bigger-130"></i>
</a>
<?php } ?>
																<a class="red" href="Asusers/deleteuser/<?php echo $row->id; ?>" onclick="return confirm('هل تريد بالتأكيد حذف هذا القسم');">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
																
															</div>
															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel dropup">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto" aria-expanded="false">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																       

																
																		<li>
									<a href="Asusers/modify/<?php echo $row->id; ?>" class="tooltip-success" data-rel="tooltip" title="" data-original-title="تعديل">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="Asusers/deleteuser/<?php echo $row->id; ?>" class="tooltip-error" data-rel="tooltip" title="حذف" onclick="return confirm('هل تريد بالتأكيد حذف هذا القسم');" data-original-title="حذف">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
                                                                </div>						</div>
																
																


	</td>
</tr>

	<?php }}else{ ?>
 <tr>
 	<td colspan="10" align="center">
   
     <?php echo "لا يوجد مستخدمين" ?>
 
 	</td>
 </tr>

<?php	} ?>
</tbody>
</table>

<div align="center">
											<ul class="pagination">
											  <?php foreach($links as $link) { ?>
											  						  
												<li>
													<?= $link ?>
												</li>
 												<?php } ?>
											</ul>
										</div>
</div>
</div></div>

    

    
    