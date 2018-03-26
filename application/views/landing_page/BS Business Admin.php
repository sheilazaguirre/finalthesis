<?php
	$db = mysqli_connect("localhost", "root", "", "thesis");
	$result = mysqli_query($db, "SELECT courseID, subjectCode, subjectName, units FROM subjects 
  WHERE courseID = 5 AND year = '1st' AND semester = '1st'");

	$result2 = mysqli_query($db, "SELECT courseID, subjectCode, subjectName, units FROM subjects 
  WHERE courseID = 5 AND year = '1st' AND semester = '2nd'");
 
  $result3 = mysqli_query($db, "SELECT courseID, subjectCode, subjectName, units FROM subjects 
  WHERE courseID = 5 AND year = '2nd' AND semester = '1st'");

  $result4 = mysqli_query($db, "SELECT courseID, subjectCode, subjectName, units FROM subjects
  WHERE courseID = 5 AND year = '2nd' AND semester = '2nd'");

  $result5 = mysqli_query($db, "SELECT courseID, subjectCode, subjectName, units FROM subjects 
  WHERE courseID = 5 AND year = '3rd' AND semester = '1st'");

  $result6 = mysqli_query($db, "SELECT courseID, subjectCode, subjectName, units FROM subjects 
  WHERE courseID = 5 AND year = '3rd' AND semester = '2nd'");

  $result7 = mysqli_query($db, "SELECT courseID, subjectCode, subjectName, units FROM subjects 
  WHERE courseID = 5 AND year = '4th' AND semester = '1st'");

  $result8 = mysqli_query($db, "SELECT courseID, subjectCode, subjectName, units FROM subjects 
  WHERE courseID = 5 AND year = '4th' AND semester = '2nd'");

?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../resources/my-images/gapc-favicon.ico">

	<title>Flow Chart - BS Business Administration</title>
	<style>
.content {
    max-width: 690px;
    margin: auto;
}
</style>

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:3px 30px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:3px 30px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-qsvf{font-size:18px;text-align:center;vertical-align:top}
.tg .tg-yw4l{text-align:center;vertical-align:top}
</style>

	

</head>

<body>



<!-- The content of your page would go here. -->
<div class="menu">
<div class="content">

	<div id="wrap">
			<div class="container">
            <h1 align="center">GOVERNOR ANDRES PASCUAL COLLEGE</h1>
			
			
			<h3 align="center">Bachelor of Science In Business Administration</h3>
			<h3 align="center">Effective June 2009-2010</h3>
			
			
			
			<h2>First Year</h2>
			<h4>First Semester</h4>
<table width="670" class="tg">
  <tr>
    <th class="tg-qsvf">Subject</th>
    <th class="tg-qsvf">Description</th>
    <th class="tg-qsvf">Units</th>
  </tr>
	<tbody>
  <?php
  	if (mysqli_num_rows($result) > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$no = $row['courseID'];
        $subjectcode = $row['subjectCode'];
        $subjectname = $row['subjectName'];
				$units = $row['units'];               
	
				echo
					"<tr>
						<td class='tg-yw4l'>" .$subjectcode . "</td>
            <td class='tg-yw4l'>" .$subjectname . "</td>
						<td class='tg-yw4l'>" .$units . "</td>            
  					</tr>";
			}
		}
	?>
  </tbody>
  <tr>
    <td class=""></td>
    <td class=""></td>
    <td class="tg-yw4l">26</td>
  </tr>
</table>

<h4>Second Semester</h4>
<table width="670" class="tg">
  <tr>
    <th class="tg-qsvf">Subject</th>
    <th class="tg-qsvf">Description</th>
    <th class="tg-qsvf">Units</th>
  </tr>
	<tbody>
  <?php
  	if (mysqli_num_rows($result2) > 0)
		{
			while($row = $result2->fetch_assoc())
			{
				$no = $row['courseID'];
        $subjectcode = $row['subjectCode'];
        $subjectname = $row['subjectName'];
				$units = $row['units'];               
	
				echo
					"<tr>
						<td class='tg-yw4l'>" .$subjectcode . "</td>
            <td class='tg-yw4l'>" .$subjectname . "</td>
						<td class='tg-yw4l'>" .$units . "</td>            
  					</tr>";
			}
		}
	?>
  </tbody>
  <tr>
    <td class=""></td>
    <td class=""></td>
    <td class="tg-yw4l">26</td>
  </tr>
</table>
&nbsp;
				
				
				<h2>Second Year</h2>
			<h4>First Semester</h4>
<table width="670" class="tg">
  <tr>
    <th class="tg-qsvf">Subject</th>
    <th class="tg-qsvf">Description</th>
    <th class="tg-qsvf">Units</th>
  </tr>
	<tbody>
  <?php
  	if (mysqli_num_rows($result3) > 0)
		{
			while($row = $result3->fetch_assoc())
			{
				$no = $row['courseID'];
        $subjectcode = $row['subjectCode'];
        $subjectname = $row['subjectName'];
				$units = $row['units'];               
	
				echo
					"<tr>
						<td class='tg-yw4l'>" .$subjectcode . "</td>
            <td class='tg-yw4l'>" .$subjectname . "</td>
						<td class='tg-yw4l'>" .$units . "</td>            
  					</tr>";
			}
		}
	?>
  </tbody>
  <tr>
    <td class=""></td>
    <td class=""></td>
    <td class="tg-yw4l">23</td>
  </tr>
</table>

<h4>Second Semester</h4>
<table width="670" class="tg">
  <tr>
    <th class="tg-qsvf">Subject</th>
    <th class="tg-qsvf">Description</th>
    <th class="tg-qsvf">Units</th>
  </tr>
	<tbody>
  <?php
  	if (mysqli_num_rows($result4) > 0)
		{
			while($row = $result4->fetch_assoc())
			{
				$no = $row['courseID'];
        $subjectcode = $row['subjectCode'];
        $subjectname = $row['subjectName'];
				$units = $row['units'];               
	
				echo
					"<tr>
						<td class='tg-yw4l'>" .$subjectcode . "</td>
            <td class='tg-yw4l'>" .$subjectname . "</td>
						<td class='tg-yw4l'>" .$units . "</td>            
  					</tr>";
			}
		}
	?>
  </tbody>
  <tr>
    <td class=""></td>
    <td class=""></td>
    <td class="tg-yw4l">23</td>
  </tr>
</table>
&nbsp;

<h2>Third Year</h2>
			<h4>First Semester</h4>
<table width="670" class="tg">
  <tr>
    <th class="tg-qsvf">Subject</th>
    <th class="tg-qsvf">Description</th>
    <th class="tg-qsvf">Units</th>
  </tr>
	<tbody>
  <?php
  	if (mysqli_num_rows($result5) > 0)
		{
			while($row = $result5->fetch_assoc())
			{
				$no = $row['courseID'];
        $subjectcode = $row['subjectCode'];
        $subjectname = $row['subjectName'];
				$units = $row['units'];               
	
				echo
					"<tr>
						<td class='tg-yw4l'>" .$subjectcode . "</td>
            <td class='tg-yw4l'>" .$subjectname . "</td>
						<td class='tg-yw4l'>" .$units . "</td>            
  					</tr>";
			}
		}
	?>
  </tbody>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l">21</td>
  </tr>
</table>

<h4>Second Semester</h4>
<table width="670" class="tg">
  <tr>
    <th class="tg-qsvf">Subject</th>
    <th class="tg-qsvf">Description</th>
    <th class="tg-qsvf">Units</th>
  </tr>
	<tbody>
  <?php
  	if (mysqli_num_rows($result6) > 0)
		{
			while($row = $result6->fetch_assoc())
			{
				$no = $row['courseID'];
        $subjectcode = $row['subjectCode'];
        $subjectname = $row['subjectName'];
				$units = $row['units'];               
	
				echo
					"<tr>
						<td class='tg-yw4l'>" .$subjectcode . "</td>
            <td class='tg-yw4l'>" .$subjectname . "</td>
						<td class='tg-yw4l'>" .$units . "</td>            
  					</tr>";
			}
		}
	?>
  </tbody>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l">21</td>
  </tr>
</table>

&nbsp;

<h2>Fourth Year</h2>
			<h4>First Semester</h4>
<table width="670" class="tg">
  <tr>
    <th class="tg-qsvf">Subject</th>
    <th class="tg-qsvf">Description</th>
    <th class="tg-qsvf">Units</th>
  </tr>
	<tbody>
  <?php
  	if (mysqli_num_rows($result7) > 0)
		{
			while($row = $result7->fetch_assoc())
			{
				$no = $row['courseID'];
        $subjectcode = $row['subjectCode'];
        $subjectname = $row['subjectName'];
				$units = $row['units'];               
	
				echo
					"<tr>
						<td class='tg-yw4l'>" .$subjectcode . "</td>
            <td class='tg-yw4l'>" .$subjectname . "</td>
						<td class='tg-yw4l'>" .$units . "</td>            
  					</tr>";
			}
		}
	?>
  </tbody>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l">21</td>
  </tr>
</table>

<h4>Second Semester</h4>
<table width="670" class="tg">
  <tr>
    <th class="tg-qsvf">Subject</th>
    <th class="tg-qsvf">Description</th>
    <th class="tg-qsvf">Units</th>
  </tr>
	<tbody>
  <?php
  	if (mysqli_num_rows($result8) > 0)
		{
			while($row = $result8->fetch_assoc())
			{
				$no = $row['courseID'];
        $subjectcode = $row['subjectCode'];
        $subjectname = $row['subjectName'];
				$units = $row['units'];               
	
				echo
					"<tr>
						<td class='tg-yw4l'>" .$subjectcode . "</td>
            <td class='tg-yw4l'>" .$subjectname . "</td>
						<td class='tg-yw4l'>" .$units . "</td>            
  					</tr>";
			}
		}
	?>
  </tbody>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l">18</td>
  </tr>
  </table>
  
  

		</div>
		</div>

<!--                                         -->


</body>

</html>
