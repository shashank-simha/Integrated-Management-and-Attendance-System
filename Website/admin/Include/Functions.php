
<?php require_once("config/Database.php"); ?>
<?php require_once("Sessions.php"); ?>

<?php
function Redirect_to($New_Location)
{
    header("Location:".$New_Location);
  exit;
}

function Login_Attempt($Username, $Password)
{ 
    $db = new Database;
    $db->query("SELECT * FROM admins WHERE email=:email");
    $db->bind(':email', $Username);
    $user = $db->resultset();
    if($user)
     {
       if(md5($Password) == $user[0]['password'])
         {
        return $user[0];
         }
      }
    else
    {
  return null;
    }
}
function Login()
{
    if(isset($_SESSION["AdminId"]))
    {
  return true;
    }
    return false;
}
 function Confirm_Login()
 {
    if(!Login())
    {
  $_SESSION["ErrorMessage"]="Login Required ! ";
  Redirect_to("Login.php");
    }
 }
?>