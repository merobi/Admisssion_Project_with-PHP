<!DOCTYPE html>
<html>
<head>
<title>Result</title>
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
            <li class="active"><a href="result.php">Result</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
        
            
    </div>
</nav>
<div class="tab2">

  <h2> Admission Result of 2015-2016 </h2>
   <form action="result.php" method='POST'  >
              <div>
               Unit: <select name="unit" required="1" exclude=" ">
                                  <option value=" ">--Select unit--</option>
                                  <option value="A">A</option>
                                  <option value="B">B</option>
                                  <option value="C">C</option>
                                  <option value="D">D</option>
                                  </select><br>
               Roll: <input type="text" name="search"  placeholder="Enter Admission roll"/>
              </div>
              <button type="submit" >Submit</button>
        </form>
<?php 
include 'db_connect.php';
if (isset($_POST['unit']) && isset($_POST['search'])) {
      
     $src1=$_POST['unit'];
     $src=$_POST['search'];
     $sql = mysql_query("SELECT * 
                         FROM selected_stdnt
                         WHERE admission_roll='$src'
                          AND u_name='$src1'");

  
    echo '<table border="2">
    <tr>
      <th>Student ID</th>
      <th>Student Name</th>
      <th>Unit Name</th>
      <th>Admission Roll</th>
      <th>Quota</th>
      <th>Merit Position</th>
    </tr>';
    while ($row = mysql_fetch_assoc($sql)){
    echo'<tr>';
    echo '<br/><td>'.$row['s_id'].'</td>';
    echo '<br/><td>'.$row['s_name'].'</td>';
    echo '<br/><td>'.$row['u_name'].'</td>';
    echo '<br/><td>'.$row['admission_roll'].'</td>';
    echo '<br/><td>'.$row['quota'].'</td>';
    echo '<br/><td>'.$row['merit_posi'].'</td>';
    echo'</tr>';
    
  }
echo '</table>';
    }
    
 
   ?>
</div>



<script src="scripts/jsval.js"></script>


</body>
</html>


