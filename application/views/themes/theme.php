<?php
     
if(!isset($_SESSION['adminid'])){
				redirect('site/index');
    
    } 
$aid = $_SESSION['adminid'];    
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?php echo $title;?></title>
        <base href="<?=base_url(); ?>">
		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
   	<link rel="stylesheet" href="assets/css/select2.min.css" />
        		<meta name="description" content="responsive photo gallery using colorbox" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="assets/css/colorbox.min.css" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<!-- text fonts -->


		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="assets/css/select2.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="assets/css/main.rtl.css">
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

    <!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
 
        
<style type="text/css">
        
    .errname{ 
   	color:red;
      	font-size: 14px;
   background-color:pink;
    }
        
        </style>
  
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin rtl">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-right" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				
				<div class="navbar-header pull-right">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
				        <?= $_SESSION['admnickname'] ?>
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-left" role="navigation">
					<ul class="nav ace-nav">
                         <?php if( @$_SESSION['adminisread'] == 2){ ?>
                        				<li class="green dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success"> <span class="ccount">
                                    <?php             
           $sql ="SELECT * FROM tbl_messages WHERE reciverid = $aid  and Isread = 0  ";
$querymsg = $this->db->query($sql);
                echo $querymsg->num_rows();
               
         ?>
             </span></span>
							</a>

<ul class="dropdown-menu-right dropdown-navbar dropdown-menu  dropdown-caret dropdown-close">
								<li class="dropdown-header ">
									<i class="ace-icon fa fa-envelope-o"></i>
                               
								</li>

								<li class="dropdown-content">
<ul class="dropdown-menu dropdown-navbar">
                                   <?php 
   if($querymsg->num_rows() <= 0){
    echo '<span class="green">لا يوجد رسائل غير مقروءة</span>';
   }  ;        
       

        foreach($mesge as $row){ ?>   
										<li>
    
 <a style=" margin-right: 14px;cursor:pointer" data-toggle="modal" data-target=".bs-example-modal-sm" class="detail-message " id="<?php echo $row->id;?>" >
                                                
                        <div id="msg">
                     
                                      
                                
                            </div>
                                            
                                                
                               <?php 
           if($row->senderimg ==""){ ?>
          <img src="assets/image/users/user.png"class="msg-photo" >
          <?php }else{
            ?>
    
    <img src="assets/image/users/<?= $row->senderimg; ?>  "
        
         class="msg-photo" >
      <?php  } ?>
					                                  
<span class="msg-body" >
													<span class="msg-title">
                                                      
														<span class="blue"><?= $row->sendername; ?></span>
													<?= $row->title; ?>
                                                             <?php 
     if($row->senderfile != NULL){ ?>
            <a target="_blank" href="assets/upload/<?php echo $row->senderfile; ?>" ><span class="attachment"><i class="ace-icon fa fa-paperclip"></i>
																	</span>
            </a>
               <?php } ?> 
													</span>

													<span class="msg-time">
                                                        
														<i class="ace-icon fa fa-clock-o"></i>
														<span>	<?= $row->sendDate; ?></span>
													</span>
												</span>
											</a>
										</li>
<?php } ?> 
                                        
    

									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="home/recmail">
										الاطلاع على جميع الرسائل
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="grey dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-tasks"></i>
								<span class="badge badge-grey">0</span>
							</a>

	
						</li>

					<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">0</span>
							</a>

		
						</li>
   
		<?php } ?>
                        
                                <?php if( @$_SESSION['adminisread'] == 1){ ?>
                        				<li class="green dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success"> <span class="ccount">
                                    <?php             
           $sql ="SELECT * FROM tbl_messages WHERE reciverid = $aid  and Isread = 0  ";
$querymsg = $this->db->query($sql);
                echo $querymsg->num_rows();
               
         ?>
             </span></span>
							</a>

<ul class="dropdown-menu-right dropdown-navbar dropdown-menu  dropdown-caret dropdown-close">
								<li class="dropdown-header ">
									<i class="ace-icon fa fa-envelope-o"></i>
                               
								</li>

								<li class="dropdown-content">
<ul class="dropdown-menu dropdown-navbar">
                                   <?php 
   if($querymsg->num_rows() <= 0){
    echo '<span class="green">لا يوجد رسائل غير مقروءة</span>';
   }  ;        
       

        foreach($mesge as $row){ ?>   
										<li>
    
 <a style=" margin-right: 14px;cursor:pointer" data-toggle="modal" data-target=".bs-example-modal-sm" class="detail-message " id="<?php echo $row->id;?>" >
                                                
                        <div id="msg">
                     
                                      
                                
                            </div>
                                            
                                                
                               <?php 
           if($row->senderimg ==""){ ?>
          <img src="assets/image/users/user.png"class="msg-photo" >
          <?php }else{
            ?>
    
    <img src="assets/image/users/<?= $row->senderimg; ?>  "
        
         class="msg-photo" >
      <?php  } ?>
					                                  
<span class="msg-body" >
													<span class="msg-title">
                                                      
														<span class="blue"><?= $row->sendername; ?></span>
													<?= $row->title; ?>
                                                             <?php 
     if($row->senderfile != NULL){ ?>
            <a target="_blank" href="assets/upload/<?php echo $row->senderfile; ?>" ><span class="attachment"><i class="ace-icon fa fa-paperclip"></i>
																	</span>
            </a>
               <?php } ?> 
													</span>

													<span class="msg-time">
                                                        
														<i class="ace-icon fa fa-clock-o"></i>
														<span>	<?= $row->sendDate; ?></span>
													</span>
												</span>
											</a>
										</li>
<?php } ?> 
                                        
    

									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="home/recmail">
										الاطلاع على جميع الرسائل
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="grey dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-tasks"></i>
								<span class="badge badge-grey">0</span>
							</a>

	
						</li>

					<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">0</span>
							</a>

		
						</li>
   
		<?php } ?>
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
                              
