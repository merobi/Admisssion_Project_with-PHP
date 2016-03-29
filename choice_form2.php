<!DOCTYPE html>
<html>
<head>
<title>Choice form..</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/style1.css" rel="stylesheet">
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
            <li class="active"><a href="home.php">Home</a></li>
            <li><a href="registration.php">Registration</a></li>
            <li><a href="choice_form.php">Choice Form</a></li>
            <li><a href="students.php">Student List</a></li>
            <li><a href="result.php">Result</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>

            
    </div>
</nav>

<form class="choice2">
<div>
 <h2>Subject Choice form</h2>
</div>
<div>
  Admission Roll:<input type="text" name="roll"><br><br>
  Student Name:<input type="text" name="name"><br><br>
  Merit Position:<input type="text" name="name"><br><br>
  Unit:<select>
         <option value=" ">--Select unit-- </option>
                                  <option value="1">A</option>
                                  <option value="2">B</option>
                                  <option value="3">C</option>
                                  <option value="4">D</option>
       </select><br>
</div>
</form>

<script src="scripts/jquery.js"></script>
<script src="scripts/bootstrap.min.js"></script>

</body>
</html>


