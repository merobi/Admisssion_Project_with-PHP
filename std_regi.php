<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/regi.css" rel="stylesheet">
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
            <li class="active"><a href="std_regi.php">Registration</a></li>
            <li><a href="choice_form.php">Choice Form</a></li>
            <li><a href="students.php">Student List</a></li>
            <li><a href="result.php">Result</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>

            
    </div>
</nav>
<h2 class="hd">Registration:</h2>
<form class="frm" action="std_regi.php" method="POST" onsubmit="return validateStandard(this)" >

<div>
 <h3>Personal Information</h3>
</div>
<div class="std">
 Student Name<span class="required">*</span>:<input type="text" name="name" placeholder="Enter student name" required="1" regexp="JSVAL_RX_ALPHA">
 Admission Roll<span class="required">*</span>:<input type="text" class"adm" name="roll" placeholder="Enter Admission Roll" required="1" regexp="JSVAL_RX_ALPHA_NUMERIC_WITHOUT_HIFANE">
 Quota<span class="required">*</span>:<select name="quota" required="1" exclude=" ">
         <option value=" ">--Select quota-- </option>
                                  <option value="Freedom Fighter">Freedom Fighter</option>
                                  <option value="Tribal">Tribal</option>
                                  <option value="Physical Disorder">Physical Disorder</option>
                                  <option value="Null">Null</option>
       </select><br><br>
  Blood Gropu<span class="required">*</span>:<select name="blood" required="1" exclude=" ">
         <option value=" ">--Select group-- </option>
                                  <option value="A+">A+</option>
                                  <option value="A-">A-</option>
                                  <option value="B+">B+</option>
                                  <option value="B-">B-</option>
                                  <option value="O+">O+</option>
                                  <option value="O-">O-</option>
                                  <option value="AB+">AB+</option>
                                  <option value="AB-">AB-</option>
       </select>
  Age<span class="required">*</span>:<input type="text" name="age" placeholder="Enter Age" required="1" regexp="JSVAL_RX_NUMERIC">
  Religion<span class="required">*</span>:<select name="religion" required="1" exclude=" ">
             <option value=" ">--Select religion--</option>
                                  <option value="Islam">Islam</option>
                                  <option value="Hindu">Hindu</option>
                                  <option value="Buddish">Buddish</option>
                                  <option value="Khristain">Khristain</option>
           </select><br><br>
  Gender<span class="required">*</span>:<select name="sex" required="1" exclude=" ">
          <option value=" ">--Select gender-- </option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                  <option value="Other">Other</option>
         </select>
  Contact<span class="required">*</span>:<input type="text" name="scont" placeholder="Enter Student Mobile no." required="1" regexp="JSVAL_RX_MOB">
  Email<span class="required">*</span>:<input type="text" name="email" placeholder="Enter your Email" required="1" regexp="JSVAL_RX_EMAIL">
 </div>
  <div>
   <h3>Parents Information</h3>
  </div>
  <div class="par">
    Father Name<span class="required">*</span>:<input type="text" name="fname" placeholder="Enter Father Name" required="1" regexp="JSVAL_RX_ALPHA">
    Mother Name<span class="required">*</span>:<input type="text" name="mname" placeholder="Enter Mother Name" required="1" regexp="JSVAL_RX_ALPHA">
    Father Ocupation<span class="required">*</span>:<select name="focup" required="1" exclude=" ">
                       <option value=" ">--Select ocupation-- </option>
                                  <option value="JOb">Job</option>:
                                  <option value="Bussiness">Bussiness</option>
                                  <option value="Other">Other</option>
                     </select><br><br>
    Father Contact<span class="required">*</span>:<input type="text" name="fcont" placeholder="Enter father Mobile no." required="1" regexp="JSVAL_RX_MOB">
  </div>
  <div>
   <h3>Address</h3>
  </div>
  <div class="add">
    Present Address<span class="required">*</span>:<input type="text" name="padd" placeholder="Enter  whole address using comma" required="1" regexp="JSVAL_RX_ADDRESS">
    Parmanent Address<span class="required">*</span>:<input type="text" name="pradd" placeholder="Enter  whole address using comma" required="1" regexp="JSVAL_RX_ADDRESS">
  </div>
  
  <div>
   <h3>Educational Information</h3>
  </div>
  <div class="edu"> 
  <div><h4>SSC</h4></div>
  <div class="ssc">
    Degree<span class="required">*</span>:<select name="degree" required="1" exclude=" ">
            <option value=" ">--Select degree--</option>
                                  <option value="SSC">SSC</option>
                                  <option value="HSC">HSC</option>
         </select>
    Board<span class="required">*</span>:<select name="board" required="1" exclude=" ">
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

          </select>
    Institute<span class="required">*</span>: <input type="text" name="inst" placeholder="Enter your school name" required="1" regexp="JSVAL_RX_ALPHA"><br><br> 
    Grade<span class="required">*</span>: <input type="text" name="grade" placeholder="0.00" required="1">
    Passing Year<span class="required">*</span>:<select  name="year"  required="1" exclude=" ">
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
                                </select> 
    Certificate<span class="required">*</span>:<input type="file" name = "certi" required="1">  
  </div>

  <div><h4>HSC</h4></div>
  <div class="hsc">
    Degree<span class="required">*</span>:<select name="hdegree" required="1" exclude=" ">
            <option value=" ">--Select degree--</option>
                                  <option value="SSC">SSC</option>
                                  <option value="HSC">HSC</option>
         </select>
    Board<span class="required">*</span>:<select name="hboard" required="1" exclude=" ">
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

          </select>
    Institute<span class="required">*</span>: <input type="text" name="hinst" placeholder="Enter your college name" required="1" regexp="JSVAL_RX_ALPHA"><br><br> 
    Grade<span class="required">*</span>: <input type="text" name="hgrade" placeholder="0.00" required="1">
    Passing Year<span class="required">*</span>:<select  name="hyear"  required="1" exclude=" ">
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
                                </select> 
    Certificate<span class="required">*</span>:<input type="file" name = "hcerti" required="1">
  </div>
  <div class="btn">
    <input name="submit" type="submit" value=" Submit "> 
  </div> 
  </div>
