<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign up</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>

<body>

    <div class="container">
  <div class="jumbotron">
    <h1>SDC</h1> 
    <p>Software development challenge.</p> 
  </div>
  <p><strong>By: </strong>Basil Satti</p> 
  
</div>
<div class="login-form">
    <form action="user_signup_process.php" method="post">
        <h2 class="text-center">Sign Up</h2>       
        <div class="form-group">
            <input type="text" name="txtusername" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" id="pwd" name="txtpassword" class="form-control" placeholder="Password" required="required">
        </div>
        
         <div class="form-group">
            <input type="password" id="confirm_pwd" name="confirm_pwd" class="form-control" placeholder="confirm password" required="required">
        </div>
        
        <div class="form-group">
            <button type="submit" name="btnsubmit" class="btn btn-primary btn-block">Sign up</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>        
    </form>
    <?php 
 if (isset($_SESSION['error'])) {
 	# code...
 	echo '<font color="red"> '.$_SESSION['error'].'</font>';
 	unset($_SESSION['error']);
 }
 if (isset($_SESSION['locked'])) {
 	# code...
 	echo '<font color="red"> '.$_SESSION['locked'].'</font>';
 	unset($_SESSION['locked']);
 }
  if (isset($_SESSION['invalid'])) {
 	# code...
 	echo '<font color="red"> '.$_SESSION['invalid'].'</font>';
 	unset($_SESSION['invalid']);
 }
 if (isset($_SESSION['none'])) {
 	# code...
 	echo '<font color="red"> '.$_SESSION['none'].'</font>';
 	unset($_SESSION['none']);
 }

  ?>
    <p class="text-center"><a href="user_login.php">Already have an account!</a></p>
</div>
</body>
</html>                                		                            