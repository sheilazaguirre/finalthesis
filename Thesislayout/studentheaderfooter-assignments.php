<?php
	include 'config.php';
	$query = "SELECT assignID, assignTitle, assignDesc, 
	assignFile
	FROM assignments";
	$results = $con->query($query);
?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Student</title>

	<link rel="stylesheet" href="assets/demo.css">
		<link rel="stylesheet" href="css/header-user-student.css">
		<link rel="stylesheet" href="css/footer-student.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<link rel="stylesheet" href="assets/xstyle.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>


</head>

<body>

<header class="header-user-dropdown">

	<div class="header-limiter">
		<h1><a href="#">GAPC</a></h1>

        <nav>
            <a class="dropbtn" href="studentheaderfooter-Home.php">Home</a>
            <a class="dropbtn" href="studentheaderfooter-lessons.php">Lessons</a>
            <a class="dropbtn" href="studentheaderfooter-assignments.php">Assignments</a>
            <a class="dropbtn" href="studentheaderfooter-grade.php">Grades</a>
            <a class="dropbtn" href="studentheaderfooter-sched.php">Schedule</a>
        </nav>


		<div class="header-user-menu">
			<img src="assets/3.png" alt="User Image"/>

			<ul>
				<li><a href="#">Account</a></li>
				<li><a href="#" class="highlight">Logout</a></li>
			</ul>
		</div>

	</div>

</header>

<!-- The content of your page would go here. -->
<div class="menu">

	<div id="wrap">
			<div class="container">
            <h3>Student - Assignments</h3>
				<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered">
					<thead>
						<tr>
							<th bgcolor="#a9404d">Assignment ID</th>
							<th bgcolor="#a9404d">Assignment Title</th>
							<th bgcolor="#a9404d">Assignment Description</th>
							<th bgcolor="#a9404d">File Uploaded</th>
							
						</tr>
					</thead>
					<tbody>

						<?php
							while ($row = mysqli_fetch_array($results))
							{
								$no = $row['assignID'];
								$title = $row['assignTitle'];
								$desc = $row['assignDesc'];
								$filen = $row['assignFile'];

								echo 
									"<tr>
										<td>" .$no . "</td>
										<td>" .$title . "</td>
										<td>" .$desc . "</td>
										<td><a href='downloadassign.php?file=' . urlencode($filen) . ''>Download</a></td>
									</tr>";
							}
						?>
					</tbody>
					
				</table>
				 <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-danger btn-lg">Back</button>
              </div>
			</div>
		</div>





<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

	$(document).ready(function(){

		var userMenu = $('.header-user-dropdown .header-user-menu');

		userMenu.on('touchend', function(e){

			userMenu.addClass('show');

			e.preventDefault();
			e.stopPropagation();

		});

		// This code makes the user dropdown work on mobile devices

		$(document).on('touchend', function(e){

			// If the page is touched anywhere outside the user menu, close it
			userMenu.removeClass('show');

		});

	});

</script>
<footer class="footer-distributed">

      <div class="footer-left">

        <p class="footer-links">
          <a href="#">FAQ</a>
          ·
          <a href="#">Vision</a>
          ·
          <a href="#">Mission</a>
        </p>

        <p class="footer-company-name">Governor Andres Pascual College &copy; 2017</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span></p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p></p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com"></a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
          Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>

      </div>

    </footer>




</body>

</html>
