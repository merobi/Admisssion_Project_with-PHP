<html>
<head>
	<title>Search Database</title>
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
            <li class="active"><a href="students.php">Student List</a></li>
            <li><a href="result.php">Result</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="login.php">Login</a></li>

        </ul>
        <form action="students.php" method='POST' class="navbar-form navbar-right" >
              <div class="form-group">
                <input type="text" name="search" class="form-control " placeholder="Search by roll"/>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
        </form>
            
    </div>
  </nav>

<div class="tab">
    <h2>Search students information</h2>
<?php 
include 'db_connect.php';
//$sear=$_POST['search'];
if (isset($_POST['search'])) {
$src=$_POST['search'];
$data="SELECT * FROM students WHERE admission_roll='$src'";
$data_qury=mysql_query($data);

while($row=mysql_fetch_assoc($data_qury)) {
echo "<table border=2 >
<tr>
<th>Admission Roll</th>
<th>Quota</th>
<th>Student Name</th>
<th>Blood</th>
<th>Age</th>
<th>Religion</th>
<th>Gender</th>
<th>Father Name</th>
<th>Mother Name</th>
<th>Father Ocupation</th>
<th>Father contact</th>
<th>Student Contact</th>
<th>present Address</th>
<th>parmanent Address</th>
<th>Email</th>
</tr>";

echo "<tr>";
echo "<td>" . $row['admission_roll'] . "</td>";
echo "<td>" . $row['quota'] . "</td>";
echo "<td>" . $row['s_name'] . "</td>";
echo "<td>" . $row['blood_group'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['religion'] . "</td>";
echo "<td>" . $row['sex'] . "</td>";
echo "<td>" . $row['f_name'] . "</td>";
echo "<td>" . $row['m_name'] . "</td>";
echo "<td>" . $row['f_ocup'] . "</td>";
echo "<td>" . $row['f_contact'] . "</td>";
echo "<td>" . $row['s_contact'] . "</td>";
echo "<td>" . $row['pres_add'] . "</td>";
echo "<td>" . $row['parm_add'] . "</td>";
echo "<td>" . $row['email'] . "</td>";

echo "<tr>";
}
echo "</table>";
}
?>
</div>

</body>
</html>
