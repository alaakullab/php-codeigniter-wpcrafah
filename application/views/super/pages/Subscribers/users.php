
								<!-- PAGE CONTENT BEGINS -->
								<div>
									<ul class="ace-thumbnails clearfix">

	<?php 
     if($rec != NULL){
	foreach($rec as $row){ ?>
										<li>
<a href="home/Subscriberslist/<?php echo $row->id; ?>" >
               
           <?php 
               
        if($row->imgsrc==""){ ?>
          <img  src="assets/image/users/user.png" width="150" height="150">
          <?php }else{
            ?>  <div class="col-lg-8">
          <img src="assets/image/users/<?php echo $row->imgsrc; ?>" width="150" height="150"
               ></div>
    </a>
      <?php  } ?>
												<div class="tags">
													<span class="label-holder">
							<span class="label label-info arrowed"><?php echo $row->username; ?></span>
													</span>
<span class="label-holder">
								<span class="label label-success"><?php echo $row->addres; ?></span>
												</span>
												
												</div>
											
											<div class="tools tools-top">
												<a href="#">
													<i class="ace-icon fa fa-link"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-paperclip"></i>
												</a>

												<a href="Asusers/modify/<?php echo $row->id; ?>">
													<i class="ace-icon fa fa-pencil"></i>
												</a>

												<a href="#">
													<i class="ace-icon fa fa-times red"></i>
												</a>
											</div>
                                            
										</li>
<?php }} ?>
									</ul>
								</div><!-- PAGE CONTENT ENDS -->
						