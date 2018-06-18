<?php require_once("config/Database.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php
if(isset($_SESSION["StudentId"]))
{
 Redirect_to("index.php");	
}
else{
if(isset($_POST["Submit"])){
$Username=$_POST["Username"];
$Password=$_POST["Password"];

if(empty($Username)||empty($Password))
{
	$_SESSION["ErrorMessage"]="All Fields must be filled out";
	Redirect_to("Login.php");	
}
else
 {
	$Found_Account=Login_Attempt($Username,$Password);
	$_SESSION["StudentId"]=$Found_Account["id"];
	$_SESSION["StudentName"]=$Found_Account["name"];
	if($Found_Account)
	   {
     	$_SESSION["SuccessMessage"]="Welcome ";
      	Redirect_to("index.php");	
       }
	else
       {
		$_SESSION["ErrorMessage"]="Invalid Username / Password";
    	Redirect_to("Login.php");
    	}
  }	
 }	
}
?>

<!DOCTYPE>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
	<head>
		<title>Log-in</title>
                <link rel="stylesheet" href="assets/CSS/bootstrap.min.css">
                <script src="assets/js/jquery-3.2.1.min.js"></script>
                <script src="assets/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="assets/CSS/publicstyles.css">
<style>
	.FieldInfo{
    color: rgb(251, 174, 44);
    font-family: Bitter,Georgia,"Times New Roman",Times,serif;
    font-size: 1.2em;
}
body{
	background-color: #ffffff;
}

</style>
                
</head>
<body>

<div class="container-fluid">
<div class="row">
	<div class="col-sm-offset-3 col-sm-6">
		<br><br><br><br>
	<h2>Welcome</h2>
	<?php echo ErrorMessage();
	      echo SuccessMessage();
	?>
<div>
<form action="Login.php" method="post">
	<fieldset>
	<div class="form-group">
	<label for="Username"><span class="FieldInfo">UserName:</span></label>
	<div class="input-group input-group-lg">
	<span class="input-group-addon">
	<span class="glyphicon glyphicon-envelope text-primary"></span>
	</span>
	<input class="form-control" type="text" name="Username" id="Username" placeholder="Username">
	</div>	
	</div>
	
	<div class="form-group">
	<label for="Password"><span class="FieldInfo">Password:</span></label>
	<div class="input-group input-group-lg">
	<span class="input-group-addon">
	<span class="glyphicon glyphicon-lock text-primary"></span>
	</span>
	<input class="form-control" type="Password" name="Password" id="Password" placeholder="Password">
	</div>
	</div>
	<br>
	<input class="btn btn-info btn-block" type="Submit" name="Submit" value="Login">
	</fieldset><br>
</form>
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