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
                <strong>Recent Search</strong>
            </div> 


<div class="panel-body">                
 
                    <br>
                        <div class="table-responsive">
                        <table class="table table-hover table-bordered table-condensed">
                            <thead>
                                <tr class="success">
                                    <th>Search Type</th>
                                    <th>Key Word</th>
                                    <th>Search Date</th>
                                    <th>Timestamp</th>
                                   

                                </tr>
                            </thead>

                            <?php
                               
                                        $user_id = $_SESSION['ULOGINID']; 
                                        $type_s;
                                        
                                            
                                $sql = "SELECT * from history where user_id='$user_id' ORDER BY id desc;";
                                $result = mysqli_query($conn,$sql);
            
            
                                if($result){
                                    while($row=mysqli_fetch_array($result)){
                                            ($row['tw_type']==1?$type_s="username":"");
                                            ($row['tw_type']==2?$type_s="Content":"");
                                            ($row['tw_type']==3?$type_s="Hashtag#":"");

                                        echo '<tr class="active">';
                                        echo '<td>'.$type_s.'</td>';
                                        echo '<td>'.$row['tweet'].'</td>';
                                        echo '<td>'.$row['s_date'].'</td>';
                                        echo '<td>'.$row['s_time'].'</td>';
                                       
                                      
                                    }

                                }else{
                                    die('SQL statement Error'.mysqli_error($conn));
                                }

                            ?>
                        </table>
                            </div>
                                
                            <br>
            
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 

</body>
</html>