<span style=" no-repeat center ">
             <?php 
           if($_SESSION['adminimgsrc']==""){ ?>
          <img src="assets/image/users/user.png" width="45" height="45">
          <?php }else{
            ?>
    
    <img src="assets/image/users/<?php echo $_SESSION ['adminimgsrc']; ?> " width="45" height="45" style="border-radius:50%">
      <?php  } ?>
  </span>   
											<span class="user-info">
									<small>أهلا بك,</small>
									<?php echo $_SESSION['adminname'];  ?>
								</span>
								<i class="ace-icon fa fa-caret-down"></i>
							</a>

				<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<!--	<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										الإعدادات
									</a>
								</li> -->

								<li>
                                    <?php if( @$_SESSION['adminisread'] == 2){ ?>
									<a href="Myprofile/Modifysup/<?= $_SESSION['adminid']; ?>">
										<i class="ace-icon fa fa-user"></i>
										الملف الشخصي
									</a> <?php }else{ ?>
    <a href="Myprofile/Modifyadmin/<?= $_SESSION['adminid']; ?>">
										<i class="ace-icon fa fa-user"></i>
										الملف الشخصي
									</a> 
    
<?php } ?>
								</li>

								<li class="divider"></li>

								<li>
									<a href="site/logout">
										<i class="ace-icon fa fa-power-off"></i>
										خروج
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>
        
        
        
        
<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
                   
					<li class="active">
						<a href="home/index">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> الرئيسية </span>
						</a>

                  					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">
								نماذج الإدخال
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
						<b class="arrow"></b>
                            
                            	       <?php if( @$_SESSION['adminisread'] == 2){ ?>
							<li class="">
								<a href="home/Subscriberslist">
									<i class="menu-icon fa fa-caret-right"></i>
									نموذج المشتركين <span class="badge badge-primary">
                                                                                             
<?php
         
$sql ="SELECT * FROM subscriber_tbl  ";
$query = $this->db->query($sql);
                echo $query->num_rows();
           ?>
               
                                    
                                    </span>
								</a>

								<b class="arrow"></b>
							</li>
                            <?php } ?>
		       <?php if( @$_SESSION['adminisread'] == 1){ ?>
							<li class="">
								<a href="home/Subscriberslistadmin">
									<i class="menu-icon fa fa-caret-right"></i>
									نموذج المشتركين <span class="badge badge-primary">
                                                                                             
<?php
         
$sql ="SELECT * FROM subscriber_tbl  WHERE user_id = $aid  ";
$query = $this->db->query($sql);
                echo $query->num_rows();
           ?>
               
                                    
                                    </span>
								</a>

								<b class="arrow"></b>
							</li>
          <?php }elseif( @$_SESSION['adminisread'] == 4){ ?>
                          	<li class="">
								<a href="home/Subscriberslistusers">
									<i class="menu-icon fa fa-caret-right"></i>
									نموذج المشتركين <span class="badge badge-primary">
<?php
$sql ="SELECT * FROM subscriber_tbl WHERE user_id = $aid ";
$query = $this->db->query($sql);
               if($query->num_rows() > 9999){
                echo "+9999";
                    }else{
                     echo $query->num_rows();
                }
           ?>
                                    </span>
								</a>
								<b class="arrow"></b>
							</li>
                            
                            <?php }elseif( @$_SESSION['adminisread'] == 0){ ?>
                            <li class="">
								<a href="Subscribers/addsubscribadd">
									<i class="menu-icon fa fa-caret-right"></i>
									إدخال المشتركين <span class="badge badge-primary">
<?php
$sql ="SELECT * FROM subscriber_tbl WHERE user_id = $aid ";
$query = $this->db->query($sql);
               if($query->num_rows() > 9999){
                echo "+9999";
                    }else{
                     echo $query->num_rows();
                }
           ?>
                                    </span>
								</a>
								<b class="arrow"></b>
							</li>
                            
                             <?php } ?>
                            
                            
       <?php if( @$_SESSION['adminisread'] == 2){ ?>
							<li class="">
								<a href="home/sampleactivlist">
									<i class="menu-icon fa fa-caret-right"></i>
									 نموذج الأنشطة <span class="badge badge-primary">
                                    
<?php
                                                    
            $sql ="SELECT * FROM activites_model_tbl";
$query = $this->db->query($sql);
              if($query->num_rows() > 9999){
                echo "+9999";
                    }else{
                     echo $query->num_rows();
                }
           ?>
                                    
                                    </span>
								</a>

								<b class="arrow"></b>
							</li>
                   <?php }elseif( @$_SESSION['adminisread'] == 1){ ?>
							<li class="">
								<a href="home/sampleactivlistadmin">
									<i class="menu-icon fa fa-caret-right"></i>
									 نموذج الأنشطة <span class="badge badge-primary">
<?php
                                                    
            $sql ="SELECT * FROM activites_model_tbl";
$query = $this->db->query($sql);
              if($query->num_rows() > 9999){
                echo "+9999";
                    }else{
                     echo $query->num_rows();
                }
           ?>
               
                                    
                                    </span>
								</a>

								<b class="arrow"></b>
							</li>
                <?php }elseif( @$_SESSION['adminisread'] == 4){ ?>
							<li class="">
								<a href="home/sampleactivlistusers">
									<i class="menu-icon fa fa-caret-right"></i>
									 نموذج الأنشطة <span class="badge badge-primary">
<?php
                                                    
            $sql ="SELECT * FROM activites_model_tbl";
$query = $this->db->query($sql);
              if($query->num_rows() > 9999){
                echo "+9999";
                    }else{
                     echo $query->num_rows();
                }
           ?>
               
                                    
                                    </span>
								</a>

								<b class="arrow"></b>
							</li>
                            <?php }elseif( @$_SESSION['adminisread'] == 0){ ?>
                          	<li class="">
								<a href="Sampleactiv/addsampleadd">
									<i class="menu-icon fa fa-caret-right"></i>
									 إدخال الأنشطة <span class="badge badge-primary">
                                    
                                                         <?php
         
$sql ="SELECT * FROM activites_model_tbl WHERE user_id = $aid ";
$query = $this->db->query($sql);
               if($query->num_rows() > 9999){
                echo "+9999";
                    }else{
                     echo $query->num_rows();
                }
           ?>
                
                                    
                                    </span>
								</a>

								<b class="arrow"></b>
							</li>  
                            
                             <?php } ?>
   <?php if( @$_SESSION['adminisread'] == 2){ ?>
							<li class="">
								<a href="home/Initiativeslist">
									<i class="menu-icon fa fa-caret-right"></i>
									نموذج المبادرات <span class="badge badge-primary">
                                    
                                    
                                                                        
                            <?php
         
$sql ="SELECT * FROM initiatives_model_tbl WHERE user_id = $aid ";
$query = $this->db->query($sql);
               if($query->num_rows() > 9999){
                echo "+9999";
                    }else{
                     echo $query->num_rows();
                }
           ?>
                                    
                                    </span>
								</a>

								<b class="arrow"></b>
							</li>
         <?php }elseif( @$_SESSION['adminisread'] == 1){ ?>
							<li class="">
								<a href="home/Initiativeslistadmin">
									<i class="menu-icon fa fa-caret-right"></i>
									نموذج المبادرات <span class="badge badge-primary">
                                    
                                    
                                                                        
                            <?php
         
$sql ="SELECT * FROM initiatives_model_tbl WHERE user_id = $aid ";
$query = $this->db->query($sql);
                if($query->num_rows() > 9999){
                echo "+9999";
                    }else{
                     echo $query->num_rows();
                }
           ?>
                                    
                                    </span>
								</a>

								<b class="arrow"></b>
							</li>
             <?php }elseif( @$_SESSION['adminisread'] == 4){ ?>
							<li class="">
								<a href="home/Initiativeslistusers">
									<i class="menu-icon fa fa-caret-right"></i>
									نموذج المبادرات <span class="badge badge-primary">
                                    
                                    
                                                                        
                            <?php
         
$sql ="SELECT * FROM initiatives_model_tbl WHERE user_id = $aid ";
$query = $this->db->query($sql);
                if($query->num_rows() > 9999){
                echo "+9999";
                    }else{
                     echo $query->num_rows();
                }
           ?>
                                    
                                    </span>
								</a>

								<b class="arrow"></b>
							</li>                       
 <?php }elseif( @$_SESSION['adminisread'] == 0){ ?>
                         <li class="">
								<a href="Initiatives/addinitiadmin">
									<i class="menu-icon fa fa-caret-right"></i>
									إدخال المبادرات <span class="badge badge-primary">
                                    
                            <?php
         
$sql ="SELECT * FROM initiatives_model_tbl WHERE user_id = $aid ";
$query = $this->db->query($sql);
                if($query->num_rows() > 9999){
                echo "+9999";
                    }else{
                     echo $query->num_rows();
                }
           ?>
                                    
                                    </span>
								</a>

								<b class="arrow"></b>
							</li>   
                       <?php } ?>      
						</ul>
					</li>

              
            <?php if( @$_SESSION['adminisread'] == 2){ ?>
                  				<li class="">
						<a href="home/userslist">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> استعلام مستخدمين 
                                <span class="badge badge-primary">
                                
<?php
         
$sql ="SELECT * FROM tbl_user WHERE parentid = $aid ";
$query = $this->db->query($sql);
                if($query->num_rows() > 9){
                echo "+9";
                    }else{
                     echo $query->num_rows();
                }
           ?>
                                
                                </span>
                            
                            </span>
						</a>
						<b class="arrow">  
        
                                    </b>
					</li>
                    <?php } ?>
                    
              <?php if( @$_SESSION['adminisread'] == 1){ ?>
                  				<li class="">
						<a href="home/useraddlist">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> استعلام مستخدمين
                            
                            <span class="badge badge-primary">
                                
<?php
         
$sql ="SELECT * FROM tbl_user WHERE parentid = $aid ";
$query = $this->db->query($sql);
                 if($query->num_rows() > 9){
                echo "+9";
                    }else{
                     echo $query->num_rows();
                }
           ?>
                                
                                </span>
                            
                            </span>
						</a>

						<b class="arrow"></b>
					</li>
                    <?php } ?>
                        <?php if( @$_SESSION['adminisread'] == 2){ ?>
					<li class="">
						<a href="home/imggallery">
							<i class="menu-icon fa fa-picture-o"></i>
							<span class="menu-text"> معرض جميع المتخدمين
                         
                            <span class="badge badge-primary">
                                
<?php
         
$sql ="SELECT * FROM tbl_user ";
$query = $this->db->query($sql);
               if($query->num_rows() > 99){
                echo "+99";
                    }else{
                     echo $query->num_rows();
                }
           ?>
                                
                                </span>
                            
                            
                            </span>
						</a>

						<b class="arrow"></b>
					</li>
                     <?php } ?>
         <?php if( @$_SESSION['adminisread'] == 1 ){ ?>
                    <li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-envelope-o"></i>
							<span class="menu-text">صندوق الرسائل</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
					
				 <li class="">
						<a href="home/recmail">
							<i class="menu-icon fa fa-envelope-o"></i>
							<span class="menu-text">الرسائل الواردة
                                      <span class="badge badge-primary">
<?php
                                                 
           $sql ="SELECT * FROM tbl_messages WHERE reciverid = $aid  and Isread = 0  ";
$query = $this->db->query($sql);
                echo $query->num_rows();
         ?>
                                         </span>
                            </span>
						</a>

						<b class="arrow"></b>
					</li>
                     <li class="">
						<a href="home/sendrmail">
							<i class="menu-icon fa fa-envelope-square"></i>
							<span class="menu-text">الرسائل الصادرة
                            
                            
    <span class="badge badge-primary">
<?php
                                                 
           $sql ="SELECT * FROM tbl_messages WHERE senderid = $aid and Isread = 0 ";
$query = $this->db->query($sql);
                echo $query->num_rows();
         ?>
</span>                
            
                            
                            </span>
						</a>

						<b class="arrow"></b>
					</li>

						</ul>
					</li>
                       
                           <li class="">
						<a href="Messages/sendmsg">
							<i class="menu-icon fa fa-paper-plane-o"></i>
							<span class="menu-text">إرسال رسالة</span>
						</a>

						<b class="arrow"></b>
					</li>
	
	
    
                  <?php } ?>
                       <?php if( @$_SESSION['adminisread'] == 2 ){ ?>
                    <li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-envelope-o"></i>
							<span class="menu-text">صندوق الرسائل</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
					
				 <li class="">
						<a href="home/recmail">
							<i class="menu-icon fa fa-envelope-o"></i>
							<span class="menu-text">الرسائل الواردة
                                      <span class="badge badge-primary">
<?php
                                                 
           $sql ="SELECT * FROM tbl_messages WHERE reciverid = $aid  and Isread = 0  ";
$query = $this->db->query($sql);
                echo $query->num_rows();
         ?>
                                         </span>
                            </span>
						</a>

						<b class="arrow"></b>
					</li>
                     <li class="">
						<a href="home/sendrmail">
							<i class="menu-icon fa fa-envelope-square"></i>
							<span class="menu-text">الرسائل الصادرة
                            
                            
    <span class="badge badge-primary">
<?php
                                                 
           $sql ="SELECT * FROM tbl_messages WHERE senderid = $aid and Isread = 0 ";
$query = $this->db->query($sql);
                echo $query->num_rows();
         ?>
</span>                
            
                            
                            </span>
						</a>

						<b class="arrow"></b>
					</li>

						</ul>
					</li>
                       
                           <li class="">
						<a href="Messages/sendmsg">
							<i class="menu-icon fa fa-paper-plane-o"></i>
							<span class="menu-text">إرسال رسالة</span>
						</a>

						<b class="arrow"></b>
					</li>
	
	
    
                  <?php } ?>
                
                    
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
                            <a href="home/index">الرئيسية</a>
							</li>
                            <li class="active"><a href="<?php echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];?>"><?php echo $title;?></a></li>
						</ul>
                        
                        <!-- /.breadcrumb -->

				<!--		<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div> -->
					</div>

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
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
                                    
									
						  <?= $output; ?>
						
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div>
				</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">ِAlaa E Kullab</span>
							Copyright  &copy; <?=Date('Y'); ?>
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
						<!--	<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a> 
							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
