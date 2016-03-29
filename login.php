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
if (!$email && !$pass) {
	# code...
	echo "<script>alert('Enter correct email and password');</script>";
}
elseif (!$email) {
	echo "<script>alert('Enter correct email ');</script>";
}
elseif (!$pass) {
	echo "<script>alert('Enter correct  password');</script>";
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
				// 	# code...
				// 	echo "You haven't activeted your account";
				// } else {
				// 	# code...
				// 	$_SESSION['user']=$user;
					header("Location:admin_list.php");
				}
				
			}
			
		}
	}
}

 ?>
<html>
<head>
	<title>Login form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/style1.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">NSTU</a>
    </div> 
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="home.php">Home</a></li>
            <li><a href="std_regi.php">Registration</a></li>
            <li><a href="choice_form.php">Choice Form</a></li>
            <li><a href="students.php">Student List</a></li>
            <li><a href="result.php">Result</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li class="active navbar-right" ><a href="login.php">Login</a></li>
        </ul>

            
    </div>
</nav>

	<div id='design'>
					<div id="login">
					<h2><b>Login Form</b></h2>
					<form action="login.php" method="post">
					<label>E-Mail :</label>
					<input id="name1" name="email" placeholder="Enter email" type="email">
					<label>PassWord :</label>
					<input id="password1" name="pass" placeholder="Enter password" type="password">
					<br/><br/><input name="login" type="submit" value=" Login ">
					</form>
					</div>
	</div>


<script src="scripts/jquery.js"></script>
<script src="scripts/bootstrap.js"></script>
</body>
</html>
