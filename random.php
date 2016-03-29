<html>
<head>
	<title>Random NUmber</title>
</head>
<body>

   <form method='post' action='random.php'>
   	Name:<input type="text" name="name">
   	
   <input type =submit>
</form>
</body>
</html>

<?php
include 'db_connect.php';
$rand = rand(0,1000000000);
if (isset($_POST['name'])){
	$sql="INSERT INTO random(name,value)  VALUES ('$_POST[name]','$rand')";
  if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo ("Entered data successfully");
} 
?>