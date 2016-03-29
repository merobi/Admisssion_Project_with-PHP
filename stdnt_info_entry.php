<html>
<head>
    <title>Entry form</title>
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
            <li><a href="choice_form.php">Choice Form</a></li>
            <li><a href="students.php">Student List</a></li>
            <li><a href="result.php">Result</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="logout.php">Logout</a></li>

        </ul>
        
            
    </div>
  </nav>
  <h1 class="hd">Selected Student Form</h1>
 <div class="form2">    
  <form class="form2" action="stdnt_info_entry.php" method="POST" onsubmit="return validateStandard(this)">
   
     <label class="label"><strong class="stdnt">Student ID<span class="required">*</span>:</strong></label>
     <input type="text" name="id" placeholder="Enter Admission Roll" required="1" regexp="JSVAL_RX_NUMERIC" ><br><br>
     <label class="label"><strong class="stdnt">Student Name<span class="required">*</span> :</strong></label>
     <input type="text" name="name" placeholder="Enter student name"  required="1" regexp="JSVAL_RX_ALPHA" ><br><br>
     <label><strong>Unit<span class="required">*</span :</strong></strong></strong></strong></label>
     <select class="form-control input-sm sell" name="unit" required="1" exclude=" ">
                                  <option value=" ">--Select unit--</option>
                                  <option value="A">A</option>
                                  <option value="B">B</option>
                                  <option value="C">C</option>
                                  <option value="D">D</option>
                                  

                                </select><br><br>
     <label class="label"><strong class="stdnt">Admission Roll<span class="required">*</span>:</strong></label>
     <input type="text" name="roll" placeholder="Enter Admission Roll" required="1" regexp="JSVAL_RX_NUMERIC" ><br><br>
     <label><strong>Quota<span class="required">*</span :</strong></strong></strong></strong></label>
     <select class="form-control input-sm sell" name="quota" required="1" exclude=" ">
                                  <option value=" ">--Select quota--</option>
                                  <option value="Freedom Fighter">Freedom Fighter</option>
                                  <option value="Tribal">Tribal</option>
                                  <option value="Physical Disorder">Physical Disorder</option>
                                  <option value="Null">Null</option>
                                  

                                </select><br><br>
     <label><strong>Merit Position<span class="required">*</span>:</strong></strong></strong></label>
     <input type="text" name="m_posi" placeholder="Enter merit roll" required="1" regexp="JSVAL_RX_NUMERIC"><br><br>
   
     

     
   <input name="submit" type="submit" value=" Submit ">

  </form>
 </div>

 
<?php
include 'db_connect.php';

if (isset($_POST['id'])&& isset($_POST['roll'])&& isset($_POST['name'])&& isset($_POST['unit'])&& isset($_POST['quota'])&& isset($_POST['m_posi'])){

   $sql="INSERT INTO selected_stdnt(s_id,s_name,u_name,admission_roll,quota,merit_posi)
   VALUES 
    ('$_POST[id]','$_POST[name]','$_POST[unit]','$_POST[roll]','$_POST[quota]','$_POST[m_posi]')";

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
