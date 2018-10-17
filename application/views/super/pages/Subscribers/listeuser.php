

<div id="msg">
<head>
    <script type="text/javascript" language="javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/json2.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>

    
    


    </head>
<?php
    echo form_open('Home/Subscriberslistusers');

    

?>
<div>

</div>
<div  class='panel panel-heading  dark'> 
    <div  align='center'>
 <div class='panel-heading ui-draggable-handle dark'>
       
            <div class='box'>       

                   
  <form  method='post' action='index.php'  id="form" class='frms'>
   
  <div class=' col-lg-4'>
      <div id="container">
  <input  type='text' data-class=".live-email"   class=' form-control' id="mysearch"  autocomplete="off" placeholder="ابحث هنا"  name='search' onkeyup="doSearch();" >  
   

</div>

           </div>
           
      
            <div class=' col-lg-3 live-email'>
       <a class=' lable'  id="searchresults"></a>
       <h4 style="color:red;">
      <?php
         $search=$this->input->post('search');
            foreach($rex as $row){ 
           $res=$row->sub_fulllname;
            $resa=$row->sub_tel;
            

            similar_text($search, $res, $similarity_pst);
                if(number_format($similarity_pst,0) > 70){
                    $too_similar= $row->sub_fulllname;
                     $too_similar= $row->sub_tel;
                    
                               echo "  هل تقصد  :  &quot;  <input  style='background-color:white;border:0px;color:blue;'  type='submit'    name='search' value='$row->sub_fulllname' id='search btnInput'>&quot;  "; 
                     break;
                }
            }
          
           
            ?>
           </h4>  
 
                  
          </div>

 <div class="pull-right tableTools-container">
    <div class="dt-buttons btn-overlap btn-group">
        <button class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold"  aria-controls="dynamic-table" name='submit' type="submit"  title=""><span><i class="fa fa-search bigger-110 blue"></i> <span class="hidden">Show/hide columns</span></span></button>
        <?php if( @$_SESSION['adminisread'] == 4){ ?>
        <a  href='Subscribers/addsubscribadd' class="dt-button buttons-copy buttons-html5 btn btn-white btn-primary btn-bold"  aria-controls="dynamic-table" data-original-title="" title=""><span><i class="fa fa-plus-circle purple bigger-110 pink"></i> <span class="hidden">Copy to clipboard</span></span></a>
     <?php } ?>
        
           <?php if( @$_SESSION['adminisread'] != 4){ ?>
        <a  href='Subscribers/addsubscrib' class="dt-button buttons-copy buttons-html5 btn btn-white btn-primary btn-bold"  aria-controls="dynamic-table" data-original-title="" title=""><span><i class="fa fa-plus-circle purple bigger-110 pink"></i> <span class="hidden">Copy to clipboard</span></span></a>
     <?php } ?>
  
 
        
        <button class="dt-button buttons-print btn btn-white btn-primary btn-bold"  aria-controls="dynamic-table" onclick="window.print();" title=""><span><i class="fa fa-print bigger-110 grey"></i> <span class="hidden">Print</span></span></button>
    </div>
      </div>
      

  

	  
 
                </form>
    
      </div>  </div> </div> </div>

    <div class="panel-body">
       <div class="table-responsive">
      
           
<table id="datatables"  align="center" style="margin:0;" class="main-table text-center table table-striped  table-bordered  ">

	<thead>
<tr>
<th   style="text-align: center;">#</th>
<th   style="text-align: center;">الاسم كامل </th>
<th   style="text-align: center;">رقم الهوية </th>
<th   style="text-align: center;">رقم التموين</th>
<th   style="text-align: center;">العنوان</th>
<th   style="text-align: center;">تاريخ الانتساب</th>
<th   style="text-align: center;">رقم الجوال</th>
<th   style="text-align: center;">رقم الهاتف</th>
<th   style="text-align: center;">تاريخ الميلاد</th>
<th   style="text-align: center;">المؤسسة</th>
<th   style="text-align: center;">العملية</th>
</tr>
</thead>
<tbody>
	<?php
    
     if($results != NULL){

         foreach($results as $row){  ?>
	<tr>
	
     	<td><?php echo $row->sub_id; ?></td>
        <td><a href="Subscribers/views/<?= $row->sub_id; ?>"><?php echo $row->sub_fulllname; ?></a></td>
        <td><?php echo $row->id_number; ?></td>
        <td><?php echo $row->sub_no_logistics; ?></td>
        <td><?php echo $row->full_address ; ?></td>
        <td><?php echo $row->reg_date; ?></td>
        <td><?php echo $row->sub_tel; ?></td>
        <td><?php echo $row->sub_phone; ?></td>
        <td><?php echo $row->sub_age; ?></td>
        <td><?php echo $row->username; ?></td>
      
	<td>
    

<div class="hidden-sm hidden-xs action-buttons">          


<a class="green" href="Subscribers/modify/<?= $row->sub_id; ?>">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="Subscribers/deleteCat/<?php echo $row->sub_id; ?>" onclick="return confirm('هل تريد بالتأكيد حذف هذا القسم');">
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
																			<a href="Subscribers/addCat/?id=<?= $row->sub_id; ?>" class="tooltip-info" data-rel="tooltip" title="" data-original-title="إضافة">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
																			</a>
																		</li>
																		
																		<li>
																			<a href="Subscribers/modify/<?php echo $row->sub_id; ?>" class="tooltip-success" data-rel="tooltip" title="" data-original-title="تعديل">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="Subscribers/deleteCat/<?php echo $row->sub_id; ?>" class="tooltip-error" data-rel="tooltip" title="حذف" onclick="return confirm('هل تريد بالتأكيد حذف هذا القسم');" data-original-title="حذف">
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
 	<td colspan="11" align="center">
   
     <?php echo "لا يوجد مشتركين" ?>
 
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
    </div></div>