</form>

<?php
$rand = rand(0,1000000000);
if (isset($_POST['name'])&& isset($_POST['roll'])&& isset($_POST['quota'])&& isset($_POST['blood'])&& isset($_POST['age'])&& isset($_POST['religion'])&& isset($_POST['sex'])&& isset($_POST['fname'])&& isset($_POST['mname'])&& isset($_POST['focup'])&& isset($_POST['fcont'])&& isset($_POST['scont'])&& isset($_POST['padd'])&& isset($_POST['pradd'])&& isset($_POST['email'])&& isset($_POST['degree'])&& isset($_POST['board'])&& isset($_POST['inst'])&& isset($_POST['grade'])&& isset($_POST['year'])&& isset($_POST['certi'])&& isset($_POST['hdegree'])&& isset($_POST['hboard'])&& isset($_POST['hinst'])&& isset($_POST['hgrade'])&& isset($_POST['hyear'])&& isset($_POST['hcerti'])) {

  include 'db_connect.php';
    $sql="INSERT INTO student_infos(s_name,admission_roll,quota,blood_group,age,
      religion,sex,f_name,m_name,f_ocup,f_contact,s_contact,pres_add,parm_add,email,s_degree,s_board,
      s_institute,s_grade,s_pass_year,s_certificate,h_degree,h_board,h_institute,h_grade,h_pass_year,h_certificate,value)
    VALUES
     ('$_POST[name]','$_POST[roll]','$_POST[quota]','$_POST[blood]','$_POST[age]','$_POST[religion]','$_POST[sex]','$_POST[fname]','$_POST[mname]','$_POST[focup]','$_POST[fcont]','$_POST[scont]','$_POST[padd]','$_POST[pradd]','$_POST[email]','$_POST[degree]','$_POST[board]','$_POST[inst]','$_POST[grade]','$_POST[year]','$_POST[certi]','$_POST[hdegree]','$_POST[hboard]','$_POST[hinst]','$_POST[hgrade]','$_POST[hyear]','$_POST[hcerti]','$rand')";
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


