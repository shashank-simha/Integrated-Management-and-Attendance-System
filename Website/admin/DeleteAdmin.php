<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php require_once("config/Database.php"); ?>
<?php Confirm_Login() ?>
<?php
$Id = $_GET['id'];
  $db = new Database;
	$db->query('SELECT * FROM admins WHERE id=:id');
	$db->bind(':id', $Id);
	$rows = $db->resultset();
if(isset($_POST["confirm"]))
{
 
	$db->query('DELETE FROM admins WHERE id=:id');
	$db->bind(':id', $Id);
	$db->execute();
  Redirect_to("ManageAdmins.php");
}
else if((isset($_POST["cancel"]))||(isset($_POST["close"])))
{
Redirect_to("ManageAdmins.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Delete Admin</title>
      <link rel="stylesheet" href="assets/CSS/bootstrap.min.css">
      <script src="assets/js/jquery-3.2.1.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
</head>
<body class="bg-danger" >   
<form method="POST" action="" >
 <div class="modal-dialog"  role="document">     
 <div class="modal-content">      
  <div class="modal-header">         
  <h2 class="pull-left danger" style="color:red;"><span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Delete</h2>       
  <button type="submit" name="close" class="close"  data-dismiss="modal"  aria-label="Close">           
  <span aria-hidden="true">&times;</span>        
   </button>      
    </div>       
    <div class="modal-body">        
     <h3>
     <p><b><?php echo $rows[0]['email']; ?></b> admin will be deleted forever. Do you want to proceed?</p>
     </h3>     
     </div>       
     <div class="modal-footer">         
     <button type="submit"  class="btn btn-secondary" name="cancel"  data-dismiss="modal">Cancel</ button>         
     <button type="submit"  class="btn btn-danger" name="confirm" >Delete</button>     
       </div>   
         </div>      
         </div> 
       </form>
         </body>
</html>