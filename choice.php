<html>
<head>
	<title>choice</title>
</head>
<body>
  <div>
    <input type="text" name="roll" >
    <input type="button" name="button" value="ok" >
  </div>

</body>
</html>
<?php
include 'db_connect.php';
// $sear=$_POST['search'];
if (isset($_POST['roll'])) {
      # code...
     
     $src=$_POST['roll'];
     $sql = mysql_query("SELECT admission_roll,s_name,merit_roll,u_name 
                         FROM students,units,students_choices
                         WHERE students.s_id=units.s_id=students_choices.s_id
                          AND admission_roll='$src'");

  
    echo '<table border="2">
    <tr>
      <th>Admission Roll</th>
      <th>Quota</th>
      <th>Student Name</th>
      <th>Merit Roll</th>
      <th>Unit Name</th>
      <th>Subjects Choose</th>
      <th>Email</th>
    </tr>';
    while ($row = mysql_fetch_assoc($sql)){
    echo'<tr>';
    echo '<td>' .$row['admission_roll'].'</td>';
    echo '<br/><td>' .$row['quota'].'</td>';
    echo '<br/><td>' .$row['s_name'].'</td>';
    echo '<br/><td>'.$row['merit_roll'].'</td>';
    echo '<br/><td>'.$row['u_name'].'</td>';
    echo '<br/><td>'.$row['choice_seq'].'</td>';
    echo '<br/><td>'.$row['email'].'</td>';
echo'</tr>';
    
  }
echo '</table>';
    }
    
 
   ?>

//mysql_close($con);
?>
