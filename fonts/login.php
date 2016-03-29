<!DOCTYPE html>
<?php 

//$session_user=$_SESSION['email'];
//include 'db_connect.php';
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("admission", $con);

if (isset($_POST['login'])) {
  # code...
$email=addslashes(strip_tags($_POST['email']));
$pass=addslashes(strip_tags($_POST['pass']));
if (!$email||!$pass) {
  # code...
  echo "Enter your username and password";
}
else{
  $login=mysql_query("SELECT * FROM login WHERE e_mail='$email'");
  if (mysql_num_rows($login)==false) {
    # code...
    echo "no such user";
  }
  else{
    while ($logrow=mysql_fetch_assoc($login)) {
      # code...
      $db_pass=$logrow['password'];
      //$pass=md5($pass);
      if ($pass!=$db_pass) {
        # code...
        echo "Your passwor is incorrect ";
      } else {
        # code...
        // $active=$logrow['active'];
        // $mail=$logrow['mail'];
        // if ($active==0) {
        //  # code...
        //  echo "You haven't activeted your account";
        // } else {
        //  # code...
        //  $_SESSION['user']=$user;
          header("Location:home.php");
        }
        
      }
      
    }
  }
}

 ?>
<html>
<head>
<title> login  form</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/style1.css" rel="stylesheet">

</head>
<body>
<div class="container">
  <div class="row full">
     <div class="col-sm-5">
      <h1 class="title"><a href="#">NSTU Online Admission</a></h1>
    </div>
     <div class="col-sm-7 log">
        <div class="logto well">
           <form class="form-horizontal tpad" role="form">
                <div class="form-group">
                    <label for="email" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Password" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <input type="Password" class="form-control" id="Password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group tpad">
                    <div class="col-lg-offset-2 col-lg-10">
                        <a data-toggle="modal" href="#myModal" class="btn btn-default btn-lg">Log in</a>
                    </div>
                </div>
            </form>

        </div>

     </div>
   </div>
</div>
<script src="//code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

