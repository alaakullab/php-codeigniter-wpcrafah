
<?php
    echo form_open('Home/sampleactivlistadmin');

    

?>
<div>

</div>
<div  class='panel panel-heading  dark'> 
    <div  align='center'>
 <div class='panel-heading ui-draggable-handle dark'>
       
            <div class='box'>       
            
                   
  <form  method='post' action='index.php'  id='searchform' class='frms'>
  
  <div class=' col-lg-4'>
	      <input  type='text' class='form-control' id="searchBox"  placeholder="ابحث هنا"  name='search' autocomplete='off'> 
           </div>
              <div class=' col-lg-3'>
      
       <h4 style="color:red;">
      <?php
         $search=$this->input->post('search');
            foreach($rex as $row){ 
           $res=$row->activ_discrip;
            

            similar_text($search, $res, $similarity_pst);
                if(number_format($similarity_pst,0) > 80){
                    $too_similar= $row->activ_discrip;                    
                               echo "  هل تقصد  :  &quot;  <input  style='background-color:white;border:0px;color:blue;'  type='submit'    name='search' value='$row->activ_discrip' id='search btnInput'>&quot;  "; 
                     break;
                }
            }
          
           
            ?>
           </h4>  
          </div>
      <div class="pull-right tableTools-container">
    <div class="dt-buttons btn-overlap btn-group">
        <button class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold"  aria-controls="dynamic-table" name='submit' type="submit"  title=""><span><i class="fa fa-search bigger-110 blue"></i> <span class="hidden">Show/hide columns</span></span></button>
        <a  href='Sampleactiv/addsample' class="dt-button buttons-copy buttons-html5 btn btn-white btn-primary btn-bold"  aria-controls="dynamic-table" data-original-title="" title=""><span><i class="fa fa-plus-circle purple bigger-110 pink"></i> <span class="hidden">Copy to clipboard</span></span></a>
     
     
     <a href="Sampleactiv/actionadd"  class="dt-button buttons-csv buttons-html5 btn btn-white btn-primary btn-bold" hidden   name="export" class="btn btn-success" value="Export" ><span><i class="fa fa-database bigger-110 orange"></i> <span class="hidden">Export to CSV</span></span></a>
        
        <button class="dt-button buttons-print btn btn-white btn-primary btn-bold"  aria-controls="dynamic-table" onclick="window.print();" title=""><span><i class="fa fa-print bigger-110 grey"></i> <span class="hidden">Print</span></span></button>
    </div>
      </div>
    
                
                </form>
       <div class=' col-lg-1'>
     
      </div>
      </div>  </div> </div>  </div>



    <div class="panel-body">
       <div class="table-responsive">
           
<table id="datatables"  align="center" style="margin:0;" class="main-table text-center table table-striped  table-bordered  ">

	<thead>
<tr>
<th style="text-align: center;">#</th>
<th style="text-align: center;">وصف النشاط</th>
<th style="text-align: center;">مكان إنعقاد النشاط</th>
<th style="text-align: center;">مدة النشاط بالأيام</th>
<th style="text-align: center;">الجهة المنظمة</th>
<th style="text-align: center;">تاريخ النشاط</th>
<th style="text-align: center;">ملاحظات النشاط</th>
<th style="text-align: center;">المؤسسة</th>
<th style="text-align: center;">العملية</th>
</tr>
</thead>
<tbody>
	<?php 
     if($results != NULL){
	foreach($results as $row){ ?>
	<tr>
	
     	<td><?php echo $row->activ_id; ?></td>
       <td><a  href="Sampleactiv/views/<?php echo $row->activ_id; ?>"><?php echo $row->activ_discrip; ?></a></td>
        <td><?php echo $row->activ_place; ?></td>
        <td><?php echo $row->activ_duration; ?></td>
        <td><?php echo $row->activ_organisers ; ?></td>
        <td><?php echo $row->activ_date; ?></td>
        <td><?php echo $row->activ_notes; ?></td>
         <td><?php echo $row->username; ?></td>

        
	<td>
    

<div class="hidden-sm hidden-xs action-buttons">          



																<a class="green" href="Sampleactiv/modify/<?php echo $row->activ_id; ?>">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="Sampleactiv/deleteCat/<?php echo $row->activ_id; ?>" onclick="return confirm('هل تريد بالتأكيد حذف هذا النشاط');">
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
																			<a href="Sampleactiv/addCat/?id=<?= $row->activ_id; ?>" class="tooltip-info" data-rel="tooltip" title="" data-original-title="إضافة">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
																			</a>
																		</li>
																		
																		<li>
																			<a href="Sampleactiv/modify/<?php echo $row->activ_id; ?>" class="tooltip-success" data-rel="tooltip" title="" data-original-title="تعديل">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="Sampleactiv/deleteCat/<?php echo $row->activ_id; ?>" class="tooltip-error" data-rel="tooltip" title="حذف" onclick="return confirm('هل تريد بالتأكيد حذف هذا النشاط');" data-original-title="حذف">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
                                                                </div>						</div>
																


	</td>	
</tr>

	<?php  }}else{ ?>
 <tr>
 	<td colspan="10" align="center">
   
     <?php echo "لا يوجد أنشطة" ?>
 
 	</td>
 </tr>
    

<?php	} ?>
</tbody>
</table>
<div class="hidden-sm hidden-xs action-buttons" align="left">
															
															</div>
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
</div>