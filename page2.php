<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    	session_start();
	require_once('includes_/mysql_connection.php');
	require_once('includes_/mysql_functions.php');
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

 						<h4>Search by twitter username</h4>
 					</div> 	<br /> 
 					<div class="panel-body"> 

 	
 		<h3>Search Username</h3>
  <form action="username.php" method="post">
   <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="number" name="num" class="form-control" placeholder="Num of Tweets">
        </div>
        <div class="form-group">
            <input type="hidden" name="type" value="1">
        </div>
        <div class="form-group">
            <input type="submit" value ="Search"  class="form-control btn btn-success">
        </div>
</form>
 		
 					</div> 
				</div>	
 			</div> 
 
 			<div class="col-sm-4"> 
 				<div class="panel panel-primary"> 
 					<div class="panel-heading"> 

 						<h4>Search by Content</h4>
 					</div> 	<br /> 
 					<div class="panel-body"> 

 	
 		<h3>Tweets by Content</h3>
  <form action="content.php" method="post">
 <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Content" required="required">
        </div>
        <div class="form-group">
            <input type="number" name="num" class="form-control" placeholder="Num of Tweets">
        </div>
          <div class="form-group">
            <input type="hidden" name="type" value="2">
        </div>
        <div class="form-group">
            <input type="submit" value ="Search"  class="form-control btn btn-success">
        </div>
</form>
 		
 					</div> 
				</div>	
 			</div> 
 
 			<div class="col-sm-4"> 
 				<div class="panel panel-primary"> 
 					<div class="panel-heading"> 

 						<h4>Search by Hashtag</h4>
 					</div> 	<br /> 
 					<div class="panel-body"> 

 	
 		<h3>Tweets by Hashtag</h3>
  <form action="hashtag.php" method="post">
 <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Hashtag" required="required">
        </div>
        <div class="form-group">
            <input type="number" name="num" class="form-control" placeholder="Num of Tweets">
        </div>
          <div class="form-group">
            <input type="hidden" name="type" value="3">
        </div>
        <div class="form-group">
            <input type="submit" value ="Search"  class="form-control btn btn-success">
        </div>
</form>
 		
 					</div> 
				</div>	
 			</div> 
 			</div>
 			</div>
 			<form action="random.php" method="post">
 
          <div class="form-group">
            <input type="hidden" name="type" value="3">
        </div>
        <div class="form-group">
            <input type="submit" value ="I'm Feeling Lucky"  class="form-control btn btn-success">
        </div>
</form>


</html>

