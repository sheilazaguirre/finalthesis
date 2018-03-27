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
		<link rel="stylesheet" href="<?php echo site_url('resources/my-external/slick/slick.css');?>">
		<link rel="stylesheet" href="<?php echo site_url('resources/my-external/slick/slick-theme.css');?>">
		<link rel="stylesheet" href="<?php echo site_url('resources/my-external/magnific-popup/magnific-popup.css');?>">
		<link rel="stylesheet" href="<?php echo site_url('resources/my-external/bootstrap-select/bootstrap-select.css');?>">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/my-external/rs-plugin/css/settings.css');?>" media="screen" />
		<!-- Custom CSS -->
		<link rel="stylesheet" href="<?php echo site_url('resources/my-css/style.css');?>">
		<link rel="stylesheet" href="<?php echo site_url('resources/my-css/xstyle.css');?>">
		<!-- Icon Fonts  -->
		<link rel="stylesheet" href="<?php echo site_url('resources/my-font/style.css');?>">
		<!-- Head Libs -->	
		<!-- Modernizr -->
		<script src="<?php echo site_url('resources/my-external/modernizr/modernizr.js');?>"></script>
		<!-- Recaptcha -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
<body>
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb--ys pull-left">
			<li class="home-link"><a href="index.html" class="icon icon-home"></a></li>				
			<li class="active">Schedule Interview</li>
		</ol>
	</div>
</div>
<div id="forgot_password_form">
<form action="<?php echo base_url()?>email/index" method="POST">
<div style="text-align: center;">
	<div>
		<input type="email" class="textbox" value="beper.ong@benilde.edu.ph" name="userEmail" autocomplete="off" placeholder="Email" readonly/>
	</div>
	<br>
	<div>
		<select name="schedule" class="textbox">
            <option value="">Select Applicant Schedule...</option>
            <?php
            $schedule_values = array(
                'Monday 1:00 - 2:00 PM'=>'Monday 1:00 - 2:00 PM',
                'Wednesday 1:00 - 2:00 PM'=>'Wendesday 1:00 - 2:00 PM',
                'Friday 1:00 - 2:00 PM'=>'Friday 1:00 - 2:00 PM',
                 );

           	foreach($schedule_values as $value => $display_text)
            {
                $selected = ($value == $this->input->post('schedule')) ? ' selected="selected"' : "";
				echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
            }
            ?>
        </select>
	</div>
	<br>
	<div>
		<input type="submit" class="button" name="submit" value="Send Interview Schedule" />
	</div>
	<div>
		<div class="g-recaptcha" data-sitekey="6LfRmzcUAAAAAGUARi6CAjGlAVfuO0AzGwIS1z3k" align="center"></div>
	</div>
</div>
</form>
	<?php
		echo validation_errors('<p class="error">');
		if (isset($error))
		{
			echo '<p class="error" style="text-align: center; color: #80091f;">'. $error .'</p>';
		}
	?>
</div>

<script src="<?php echo site_url('resources/my-external/jquery/jquery-2.1.4.min.js')?>"></script> 
		<!-- Bootstrap 3--> 
		<script src="<?php echo site_url('resources/my-external/bootstrap/bootstrap.min.js')?>"></script> 
		<!-- Specific Page External Plugins --> 
		<script src="<?php echo site_url('resources/my-external/slick/slick.min.js')?>"></script>
		<script src="<?php echo site_url('resources/my-external/bootstrap-select/bootstrap-select.min.js')?>"></script>  
		<script src="<?php echo site_url('resources/my-external/countdown/jquery.plugin.min.js')?>"></script> 
		<script src="<?php echo site_url('resources/my-external/countdown/jquery.countdown.min.js')?>"></script>  		
		<script src="<?php echo site_url('resources/my-external/instafeed/instafeed.min.js')?>"></script>  		
		<script src="<?php echo site_url('resources/my-external/magnific-popup/jquery.magnific-popup.min.js')?>"></script>  		
		<script src="<?php echo site_url('resources/my-external/isotope/isotope.pkgd.min.js')?>"></script> 
		<script src="<?php echo site_url('resources/my-external/imagesloaded/imagesloaded.pkgd.min.js')?>"></script>
		<script src="<?php echo site_url('resources/my-external/colorbox/jquery.colorbox-min.js')?>"></script>
		<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
		<script type="text/javascript" src="<?php echo site_url('resources/my-external/rs-plugin/js/jquery.themepunch.tools.min.js')?>"></script> 
		<script type="text/javascript" src="<?php echo site_url('resources/my-external/rs-plugin/js/jquery.themepunch.revolution.min.js')?>"></script> 
		<!-- Custom --> 
		<script src="<?php echo site_url('resources/my-js/custom.js')?>"></script>			
		<script src="<?php echo site_url('resources/my-js/js-index-01.js')?>"></script>		
	</body>
</html>

	
	