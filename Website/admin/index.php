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
<li class="active">
<a href="#">
<span class="glyphicon glyphicon-th"></span>&nbsp;Dashboard</a>
</li>
<li>
<a href="ManageAdmins.php">
<span class="glyphicon glyphicon-user"></span>&nbsp;Manage Admins</a>
</li>
<li><a href="ManageStudents.php">
<span class="glyphicon glyphicon-user"></span>&nbsp;Manage Students</a>
</li>
<li><a href="ManageFaculty.php">
<span class="glyphicon glyphicon-user"></span>&nbsp;Manage Faculty</a>
</li>
<li><a href="#">
<span class="glyphicon glyphicon-question-sign"></span>&nbsp;Enquiries</a>
</li>
</li><li><a href="#">
<span class="glyphicon glyphicon-wrench"></span>&nbsp;Settings</a>
</li>
<li><a href="Logout.php">
<span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a>
</li>		
	</ul>
	</div><!-- Ending of Side area -->
	
	
	<div class="col-sm-10"> <!--Main Area-->
	<h1>DashBoard</h1>
	<?php echo ErrorMessage();
	echo SuccessMessage();
	?>
	<div style="background-color: white;">
		<img src="../assets/images/pf3.jpg" width="900" height="300">
	</div>
	</div> <!-- Ending of Main Area-->
	</div> <!-- Ending of Row-->
	</div> <!-- Ending of Container-->

<div id="Footer">
<hr>
<p><br>&copy;Hackathon 2018<br> All right reserved.</p>
<hr>
</div>

<div style="height: 10px; background: #27AAE1;"></div>
</body>
</html>