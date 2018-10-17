		<div class="message-content" id="id-message-content">
									<div class="message-header clearfix">
										<div class="pull-left">
											<span class="blue bigger-125"> <?= $view['title'] ?> </span>

											<div class="space-4"></div>

											<i class="ace-icon fa fa-star orange2"></i>

											&nbsp;
                                            
                               <?php 
           if($view['senderimg']==""){ ?>
          <img src="assets/image/users/user.png" width="32" class="middle" >
          <?php }else{
            ?>
    
    <img src="assets/image/users/<?php echo $view['senderimg']; ?> "  class="middle" width="32" >
      <?php  } ?>
										
											&nbsp;
											<a href="#" class="sender"><?= $view['sendername'] ?></a>

											&nbsp;
											<i class="ace-icon fa fa-clock-o bigger-110 orange middle"></i>
											<span class="time grey"><?= $view['sendDate'] ?></span>
										</div>

										<div class="pull-right action-buttons">
								<!--			 <a href="#">
												<i class="ace-icon fa fa-reply green icon-only bigger-130"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-mail-forward blue icon-only bigger-130"></i>
											</a> -->

<a  href="Messages/deletesed/<?= $view['id'] ?>" onclick="return confirm('هل تريد بالتأكيد حذف هذا القسم');">
												<i class="ace-icon fa fa-trash-o red icon-only bigger-130"></i>
											</a>
										</div>
									</div>

									<div class="hr hr-double"></div>

									<div class="message-body">
										<p>
											<?= $view['message'] ?>
										</p>

										
									</div>

									<div class="hr hr-double"></div>

									<div class="message-attachment clearfix">
										<div class="attachment-title">
											<span class="blue bolder bigger-110">المرفقات</span>
											&nbsp;
                                            						&nbsp;
										<ul class="attachment-list pull-rigth list-unstyled">
											<li>
                            <?php 
     if($view['senderfile'] != NULL){ ?>
												<a href="assets/upload/<?php echo $view['senderfile']; ?>" class="attached-file">
													<i class="ace-icon fa fa-file-o bigger-110"></i>
                                        <?php // $fa=explode(',',$view['senderfile']) ?>
													<span class="attached-name"><?= $view['senderfile'] ?></span>
												</a>
												<span class="action-buttons">
													<a href="assets/upload/<?php echo $view['senderfile']; ?>" >
														<i class="ace-icon fa fa-download bigger-125 blue"></i>
													</a>

											<!--		<a href="#">
														<i class="ace-icon fa fa-trash-o bigger-125 red"></i>
													</a> -->
												</span>
            <?php } else{    } ?>
											</li>

										</ul>
                                            
                                            
									<!--		<span class="grey">(2 files, 4.5 MB)</span>

											<div class="inline position-relative">
												<a href="#" data-toggle="dropdown" class="dropdown-toggle">
													&nbsp;
													<i class="ace-icon fa fa-caret-down bigger-125 middle"></i>
												</a>

												<ul class="dropdown-menu dropdown-lighter">
													<li>
														<a href="#">Download all as zip</a>
													</li>

													<li>
														<a href="#">Display in slideshow</a>
													</li>
												</ul>
											</div> -->
										</div>

				

								<!--		<div class="attachment-images pull-right">
											<div class="vspace-4-sm"></div>

											<div>
												<img width="36" alt="image 4" src="assets/images/gallery/thumb-4.jpg" />
												<img width="36" alt="image 3" src="assets/images/gallery/thumb-3.jpg" />
												<img width="36" alt="image 2" src="assets/images/gallery/thumb-2.jpg" />
												<img width="36" alt="image 1" src="assets/images/gallery/thumb-1.jpg" />
											</div>
										</div> -->
									</div>
								</div><!-- /.message-content -->