-->
                            <a target="_blank" href="https://www.facebook.com/alaa.ehab.790">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

        
        
        
        
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/jquery.sparkline.index.min.js"></script>
		<script src="assets/js/jquery.flot.min.js"></script>
		<script src="assets/js/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.flot.resize.min.js"></script>
		<script src="assets/js/bootstrap-markdown.min.js"></script>
        

 
        
        
        <script src="assets/js/jquery.colorbox.min.js"></script>
        <!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
	var $overflow = '';
	var colorbox_params = {
		rel: 'colorbox',
		reposition:true,
		scalePhotos:true,
		scrolling:false,
		previous:'<i class="ace-icon fa fa-arrow-left"></i>',
		next:'<i class="ace-icon fa fa-arrow-right"></i>',
		close:'&times;',
		current:'{current} of {total}',
		maxWidth:'100%',
		maxHeight:'100%',
		onOpen:function(){
			$overflow = document.body.style.overflow;
			document.body.style.overflow = 'hidden';
		},
		onClosed:function(){
			document.body.style.overflow = $overflow;
		},
		onComplete:function(){
			$.colorbox.resize();
		}
	};

	$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
	$("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon
	
	
	$(document).one('ajaxloadstart.page', function(e) {
		$('#colorbox, #cboxOverlay').remove();
   });
})
		</script>
        
        

	

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});
			
			
			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;
			
			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			
			
				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();
			
					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});
			
			})
		</script>
                <script type="text/javascript">
    $(function () {
    
$('.live').keyup(function () {
   $($(this).data('class')).text($(this).val());
});
  
   
    })
      </script>
        
         
		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    <script type="text/javascript">
        if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="assets/js/wizard.min.js"></script>
		<script src="assets/js/jquery.validate.min.js"></script>
		<script src="assets/js/jquery-additional-methods.min.js"></script>
		<script src="assets/js/bootbox.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/select2.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
    <script src="assets/js/ace.min.js"></script>
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			
				$('[data-rel=tooltip]').tooltip();
			
				$('.select2').css('width','200px').select2({allowClear:true})
				.on('change', function(){
					$(this).closest('form').validate().element($(this));
				}); 
			
			
				var $validation = false;
				$('#fuelux-wizard-container')
				.ace_wizard({
					//step: 2 //optional argument. wizard will jump to step "2" at first
					//buttons: '.wizard-actions:eq(0)'
				})
				.on('actionclicked.fu.wizard' , function(e, info){
					if(info.step == 1 && $validation) {
						if(!$('#validation-form').valid()) e.preventDefault();
					}
				})
				//.on('changed.fu.wizard', function() {
				//})
			.on('finished.fu.wizard', function(e) {
			bootbox.dialog({
						message: "شكرا! تم حفظ معلوماتك بنجاح! ", 
						buttons: {
							"success" : {
								"label" : "تم ",
								"className" : "btn-sm btn-primary"
							}
						}
					});
				}).on('stepclick.fu.wizard', function(e){
					//e.preventDefault();//this will prevent clicking and selecting steps
				});
			
			
				//jump to a step
				/**
				var wizard = $('#fuelux-wizard-container').data('fu.wizard')
				wizard.currentStep = 3;
				wizard.setState();
				*/
			
				//determine selected step
				//wizard.selectedItem().step
			
			
			
				//hide or show the other form which requires validation
				//this is for demo only, you usullay want just one form in your application
				$('#skip-validation').removeAttr('checked').on('click', function(){
					$validation = this.checked;
					if(this.checked) {
						$('#sample-form').hide();
						$('#validation-form').removeClass('hide');
					}
					else {
						$('#validation-form').addClass('hide');
						$('#sample-form').show();
					}
				})
			
			
			
				//documentation : http://docs.jquery.com/Plugins/Validation/validate
			
			
				$.mask.definitions['~']='[+-]';
				$('#phone').mask('(999) 999-9999');
			
				jQuery.validator.addMethod("phone", function (value, element) {
					return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");
			
				$('#validation-form').validate({
					errorElement: 'div',
					errorClass: 'help-block',
					focusInvalid: false,
					ignore: "",
					rules: {
						email: {
							required: true,
							email:true
						},
						password: {
							required: true,
							minlength: 5
						},
						password2: {
							required: true,
							minlength: 5,
							equalTo: "#password"
						},
						name: {
							required: true
						},
						phone: {
							required: true,
							phone: 'required'
						},
						url: {
							required: true,
							url: true
						},
						comment: {
							required: true
						},
						state: {
							required: true
						},
						platform: {
							required: true
						},
						subscription: {
							required: true
						},
						gender: {
							required: true,
						},
						agree: {
							required: true,
						}
					},
			
					messages: {
						email: {
							required: "يرجى تقديم عنوان بريد إلكتروني صالح.",
							email: "يرجى تقديم عنوان بريد إلكتروني صالح."
						},
						password: {
							required: "يرجى تحديد كلمة مرور.",
							minlength: "يرجى تحديد كلمة مرور."
						},
						state: "Please choose state",
						subscription: "Please choose at least one option",
						gender: "Please choose gender",
						agree: "Please accept our policy"
					},
			
			
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});
			
				
				
				
				$('#modal-wizard-container').ace_wizard();
				$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
				
				
				/**
				$('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				
				$('#mychosen').chosen().on('change', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				*/
				
				
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					$('[class*=select2]').remove();
				});
			})
		</script>
        
 
 <script type="text/javascript">
    $(function () {
      
$('.live').keyup(function () {
   $($(this).data('class')).text($(this).val());
});

    })
      </script>
               
        
        
        
        
        

  
	<script src="<?php echo base_url('node_modules/socket.io/node_modules/socket.io-client/socket.io.js');?>"></script>
	<script>
  $(document).ready(function(){

		$("#load").hide();

     $(document).on("click",".detail-message",function() {
      
      $( "#load" ).show();

       var dataString = { 
              id : $(this).attr('id')
            };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url('message/detail');?>",
            data: dataString,
            dataType: "json",
            cache : false,
            success: function(data){

              $( "#load" ).hide();

              if(data.success == true){

                $("#show_name").html(data.name);
                $("#show_email").html(data.email);
                $("#show_subject").html(data.subject);
                $("#show_created_at").html(data.sendDate);
                $("#show_message").html(data.message);
                $("#show_file").html(data.senderfile);

                var socket = io.connect( 'http://'+window.location.hostname+':3000' );
                
                socket.emit('update_count_message', { 
                  update_count_message: data.update_count_message
                });

              } 
          
            } ,error: function(xhr, status, error) {
              alert(error);
            },

        });

    });

  });

  var socket = io.connect( 'http://'+window.location.hostname+':3000' );

  socket.on( 'new_count_message', function( data ) {
  
      $( "#new_count_message" ).html( data.new_count_message );
      $('#notif_audio')[0].play();

  });

  socket.on( 'update_count_message', function( data ) {

      $( "#new_count_message" ).html( data.update_count_message );
    
  });

  socket.on( 'new_message', function( data ) {
  
      $( "#message-tbody" ).prepend('<tr><td>'+data.name+'</td><td>'+data.email+'</td><td>'+data.subject+'</td><td>'+data.created_at+'</td><td><a style="cursor:pointer" data-toggle="modal" data-target=".bs-example-modal-sm" class="detail-message" id="'+data.id+'"><span class="glyphicon glyphicon-search"></span></a></td></tr>');
      $( "#no-message-notif" ).html('');
      $( "#new-message-notif" ).html('<div class="alert alert-success" role="alert"> <i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>New message ...</div>');
  });

