<html>
<head>
	<title>Registration form</title>
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
            <li><a href="registration.php">Registration</a></li>
            <li><a href="choice_form.php">Choice Form</a></li>
            <li><a href="students.php">Student List</a></li>
            <li><a href="result.php">Result</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="login.php">Login</a></li>

        </ul>
        
            
    </div>
  </nav>
  <h1 class="reg">Registration Form</h1>
 <div class="form">	
  <form class="form" action="regiform.php" method="POST" onsubmit="return validateStandard(this)" >
   <label class="label"><strong class="stdnt">Student Name<span class="required">*</span> :</strong></label>
     <input type="text" name="name" placeholder="Enter student name"  required="1" regexp="JSVAL_RX_ALPHA" ><br><br>
   <label class="label"><strong class="stdnt">Admission Roll<span class="required">*</span>:</strong></label>
     <input type="text" name="roll" placeholder="Enter Admission Roll" required="1" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE" ><br><br>
   <label><strong>Quota<span class="required">*</span>:</strong></strong></label>
     <select class="form-control input-sm sell" name="quota" required="1" exclude=" ">
                                  <option value=" ">--Select quota-- </option>
                                  <option value="Freedom Fighter">Freedom Fighter</option>
                                  <option value="Tribal">Tribal</option>
                                  <option value="Physical Disorder">Physical Disorder</option>
                                  <option value="Null">Null</option>
                                 </select><br><br>
   <label><strong>Bood group<span class="required">*</span :</strong></strong></strong></strong></label>
     <select class="form-control input-sm sell" name="blood" required="1" exclude=" ">
                                  <option value=" ">--Select group--</option>
                                  <option value="A+">A+</option>
                                  <option value="A-">A-</option>
                                  <option value="B+">B+</option>
                                  <option value="B-">B-</option>
                                  <option value="O+">O+</option>
                                  <option value="O-">O-</option>
                                  <option value="AB+">AB+</option>
                                  <option value="AB-">AB-</option>

                                </select><br><br>
   <label><strong>Age<span class="required">*</span>:</strong></strong></strong></label>
     <input type="text" name="age" placeholder="Enter Age" required="1" regexp="JSVAL_RX_NUMERIC"><br><br>
   <label><strong>Religion<span class="required">*</span>:</strong></strong></label>
     <select class="form-control input-sm sell" name="religion" required="1" exclude=" ">
                                  <option value=" ">--Select religion--</option>
                                  <option value="Islam">Islam</option>
                                  <option value="Hindu">Hindu</option>
                                  <option value="Buddish">Buddish</option>
                                  <option value="Khristain">Khristain</option>
                                  </select><br><br>
     <label><strong>Sex<span class="required">*</span>:</strong></strong></label>
     <select class="form-control input-sm sell" name="sex" required="1" exclude=" ">
                                  <option value=" ">--Select gender-- </option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                  <option value="Other">Other</option>
                                 </select><br><br>
     <label><strong>Email<span class="required">*</span>:</strong></strong></label>
     <input type="text" name="email" placeholder="Enter Email" required="1" regexp="JSVAL_RX_EMAIL"><br><br>
     <label><strong>Father Name<span class="required">*</span>:</strong></strong></label>
     <input type="text" name="fname" placeholder="Enter Father Name" required="1" regexp="JSVAL_RX_ALPHA"><br><br>
     <label><strong>Mother Name<span class="required">*</span>:</strong></strong></label>
     <input type="text" name="mname" placeholder="Enter Mother Name" required="1" regexp="JSVAL_RX_ALPHA"><br><br>
     <label><strong>Father Ocupation<span class="required">*</span>:</strong></strong></label>
     <input type="text" name="focup" placeholder="Enter Father Ocupation" required="1" regexp="JSVAL_RX_ALPHA"><br><br>
     <label><strong>Father Contact<span class="required">*</span>:</strong></strong></label>
     <input type="text" name="fcont" placeholder="Enter Father Contact" required="1" regexp="JSVAL_RX_MOB"><br><br>
     <label><strong>Student Contact<span class="required">*</span>:</strong></strong></label>
     <input type="text" name="scont" placeholder="Enter Student Contact" required="1" regexp="JSVAL_RX_MOB"><br><br>
     <label><strong>Present Address<span class="required">*</span>:</strong></strong></label>
     <input type="text" name="padd" placeholder="Enter Present Address" required="1" regexp="JSVAL_RX_ADDRESS"><br><br>
     <label><strong>Parmanent Address<span class="required">*</span>:</strong></strong></label>
     <input type="text" name="pradd" placeholder="Enter Parmanent Address" required="1" regexp="JSVAL_RX_ADDRESS"><br><br>
   
   <input name="submit" type="submit" value=" Submit ">

  </form>
 </div>
<?php
if (isset($_POST['name'])&& isset($_POST['roll'])&& isset($_POST['quota'])&& isset($_POST['blood'])&& isset($_POST['age'])&& isset($_POST['religion'])
     && isset($_POST['sex'])&& isset($_POST['fname'])&& isset($_POST['mname'])&& isset($_POST['focup'])
     && isset($_POST['fcont'])&& isset($_POST['scont'])&& isset($_POST['padd'])&& isset($_POST['pradd'])&& isset($_POST['email'])) {
  # code...
include 'db_connect.php';

  $sql="INSERT INTO students(s_name,admission_roll,quota,blood_group,age,
    religion,sex,f_name,m_name,f_ocup,f_contact,s_contact,pres_add,parm_add,email)
VALUES
('$_POST[name]','$_POST[roll]','$_POST[quota]','$_POST[blood]','$_POST[age]','$_POST[religion]','$_POST[sex]','$_POST[fname]','$_POST[mname]'
  ,'$_POST[focup]','$_POST[fcont]','$_POST[scont]','$_POST[padd]','$_POST[pradd]','$_POST[email]')";

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

    
