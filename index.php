<!DOCTYPE html>
<html lang="en">
<head>
   <?php
    	session_start();
    require_once('includes_/general_functions.php');
	require_once('includes_/session_check.php');
    ?>
  <title>Development Challenge 70 Doors</title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
  <div class="jumbotron">
    <h1>SDC</h1> 
    <p>Software development challenge.</p> 
  </div>
  <p><strong>By: </strong>Basil Satti</p> 
  
</div>
<div class="container"> 
 		<div class="row"> 
 			<div class="col-sm-4"> 
 				<div class="panel panel-primary"> 
 					<div class="panel-heading"> 

 						<span class="glyphicon glyphicon-user"><h4> User Information</h4></span>

 					</div> 

 					<div class="panel-body"> 
 						<label>User :</label> 
 <?php 
 
 			echo (isset($_SESSION['UNAME'])?$_SESSION['UNAME']:""); 
 ?> 
 		<br /> 
 		<a href="history.php"> <span class="glyphicon glyphicon-clock"></span>Recent Search</a> 
 		<br />
 		<a href="resetPassword.php"> <span class="glyphicon glyphicon-edit"></span>Reset Password</a> 
 		<br />
 		<a href="user_logout.php"> <span class="glyphicon glyphicon-log-out"></span> Log out</a> 
 					</div> 
				</div>	
 			</div> 
 			</div>
 			</div>
<div class="row">
    <div class="col-sm-6" style="float:right;">
        <a href="page1.php"><button type="button" class="btn btn-primary">Excersice 1</button></a>
   
        <a href="page2.php"><button type="button" class="btn btn-danger">Excersice 2</button></a>
      
    </div>
  
  </div>

</body>
</html>