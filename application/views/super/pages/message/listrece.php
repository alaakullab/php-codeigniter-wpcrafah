<div class="col-xs-12">
<div class="row">
	<div class="col-xs-10">

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
        <a  href='Messages/sendmsg' class="dt-button buttons-copy buttons-html5 btn btn-white btn-primary btn-bold"  aria-controls="dynamic-table" data-original-title="" title=""><span><i class="fa fa-paper-plane-o purple bigger-110 pink"></i> <span class="hidden">Copy to clipboard</span></span></a>
        <a href="Messages/actionrec"  class="dt-button buttons-csv buttons-html5 btn btn-white btn-primary btn-bold" hidden   name="export" class="btn btn-success" value="Export" ><span><i class="fa fa-database bigger-110 orange"></i> <span class="hidden">Export to CSV</span></span></a>
        <button class="dt-button buttons-print btn btn-white btn-primary btn-bold"  aria-controls="dynamic-table" onclick="window.print();" title=""><span><i class="fa fa-print bigger-110 grey"></i> <span class="hidden">Print</span></span></button>
    </div>
      </div>
      

      
      
      
      
      
      
      
            <div class=' col-lg-3 live-email'>
      
       <h4 style="color:red;">
      <?php
           
       $search=$this->input->post('search');
            foreach($rex as $row){ 
           $res=$row->title;
            

            similar_text($search, $res, $similarity_pst);
                if(number_format($similarity_pst,0) > 90){
                    $too_similar= $row->title;
                    
                               echo "  هل تقصد  :  &quot;  <input  style='background-color:white;border:0px;color:blue;'  type='submit'    name='search' value='$row->title' id='search btnInput'>&quot;  "; 
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
<th>عناون الرسالة</th>
<th>اسم المرسل</th>
<th>البريد الالكتروني</th>
<th>الحالة</th>
<th>تاريخ الارسال</th>
<th>العملية</th>
</tr>
</thead>
<tbody align="right">
	<?php  
  /* target="_blank" href="assets/upload/<?php echo $row->senderfile; ?>" */
     if($results != NULL){
	foreach($results as $row){ ?>
	<tr  <?php  if($row->Isread==0){ ?> style="background:pink" <?php }else{ ?>
  style="background:#ffffff" <?php } ?>>

     	<td><?php echo $row->id; ?></td>
          <td>   
                         <?php 
     if($row->senderfile != NULL){ ?>
          <a target="_blank" href="assets/upload/<?php echo $row->senderfile; ?>" ><span class="attachment"><i class="ace-icon fa fa-paperclip"></i>
																	</span>
            </a>
               <?php } else{  } ?>
            <a style=" margin-right: 14px;cursor:pointer" data-toggle="modal" data-target=".bs-example-modal-sm" class="detail-message " id="<?php echo $row->id;?>"><?php echo $row->title; ?></a></td>
        <td><?php echo $row->sendername; ?></td>
        <td><?php echo $row->email; ?></td>
<td><?php if($row->Isread==1){echo"مقروء";}else echo"غير مقروء"; ?></td>
        <td><?php echo $row->sendDate; ?></td>


	<td>

<div class="hidden-sm hidden-xs action-buttons">          


<a class="info" href="Messages/replymsg/<?= $row->id; ?>">
																	<i class="ace-icon fa fa-reply bigger-130"></i>
																</a>

	<a  <?php if($row->Isread==0){ ?>  class="red"  <?php }else{ ?>
  class="red"  <?php } ?> href="Messages/deleterec/<?php echo $row->id; ?>" onclick="return confirm('هل تريد بالتأكيد حذف هذا القسم');">
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
																			<a href="Messages/addCat/?id=<?= $row->id; ?>" class="tooltip-info" data-rel="tooltip" title="" data-original-title="إضافة">
																				<span class="blue">
																					<i class="ace-icon fa fa-reply bigger-120"></i>
																				</span>
																			</a>
																		</li>
																		
																		<li>
																			<a href="Messages/replymsg/<?php echo $row->id; ?>" class="tooltip-success" data-rel="tooltip" title="" data-original-title="تعديل">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="Messages/deleterec/<?php echo $row->id; ?>" class="tooltip-error" data-rel="tooltip" title="حذف" onclick="return confirm('هل تريد بالتأكيد حذف هذا القسم');" data-original-title="حذف">
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
 	<td colspan="7" align="center">
   
     <?php echo "لا يوجد نتائج" ?>
 
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

    

    
    