<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="utf-8">
	<title>PI Channel Details</title>
	<meta name="description" content="PI Channel Details">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<link rel="stylesheet" href="custom.css">
			

		


</head>
<body>
<div id ="wrap">
	<div id ="main">

	<div class="bgBlue jumbotron">
		<div class="container text-center">
			<h1>PI Channel Details</h1>
			
		</div><!--End container text-center-->
	</div> <!--End jumbotron-->

	<div class="container">

	<form action="index.php" class="form-horizontal" method="GET">
		

		<div class="col-lg-5 input-group">
  		<span class="bgBlueTextWhite roundBord input-group-addon">Select Legacy System</span>
  
		<select name="system" id="system" class="form-control">
				<option value="...">------------------------------------------</option>
				<?php
				
				/*$pdo = new PDO(
					'mysql:host=198.91.81.8;dbname=kentdel2_pidb',
					'kentdel2_root','p@ssw0rd'
					);
					
					*/
				$accounts=mysql_connect("X","X","X") or die(mysql_error());

					mysql_select_db("X",$accounts);

					$sql="SELECT DISTINCT LegacyName FROM pichannel  ORDER BY LegacyName";

					$result = mysql_query($sql,$accounts);

					while($row = mysql_fetch_array($result)){

					$Legacy = $row['LegacyName'];	

					echo '<option value="'. $Legacy. '">'. $Legacy .'</option>';
					}

				?>
			
		</select>

		<span class="input-group-btn">
        	<button class="btn btn-primary" name="submit" value ="yes" type="submit" >Submit</button>
     	 </span>
     	 

		</div> <!--End of col input-group for Legacy System and Submit button-->

		
	</form>
	</div> <!--end of container -->

	<br>

	<!--Start of Table-->
	<div class="container">
		<div class="panel panel-default">
 	 	<!-- Default panel contents -->
 	 	<div class="bgBlueTextWhiteTLTR">
  		<div class="panel-heading">Communication Channels</div>
  		</div>
  		<!-- Inner Table -->
  		<table class="table">
   	 		<tr>
   	 			<th>Legacy Name</th>
   	 			<th>Direction</th>
   	 			<th class="text-center">Scenario</th>
   	 			<th class="text-center">Description</th>

   	 		</tr>
			
   	 		
   	 			<?php
				error_reporting(0);
   	 			if (isset($_GET['submit'])) {
					$legacyname=$_GET['system'];

					if($legacyname =="..."){
						echo "<tr>";
   	 			        echo '<td colspan="4" class="text-center">'.'Please select Legacy system'.'</td>';
   	 					echo "</tr>";

					}else{
					
					/*
					$pdo = new PDO(
					'mysql:host=X;dbname=X',
					'X','X'
					);
					
					*/
					
					$accounts=mysql_connect("X","X","X") or die(mysql_error());

					mysql_select_db("X",$accounts);

					$sql="SELECT * FROM pichannel WHERE LegacyName='$legacyname'";

					$result = mysql_query($sql,$accounts);

					while($row = mysql_fetch_array($result)){

					echo "<tr>";
					echo "<td>".$row['LegacyName']."</td>";
					echo "<td>".$row['Direction']."</td>";
					echo '<td class="text-center">'.$row['Scenario']."</td>";
					echo '<td class="text-center">'.$row['Description']."</td>";



					echo "</tr>";
					}

				}
				}
				?>

   	 		
  		</table> <!-- end of inner table-->
		</div> <!-- end of panel -->
	</div> <!--end of container-->
	<!--End of Table-->

	</div> <!--end of main-->
</div><!--end of wrap-->

	<!--Footer-->
	<footer class="footer">
		<div class="container">
			<p class="text-center">&copy; Copyright 2015. All information on this page is copyright of all rightful owner</p>


		</div>
	</footer>


	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	
	


</body>
</html>
