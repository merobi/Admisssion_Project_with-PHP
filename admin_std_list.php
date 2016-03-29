<!DOCTYPE html>
<html>
<head>
<title>Admin's student list</title>
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

</div>
</div>
<div class="tab2">
    <h2>Registered Students List</h2>

<?php 
include 'db_connect.php';
// $sear=$_POST['search'];
// if (isset($_POST['unit'])) {
//       # code...
//      $src1=$_POST['unit'];
     // $src=$_POST['search'];
     $sql = mysql_query("SELECT admission_roll,s_name,merit_roll,u_name,choice_seq,email,quota 
                         FROM students,units,students_choices
                         WHERE students.s_id=units.s_id=students_choices.s_id
                         ORDER BY merit_posi asc");

  
    echo '<table border="2">
    <tr>
      <th>Unit Name</th>
      <th>Admission Roll</th>
      <th>Student Name</th>
      <th>Quota</th>
      <th>Merit Roll</th>
      <th>Subjects Choose</th>
      <th>Email</th>
    </tr>';
    while ($row = mysql_fetch_assoc($sql)){
    echo'<tr>';
    echo '<br/><td>'.$row['u_name'].'</td>';
    echo '<td>' .$row['admission_roll'].'</td>';
    echo '<br/><td>' .$row['s_name'].'</td>';
    echo '<br/><td>' .$row['quota'].'</td>';
    echo '<br/><td>'.$row['merit_roll'].'</td>';
    echo '<br/><td>'.$row['choice_seq'].'</td>';
    echo '<br/><td>'.$row['email'].'</td>';
echo'</tr>';
    
  }
echo '</table>';
    
    
 
   ?>
</div>



<script src="scripts/jsval.js"></script>


</body>
</html>


