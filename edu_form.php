<html>
<head>
	<title>Education Qualification </title>
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
  <h1 class="hd">Education Qualifications</h1>
 <div class="for">	
  <form class="for" action="edu_form.php" method="POST" onsubmit="return validateStandard(this)">
    <div>
      <table border='2'>
        <tr>
         <td>Student ID</td>
         <td>Degree Name</td>
         <td>Board</td>
         <td>Institute</td>
         <td>Grade</td>
         <td>Passing Year</td>
         <td>Scaned Certificate copy</td>
         </tr>
        <tr>
         <td><input type="text" name="id" required="1" regexp="JSVAL_RX_NUMERIC"></td>
         <td><select class="form-control input-sm sell" name="degree" required="1" exclude=" ">
                                  <option value=" ">--Select degree--</option>
                                  <option value="SSC">SSC</option>
                                  <option value="HSC">HSC</option>
                              

                                </select></td>
         <td><select class="form-control input-sm sell" name="board" required="1" exclude=" ">
                                  <option value=" ">--Select board--</option>
                                  <option value="Dhaka">Dhaka</option>
                                  <option value="Chittagong">Chittagong</option>
                                  <option value="Rajshahi3">Rajshahi</option>
                                  <option value="Barishal">Barishal</option>
                                  <option value="Comilla">Comilla</option>
                                  <option value="Dinajpur">Dinajpur</option>
                                  <option value="Jossor">Jossor</option>
                                  <option value="Sylhet">Sylhet</option>
                                  <option value="Madrasha">Madrasha</option>
                                  <option value="TEC">TEC</option>


                                </select><br><br></td>
         <td><input type="text" name="inst" width="50" required="1"></td>
         <td><input type="text" name="grade" placeholder="0.00" required="1"></td> 
         <td><select class="form-control input-sm sell" name="year" required="1" exclude=" ">
                                  <option value=" ">--Select year--</option>
                                  <option value="2010">2010</option>
                                   <option value="2011">2011</option>
                                  <option value="2012">2012</option>
                                  <option value="2013">2013</option>
                                  <option value="2014">2014</option>
                                  <option value="2015">2015</option>
                                  <option value="2016">2016</option>
                                  <option value="2017">2017</option>
                                  <option value="2018">2018</option>
                                  <option value="2019">2019</option>
                                  <option value="2020">2020</option>
                                  <option value="2021">2021</option>
                                  <option value="2022">2022</option>
                                  <option value="2023">2023</option>
                                </select></td>
         <td><input type="file" name = "certi" required="1"></td>
         </tr>
         <tr>
         <td></td>
         <td><select class="form-control input-sm sell" name="hdegree" required="1" exclude=" ">
                                  <option value=" ">--Select degree--</option>
                                  <option value="SSC">SSC</option>
                                  <option value="HSC">HSC</option>
                              

                                </select></td>
         <td><select class="form-control input-sm sell" name="hboard" required="1" exclude=" ">
                                  <option value=" ">--Select board--</option>
                                  <option value="Dhaka">Dhaka</option>
                                  <option value="Chittagong">Chittagong</option>
                                  <option value="Rajshahi3">Rajshahi</option>
                                  <option value="Barishal">Barishal</option>
                                  <option value="Comilla">Comilla</option>
                                  <option value="Dinajpur">Dinajpur</option>
                                  <option value="Jossor">Jossor</option>
                                  <option value="Sylhet">Sylhet</option>
                                  <option value="Madrasha">Madrasha</option>
                                  <option value="TEC">TEC</option>

                                </select><br><br></td>
         <td><input type="text" name="hinst" width="80" required="1"></td>
         <td><input type="text" name="hgrade" required="1" placeholder="0.00"></td>
         <td><select class="form-control input-sm sell" name="hyear" required="1" exclude=" ">
                                  <option value=" ">--Select year--</option>
                                  <option value="2010">2010</option>
                                  <option value="2011">2011</option>
                                  <option value="2012">2012</option>
                                  <option value="2013">2013</option>
                                  <option value="2014">2014</option>
                                  <option value="2015">2015</option>
                                  <option value="2016">2016</option>
                                  <option value="2017">2017</option>
                                  <option value="2018">2018</option>
                                  <option value="2019">2019</option>
                                  <option value="2020">2020</option>
                                  <option value="2021">2021</option>
                                  <option value="2022">2022</option>
                                  <option value="2023">2023</option>
                                </select></td>
         <td><input type="file" name = "hcerti" required="1"></td>
         </tr>
      </table>
    </div>
   
   <input name="submit" type="submit" value=" Submit ">

  </form>
 </div>

 
<?php
if (isset($_POST['id'])&& isset($_POST['degree'])&& isset($_POST['board'])&& isset($_POST['inst'])&& isset($_POST['grade'])&& isset($_POST['year'])&& isset($_POST['certi'])&& isset($_POST['hdegree'])&& isset($_POST['hboard'])&& isset($_POST['hinst'])&& isset($_POST['hgrade'])&& isset($_POST['hyear'])&& isset($_POST['hcerti'])) {
  # code...
include 'db_connect.php';

  $sql="INSERT INTO results(s_id,s_degree,s_board,
    s_institute,s_grade,s_pass_year,s_certificate,
    h_degree,h_board,h_institute,h_grade,h_pass_year,
    h_certificate)
      VALUES
     ('$_POST[id]','$_POST[degree]','$_POST[board]','$_POST[inst]','$_POST[grade]','$_POST[year]','$_POST[certi]','$_POST[hdegree]','$_POST[hboard]','$_POST[hinst]','$_POST[hgrade]','$_POST[hyear]','$_POST[hcerti]')";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "successfully added";
}

//mysql_close($con);
?>
<script src="scripts/jsval.js"></script>
</body>
</html>