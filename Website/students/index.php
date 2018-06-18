<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php require_once("config/Database.php"); ?>
<?php Confirm_Login() ?>

<!DOCTYPE html>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
<head>
<title>Admin Dashboard</title>
                <link rel="stylesheet" href="assets/CSS/bootstrap.min.css">
                <script src="assets/js/jquery-3.2.1.min.js"></script>
                <script src="assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/CSS/adminstyles.css">
<style>
    .btn
    {
    margin:2px;
    }
</style>
</head>
<body>
<div style="height: 10px; background: #27aae1;"></div>


<div class="Line" style="height: 10px; background: #27aae1;"></div>
<div class="container-fluid">
<div class="row">	
	<div class="col-sm-2">
	<br><br>
	<ul id="Side_Menu" class="nav nav-pills nav-stacked">
<li class="active" >
<a href="#">
<span class="glyphicon glyphicon-th"></span>&nbsp;Dashboard</a>
</li>
<li><a href="Logout.php">
<span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a>
</li>		
	</ul>
	</div>
	<!-- Ending of Side area -->
	
	<div class="col-sm-10"> <!--Main Area-->
	<h1 style="background-color:#aaffee;" >Student Dashboard</h1>
	<?php echo ErrorMessage();
	echo SuccessMessage();
	?>
	<div>
			<table class="table table-striped table-hover">
	<tr>
	<th>Sr No.</th>
	<th>USN</th>
	<th>No of working days</th>
	<th>No of days attended</th>
	<th>Percentage</th>
	</tr>
<?php
	$SrNo=1;
	$db = new Database;
	$db->query('SELECT * FROM students WHERE id=:id');
	$db->bind(':id', $_SESSION["StudentId"]);
	$rows = $db->resultset();
?>
<?php foreach($rows as $row) : ?>

<tr>
	<td align="center"><?php echo $SrNo;$SrNo++; ?></td>
	<td align="center"><?php echo $row['email']; ?></td>
	<td align="center"><?php echo $row['attendance']; ?></td>
	<td align="center"><?php echo $row['totaldays']; ?></td>
	<td align="center"><?php echo ($row['attendance']/($row['totaldays'])*100); ?></td>
	
</tr>
		<?php endforeach; ?>
	</table><br><br>

	</div>
	</div>
	<div class="content"></div>
<div id="Footer" class="foo">
<hr>
<p><br>&copy;Hackathon 2018<br> All right reserved.</p>
<hr>
</div>

<div style="height: 10px; background: #27AAE1;"></div>
</body>
</html>