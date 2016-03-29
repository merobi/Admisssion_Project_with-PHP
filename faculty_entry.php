<!DOCTYPE html>
<html>
<head>
<title>Faculty entry form</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/style.css" rel="stylesheet">
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
            <li><a href="logout.php">Logout</a></li>
        </ul>

            
    </div>
</nav>
<div class="tab2">
 <h2>Faculty Entry Form</h2>
</div>

<div>
    <form  class="fac" action="faculty_entry.php" method='POST'>
         Unit_ID:<input type="text" name="u_id"             placeholder="Enter unit id" 
                     width="40px">

        Unit Name:<input type="text" name="u_name"             placeholder="Enter unit name" 
                     width="40px">

                <input type="submit" name="submit" value="Enter">
    </form>
</div>
<?php
if (isset($_POST['u_id'])&& isset($_POST['u_name'])) {

include 'db_connect.php';

  $sql="INSERT INTO units(unit_id,u_name)
        VALUES
            ('$_POST[u_id]','$_POST[u_name]')";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo '<script>alert("Entered data successfully");</script>';
}
?>

<script src="scripts/jsval.js"></script>


</body>
</html>