</script>
        
        
        
        
   
	</body>
</html>
  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">✕</button>
                      <h4>عرض الرسالة</h4>
                  </div>
                  
                  <div class="modal-body" style="text-align:center;">
                    <div class="row-fluid">
                     <div class="span10 offset1">
                       <div id="modalTab">
                         <div class="tab-content">
                           <div class="tab-pane active" id="about">
		<div class="message-content" id="id-message-content">
									<div class="message-header clearfix">
										<div class="pull-left">
										

											<div class="space-3"></div>

											<i class="ace-icon fa fa-star orange2"></i>

											&nbsp;
        
											<a href="#" class="sender" id="show_name"></a>

											&nbsp;
											<i class="ace-icon fa fa-clock-o bigger-110 orange middle"></i>
											<span class="time grey"  id="show_created_at"></span>
										</div>

										<div class="pull-right action-buttons">
											<span class="blue bigger-125" id="show_subject"></span>
										</div>
									</div>

									<div class="hr hr-double"></div>

									<div class="message-body">
										<p>
				<span id="show_message"></span>				
										</p>

										
									</div>

					<!--				<div class="hr hr-double"></div>

									<div class="message-attachment clearfix">
										

										&nbsp;
										<ul class="attachment-list pull-left list-unstyled">
					    
            		<li>
                      
                                                
                                                		<a  class="attached-file">
													<i class="ace-icon fa fa-file-o bigger-110"></i>
 <span class="attached-name" id="show_file">
                                        </span>
											</a> 	
												<span class="action-buttons">
													<a href="#">
														<i class="ace-icon fa fa-download bigger-125 blue"></i>
													</a>

												
                    	</span>
                                        </li> 

										</ul>

							
									</div> -->
								</div><!-- /.message-content -->

                  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>