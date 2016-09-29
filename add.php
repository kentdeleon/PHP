<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add Entry</title>
	<meta name="description" content="PI Channel Details">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<style>
			.wrap{margin-top:100px;}
			.bgBlue{background-color: #02598c;
								color:white;}
		</style>
</head>
<body>
	
<div class="wrap container bgBlue">
	<div class=" text-center ">
		<h1>Add new entry</h1>
	</div>
</div>


	<div class=" bgBlue container">

	<form action="add.php" class="form-horizontal" method="POST">

	<div class="form-group">
		<label for="legacyname" class="col-lg-2 col-lg-offset-2 control-label" >Legacy Name</label>
		<div class="col-lg-5">
		<input type="text" class="form-control" name="legacyname" id="legacyname" placeholder="Enter Legacy Name i.e. SERLOVECA" required>
		</div>
	</div> <!--End form group-->

	<div class="form-group">
		<label for="direction" class="col-lg-2 col-lg-offset-2 control-label" >Direction</label>
		<div class="col-lg-5">
		<select name="direction" id="direction" class="form-control">
				<option value="Inbound">Inbound</option>
				<option value="Outbound">Outbound</option>
		</select>
		</div>
	</div> <!--End form group-->

						
	<div class="form-group">
		<label for="scenario" class="col-lg-2 col-lg-offset-2 control-label" >Scenario</label>
		<div class="col-lg-5">
		<input type="text" class="form-control" name="scenario" id="scenario" placeholder="Enter Scenario format <int>_<workstream>_<desc>" required>
		</div>
	</div> <!--End form group-->

	<div class="form-group">
		<label for="scenario" class="col-lg-2 col-lg-offset-2 control-label" >Description</label>
		<div class="col-lg-5">
		<input type="text" class="form-control" name="description" id="description" placeholder="Enter Description i.e. user for ordering" required>
		</div>
	</div> <!--End form group-->

	<div class="form-group">
		<div class="col-lg-5 col-lg-offset-4">
		<button type="submit" name="submit" class="btn btn-default">Add</button>
		</div>

		<div class="col-lg-5 col-lg-offset-9">
		<a href="index.php" class="btn btn-md btn-default">Home</a>

		</div>
	</div><!--End form group-->

	<!--PHP CODE-->

	<?php
	error_reporting(0);
	if (isset($_POST['submit'])) {
		
		$legacyname=$_POST['legacyname'];
		$direction=$_POST['direction'];
		$scenario=$_POST['scenario'];
		$descritpion = $_POST['description'];

		$accounts=mysql_connect("198.91.81.8","kentdel2_root","p@ssw0rd") or die(mysql_error());

 		 mysql_select_db("kentdel2_pidb",$accounts);

  		$sql="INSERT INTO pichannel(LegacyName, Direction, Scenario, Description) VALUES
 		 (\"$legacyname\",\"$direction\",\"$scenario\",\"$descritpion\");";

  		mysql_query($sql,$accounts);

  		echo "<br>";
  		echo "<p class=\"text-center\">"."Entry successfully added!"."</p>";

  	}
	?>
	<!--end of PHP CODE-->


	</form> <!--end of form-->

	</div> <!--end of container -->

	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>