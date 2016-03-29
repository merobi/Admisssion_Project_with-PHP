<html>
<head>
	<title>Students choice form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/style1.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
            <li class="active"><a href="choice_form.php">Choice Form</a></li>
            <li><a href="students.php">Student List</a></li>
            <li><a href="result.php">Result</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="login.php">Login</a></li>

        </ul>
        
            
    </div>
  </nav>
  <h1 class="hd">Students Choice Form</h1>
 <div class="form2">	
  <form class="form2" action="choice_form.php" method="POST" onsubmit="return validateStandard(this)">
   
   <label class="label"><strong class="stdnt">Admission Roll<span class="required">*</span>:</strong></label>
     <input type="text" name="roll" placeholder="Enter Admission Roll" required="1" regexp="JSVAL_RX_NUMERIC" ><br><br>
   <label class="label"><strong class="stdnt">Student Name<span class="required">*</span> :</strong></label>
     <input type="text" name="name" placeholder="Enter student name"  required="1" regexp="JSVAL_RX_ALPHA" ><br><br>
   <label><strong>Merit Roll<span class="required">*</span>:</strong></strong></strong></label>
     <input type="text" name="m_roll" placeholder="Enter merit roll" required="1" regexp="JSVAL_RX_NUMERIC"><br><br>
   <label><strong>Unit<span class="required">*</span :</strong></strong></strong></strong></label>
     <select class="form-control input-sm sell" name="unit" required="1" exclude=" ">
                                  <option value=" ">--Select unit--</option>
                                  <option value="1">A</option>
                                  <option value="2">B</option>
                                  <option value="3">C</option>
                                  <option value="4">D</option>
                                  

                                </select><br><br>
   
   <label><strong>Sub Choices<span class="required">*</span>:</strong></strong></label>
     <select class="form-control input-sm sell" name="choice1" required="1" exclude=" ">
                                  <option value=" ">--Select First choice--</option>
                                  <option value="1">Engineering</option>
                                  <option value="2">Applied Science</option>
                                  <option value="3">BBA</option>
                                  <option value="4">Others</option>
                                  

                                </select><br><br>
     <select class="form-control input-sm sell" name="choice2" required="1" exclude=" ">
                                  <option value=" ">--Select Second choice--</option>
                                  <option value="1">Engineering</option>
                                  <option value="2">Applied Science</option>
                                  <option value="3">BBA</option>
                                  <option value="4">Others</option>
                                  

                                </select><br><br>
     <select class="form-control input-sm sell" name="choice3" required="1" exclude=" ">
                                  <option value=" ">--Select Third choice--</option>
                                  <option value="1">Engineering</option>
                                  <option value="2">Applied Science</option>
                                  <option value="3">BBA</option>
                                  <option value="4">Others</option>
                                  

                                </select><br><br>
     <select class="form-control input-sm sell" name="choice4" required="1" exclude=" ">
                                  <option value=" ">--Select Forth choice--</option>
                                  <option value="1">Engineering</option>
                                  <option value="2">Applied Science</option>
                                  <option value="3">BBA</option>
                                  <option value="4">Others</option>
                                  

                                </select><br><br>
     

     
   
   <input name="submit" type="submit" value=" Submit ">

  </form>
 </div>

 
<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("admission", $con);

if (isset($_POST['name'])&& isset($_POST['roll'])&& isset($_POST['m_roll'])&& isset($_POST['unit'])&& isset($_POST['choice1'])
     && isset($_POST['choice2'])&& isset($_POST['choice3'])&& isset($_POST['choice4'])) {
  # code...
// include 'db_connect.php';

  $sql="INSERT INTO students_choices(admission_roll,s_name,merit_roll,u_name)
  VALUES 
    ('$_POST[roll]','$_POST[name]','$_POST[m_roll]','$_POST[unit]');";
  $sql.="INSERT INTO students_choices(choice_seq)
  VALUES
    ('$_POST[choice1]','$_POST[choice2]','$_POST[choice3]','$_POST[choice4]')";

if (!mysql_multi_query($con, $sql))
  {
  die('Error: ' . mysql_error($con));
  }
echo "successfully added";
}


?>
<script src="scripts/jsval.js"></script>
<script src="scr/bootstrap.min.js"></script>
</body>
</html>
