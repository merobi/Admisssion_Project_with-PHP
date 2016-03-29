
<?php 
include 'db_connect.php';
$search=$_POST['search'];
$data="SELECT * FROM students WHERE roll='$search' ";
$data_qury=mysql_query($data);

while($data=mysql_fetch_assoc($data_qury)) {

echo '</br><br/>';?><img src="<?php echo $data['image'];?>" height='250' width='250'><?php 
echo '<br>Name: '.$data['name'].'<br/>';
echo 'Department: '.$data['department'].'<br/>';
echo 'Batch: '.$data['batch'].'<br/>';


echo 'Roll: '.$data['roll'].'<br/>';
echo'Sex: '.$data['sex'].'<br/>';

}
?>
<!--WHERE 'students.roll'='$_POST['search'].roll'-->
