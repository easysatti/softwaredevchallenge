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
if($_POST["name"]){
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
            $c_time = time("h:i:sa");
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
require_once('twitteroauth.php');
require_once('OAuth.php');
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "140021257-oRtjkFbRYYbJI5tgXAXDX9cYTxBvsyrl4jiFAcuP",
    'oauth_access_token_secret' => "VzBL4pd9LaZzDxzUIy0aQG2SoENQrUdwnT6kXON4muMqn",
    'consumer_key' => "VpW8NLvtPziiqerldyS8GhxCR",
    'consumer_secret' => "8OA4Q4AqcHJr4D4sDWdes79R6exTUVXADcH2fEpHBNLDeCz0k0"
);

// get the url from twitter development
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';

// explain the purpose of get and post
$requestMethod = 'GET';

$flowers;
$frineds;
$username;
//set getfield 
$getfield = '?screen_name='.$name.'&count='.$nnum;
$twitter = new TwitterAPIExchange($settings);
$string2 = json_decode($twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc = TRUE);
foreach($string2 as $items)
    {
		//explian objects 
		//get name of objects from twitter documentation OR from the complex response
    	$propicurl=$items['user']['profile_image_url'];
        $flowers = $items['user']['followers_count'];
        $friends = $items['user']['friends_count'];
        $username = $items['user']['screen_name'];
        $desc = $items['user']['description'];
    }
    
    
   echo '<div class="col-md-6">';
   echo '<h1>'."Information".'</h1>'."<br/>";
   echo '<img class="rounded" src='.$propicurl.'></img>'."<br/>"; 
  
   echo '<span class="label label-primary">Username: '.$username.'</span>'; 
   echo '<span class="label label-success">Followers: '.$flowers.'</span>'; 
   echo '<span class="label label-warning">Friends: '.$friends.'</span>'; 
   echo '<span class="label label-danger">'.$desc.'</span>'; 
   
   
   echo '<h1>'."Tweets".'</h1>';
   
   
   
   foreach($string2 as $items)
    {
		//explian objects 
		//get name of objects from twitter documentation OR from the complex response
		
		echo "Tweet: ".'</br><p><span class="border border-success">'.$items['text'].'</span></p>'."<br />";
		echo '<div class="pull-right"><span class="label label-default">'.$items['created_at'].'</span><br />';
        echo "________________________________________________________".'</br>';
    
        
    }
     
   echo '<hr></div>';


}else{
    echo "Please Enter a valid username";
    
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



