
<!DOCTYPE html>
<html lang="en">
<head>
   <?php
    
    session_start(); 
    require_once('./includes_/general_functions.php'); 
    require_once('./includes_/session_check.php'); 
    require_once('./includes_/mysql_connection.php');
     
    ?>
  <title>SDC History</title>
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
                        User Information 
                </div> 
                     <div class="panel-body"> 
                        <label>User :</label> 
                        <?php 

                            echo (isset($_SESSION['UNAME'])?$_SESSION['UNAME']:""); 

                             ?> 
                        <br /> 
                            <a href="index.php">Home</a>
                            <br /> 
                            <a href="user_logout.php">Log out</a>
                        </div>  
                    </div> 
            </div>

     <div class="col-sm-8"> 
        <div class="panel panel-primary"> 
            <div class="panel-heading"> 
                <strong>Search Result</strong>
            </div> 


<div class="panel-body">                

   
<div class="container">






<?php

    
require_once('twitteroauth.php');
require_once('OAuth.php');
require_once('TwitterAPIExchange.php');


$at = "140021257-oRtjkFbRYYbJI5tgXAXDX9cYTxBvsyrl4jiFAcuP";
$ats = "VzBL4pd9LaZzDxzUIy0aQG2SoENQrUdwnT6kXON4muMqn";
$c = "VpW8NLvtPziiqerldyS8GhxCR";
$cs = "8OA4Q4AqcHJr4D4sDWdes79R6exTUVXADcH2fEpHBNLDeCz0k0";




$twitter = new TwitterOAuth($c,$cs,$at,$ats);
if(isset($_POST["name"])){
    $name = $_POST["name"];
    $num = $_POST["num"];
    $nnum = 0;
    if($num <=0){
        $nnum = 10;
        
    }else{
        $nnum = $num;
    }
    
     if(isset($_POST["name"]) && isset($_POST["type"]) && isset($_SESSION["ULOGINID"]) ){
        if(!empty($_POST["name"]) && !empty($_POST["type"]) && !empty($_SESSION["ULOGINID"])){
            
            $name = $_POST["name"];
            $type = $_POST["type"];
            $c_time = time("h:sa");
            $c_date = date("Y/m/d");
            $user = $_SESSION["ULOGINID"];
            
            $sql = "INSERT INTO history VALUES ('','$type','$name','$c_date','$c_time','$user');";
            $result = mysqli_query($conn,$sql);
            
            if($result){
                echo "History checked!";
            }else{
                die("worror");
            }
        }else{
                die("Null data");
            }
    }else{
                die("Null data");
            }
            
// get the url from twitter development
$tweets = $twitter->get("https://api.twitter.com/1.1/search/tweets.json?q=".$name."&result_type=recent&count=".$nnum);
 if(count($tweets->statuses)) {
foreach ($tweets->statuses as $tweet){
     echo '<div class="row">'; 
        echo '<div class="col-sm-7">'; 
        echo '<img class="rounded" src='.$tweet->user->profile_image_url.'></img>'.'<strong>'." ".$tweet->user->name.'</strong>'."<br/>";
        echo  '<span class="label label-default">'."Tweet :".'</span>'.$tweet->text."<br/>";
        echo '<span class="label label-warning">Created At: '.$tweet->created_at.'</span>'."<br/>";
        echo "_________________________________________________"."<br/>";
         
   echo '</div>';
                    
                       
                           
            
                echo '</div>';
    }}else{
        echo 'Nothing found for '.$name;
    }
}


    


?>
    
 






</div>
                    
                       
                           
            
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 

</body>
</html>





