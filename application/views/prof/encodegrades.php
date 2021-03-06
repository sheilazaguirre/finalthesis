<?php
	$db = mysqli_connect("localhost", "root", "", "thesis");
	$result = mysqli_query($db, "SELECT c.classID, s.subjectCode, c.facultyID FROM classes c
	INNER JOIN subjects s ON c.subjectID = s.subjectID
	WHERE c.facultyID=$_SESSION[userIDNo] AND c.semester='1st' AND c.status='Active' AND c.academicYear=YEAR(NOW())");

	$result2 = mysqli_query($db, "SELECT c.classID, s.subjectCode, c.facultyID FROM classes c
	INNER JOIN subjects s ON c.subjectID = s.subjectID
	WHERE c.facultyID=$_SESSION[userIDNo] AND c.semester='2nd' AND c.status='Active' AND c.academicYear=YEAR(NOW())");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<title>Governor Andres Pascual College - Information Systems</title>
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="YOURStore - Responsive HTML5 Template">
		<meta name="author" content="etheme.com">
		<link rel="shortcut icon" href="<?php echo site_url('resources/my-images/gapc-favicon.ico')?>">
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- External Plugins CSS -->
		<link rel="stylesheet" href="<?php echo site_url('resources/my-external/slick/slick.css')?>">
		<link rel="stylesheet" href="<?php echo site_url('resources/my-external/slick/slick-theme.css')?>">
		<link rel="stylesheet" href="<?php echo site_url('resources/my-external/magnific-popup/magnific-popup.css')?>">
		<link rel="stylesheet" href="<?php echo site_url('resources/my-external/bootstrap-select/bootstrap-select.css')?>">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/my-external/rs-plugin/css/settings.css')?>" media="screen" />
		<!-- Custom CSS -->
		<link rel="stylesheet" href="<?php echo site_url('resources/my-css/style.css')?>">
		<!-- Icon Fonts  -->
		<link rel="stylesheet" href="<?php echo site_url('resources/my-font/style.css')?>">
		<!-- Head Libs -->
		<!-- Modernizr -->
		<script src="<?php echo site_url('resources/my-external/modernizr/modernizr.js')?>"></script>
	</head>
	<body class="index">		
		<div id="loader-wrapper">
			<div id="loader">
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
			</div>
		</div>
		<!-- Back to top -->
	    <div class="back-to-top"><span class="icon-keyboard_arrow_up"></span></div>
	    <!-- /Back to top -->
	    <!-- mobile menu -->
		<div class="hidden">
			<nav id="off-canvas-menu">				
				<ul class="expander-list">				
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="<?php echo base_url()?>prof/schedule"><span class="act-underline">SCHEDULE</span></a>
						</span>
					</li>					
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="<?php echo base_url()?>prof/encodegrades"><span class="act-underline">ENCODE GRADES</span></a>
						</span>						
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="<?php echo base_url()?>prof/lessons"><span class="act-underline"><span class="act-underline">MANAGE LESSONS</span></span></a>
						</span>
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="<?php echo base_url()?>prof/assignments"><span class="act-underline">MANAGE ASSSIGNMENTS</span></a>
						</span>
					</li>						
				</ul>
			</nav>
		</div>
	    <!-- /mobile menu -->
		<!-- HEADER section -->
		<div class="header-wrapper">
			<header id="header" class="header-layout-04">
				<!-- top-header -->
				<div class="container">
					<div class="row">
						<!-- col-left -->
						<div class="col-sm-3 text-left">
							<!-- slogan start -->
							<div class="slogan"> Welcome, "<?php echo $fn; ?> <?php echo $ln; ?>"! </div>
							<!-- slogan end --> 	
						</div>
						<!-- /col-left -->
						<!-- col-right -->
						<!-- /col-right -->
					</div>
				</div>
				<!-- /top-header -->
				<div class="container">
					<div class="row text-center">
						<!--  -->
						<div class="text-right extra-right">			
							<!-- account menu start -->
							<div class="account link-inline">
								<div class="dropdown text-right">
									<a class="dropdown-toggle" data-toggle="dropdown">
									<span class="icon icon-person "></span>
									</a>
									<ul class="dropdown-menu dropdown-menu--xs-full">
										<li><a href="<?php echo site_url('prof/account/') ?>"><span class="icon icon-person"></span>Account</a></li>
										<li><a href="<?php echo site_url('landing_page/logout/') ?>"><span class="icon icon-lock"></span>Log-out</a></li>
										<li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>close</a></li>
									</ul>
								</div>
							</div>
							<!-- account menu end -->		
						</div>
						<!-- / -->
						<!-- logo start --> 
						<a href="index"><img class="logo replace-2x img-responsive" src="<?php echo site_url('resources/my-images/header-logo.png')?>" alt=""/></a> 
						<!-- logo end --> 
					</div>
				</div>
				<!-- nav -->
				<div class="container">
					<div class="row text-center">					
						<!-- navigation start -->
						<nav class="navbar">
							<div class="responsive-menu mainMenu">									
								<!-- Mobile menu Button-->
								<div class="col-xs-2 visible-mobile-menu-on">
									<div class="expand-nav compact-hidden">
										<a href="#off-canvas-menu" class="off-canvas-menu-toggle">
											<div class="navbar-toggle"> 
												<span class="icon-bar"></span> 
												<span class="icon-bar"></span> 
												<span class="icon-bar"></span> 
												<span class="menu-text">MENU</span> 
											</div>
										</a>
									</div>
								</div>
								<!-- //end Mobile menu Button -->
								<ul class="nav navbar-nav">
									<li class="dl-close"><a href="#"><span class="icon icon-close"></span>close</a></li>										
									<li class="dropdown dropdown-mega-menu">											
										<a href="<?php echo base_url()?>prof/schedule" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">SCHEDULE</span></a>
									</li>									
									<li class="dropdown dropdown-mega-menu">
										<span class="dropdown-toggle extra-arrow"></span>
										<a href="<?php echo base_url()?>prof/encodegrades" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">ENCODE GRADES</span></a>
									</li>
									<li class="dropdown dropdown-mega-menu">
										<span class="dropdown-toggle extra-arrow"></span>
										<a href="<?php echo base_url()?>prof/lessons" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">MANAGE LESSONS</span></a>
									</li>
									<li class="dropdown dropdown-mega-menu">
										<span class="dropdown-toggle extra-arrow"></span>
										<a href="<?php echo base_url()?>prof/assignments" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">MANAGE ASSIGNMENTS</span></a>
									</li>
									<li class="dropdown dropdown-mega-menu">
                                        <span class="dropdown-toggle extra-arrow"></span>
                                        <a href="<?php echo base_url()?>prof/downloads" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">MONITOR DOWNLOAD</span></a>
                                    </li>
								</ul>
							</div>
						</nav>
						<!-- navigation finish -->
					</div>
				</div>
				<!-- /nav -->				
			</header>

		</div>

		<!-- The content of your page would go here. -->
		<br/>
		<div id="studentContent">
            <div class="breadcrumbs">
            <div class="container">
                    <ol class="breadcrumb breadcrumb--ys pull-left">
                        <li class="home-link"><a href="index" class="icon icon-home"></a></li>
                        <li>S.Y <?php echo date("Y"); ?></</li>
                        <li class="active">Encode Grades</li>
                    </ol>
                </div>
            </div>
            <section class="content offset-top-0">
                <div class="container">
                            <div class="content">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-tabs--ys1" role="tablist">
                                    <li class="active"><a href="#Tab1"  role="tab" data-toggle="tab" class="text-uppercase">1st Semester</a></li>
                                    <li><a href="#Tab2" role="tab" data-toggle="tab" class="text-uppercase">2nd Semester</a></li>
                                </ul>
                                <br>
                                <div class="col-md-10">
                                </div>
                                <div class="col-md-2">
                            </div>
                                <!-- Tab panes -->
                                <div class="tab-content tab-content--ys nav-stacked">
                                    <div role="tabpanel" class="tab-pane active" id="Tab1">
                                        <div class="divider divider--xs"></div>
                                        <table class="table table-params" >
                                            <thead>
                                                <tr bgcolor="#80091F">
                                                    <th class="text-center" style="color: #fff">Class ID</th>
                                                    <th class="text-center" style="color: #fff">Subject</th>
                                                    <th class="text-center" style="color: #fff">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
												if (mysqli_num_rows($result) > 0)
													{
														while($row = $result->fetch_assoc())
														{
															$no = $row['classID'];
															$subject = $row['subjectCode'];
						
															echo
															"<tr>
																<td>" .$no . "</td>
																<td>" .$subject . "</td>
																<td class='text-center'>
																	<a href='".base_url()."prof/grades/".$no."' class='btn btn-info btn-xs'><span class='fa fa-pencil'></span> Prelims</a>
																	<a href='".base_url()."prof/fgrades/".$no."' class='btn btn-info btn-xs'><span class='fa fa-pencil'></span> Finals</a>
																</td>
															</tr>";
														}
													}
											?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Tab2">
                                        <div class="divider divider--xs"></div>
                                        <table class="table table-params">
                                            <thead>
                                                <tr bgcolor="#80091F">
                                                    <th class="text-center" style="color: #fff">Class ID</th>
                                                    <th class="text-center" style="color: #fff">Subject</th>
                                                    <th class="text-center" style="color: #fff">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
												if (mysqli_num_rows($result2) > 0)
													{
														while($row = $result2->fetch_assoc())
														{
															$no = $row['classID'];
															$subject = $row['subjectCode'];
						
															echo
															"<tr>
																<td>" .$no . "</td>
																<td>" .$subject . "</td>
																<td class='text-center'>
																	<a href='".base_url()."prof/grades/".$no."' class='btn btn-info btn-xs'><span class='fa fa-pencil'></span> Prelims</a>
																	<a href='".base_url()."prof/fgrades/".$no."' class='btn btn-info btn-xs'><span class='fa fa-pencil'></span> Finals</a>
																</td>
															</tr>";
														}
													}
											?>
                                            </tbody>
                                        </table>
                                    </div>          
            </section>          
            <!-- related products -->
            <!-- /related products -->
        </div>



			<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

			<!-- // <script> -->

			<!-- // 	$(document).ready(function(){

		// 		var userMenu = $('.header-user-dropdown .header-user-menu');

		// 		userMenu.on('touchend', function(e){

		// 			userMenu.addClass('show');

		// 			e.preventDefault();
		// 			e.stopPropagation();

		// 		});

		// 		// This code makes the user dropdown work on mobile devices

		// 		$(document).on('touchend', function(e){

		// 			// If the page is touched anywhere outside the user menu, close it
		// 			userMenu.removeClass('show');

		// 		});

		// 	}); -->

			<!-- // </script> -->
			<script src="<?php echo site_url('resources/my-external/jquery/jquery-2.1.4.min.js')?>"></script> 
		<!-- Bootstrap 3--> 
		<script src="<?php echo site_url('resources/my-external/bootstrap/bootstrap.min.js')?>"></script> 
		<!-- Specific Page External Plugins --> 
		<script src="<?php echo site_url('resources/my-external/slick/slick.min.js')?>"></script>
		<script src="<?php echo site_url('resources/my-external/bootstrap-select/bootstrap-select.min.js')?>"></script>  
		<script src="<?php echo site_url('resources/my-external/countdown/jquery.plugin.min.js')?>"></script> 
		<script src="<?php echo site_url('resources/my-external/countdown/jquery.countdown.min.js')?>"></script>		
	
		<script src="<?php echo site_url('resources/my-external/magnific-popup/jquery.magnific-popup.min.js')?>"></script>  		
		<script src="<?php echo site_url('resources/my-external/isotope/isotope.pkgd.min.js')?>"></script> 
		<script src="<?php echo site_url('resources/my-external/imagesloaded/imagesloaded.pkgd.min.js')?>"></script>
		<script src="<?php echo site_url('resources/my-external/colorbox/jquery.colorbox-min.js')?>"></script>
		<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
		<script type="text/javascript" src="<?php echo site_url('resources/my-external/rs-plugin/js/jquery.themepunch.tools.min.js')?>"></script> 
		<script type="text/javascript" src="<?php echo site_url('resources/my-external/rs-plugin/js/jquery.themepunch.revolution.min.js')?>"></script>

		<!-- Custom --> 
		<script src="<?php echo site_url('resources/my-js/custom.js')?>"></script>
		<script src="<?php echo site_url('resources/my-js/js-index-04.js')?>"></script>					
	</body>
</html>