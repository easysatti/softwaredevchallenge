<?php
	session_start();
	require_once('includes_/mysql_connection.php');
	require_once('includes_/mysql_functions.php');
	require_once('includes_/general_functions.php');
	require_once('includes_/session_check.php');
	if(isset($_POST['btnsubmit'])){
		if(isset($_POST['txtusername']) && isset($_POST['txtpassword'])){
			if(!empty($_POST['txtusername']) && !empty($_POST['txtpassword'])){
				
				$user = strip_tags($_POST['txtusername']);
				/*review on md5 issues when pass match but doesn't access*/
				$pwd = md5(strip_tags($_POST['txtpassword']));
			
				$sql = "SELECT * FROM users WHERE username='$user'";
				$result = mysqli_query($conn,$sql);
					
				
					if($result){
                    
						if(mysqli_num_rows($result)==1){
                            

								$row = $result->fetch_assoc();

								$username = $row['username'];
								$userID = $row['id'];
								
								$password = $row['pwd'];
								$retry = $row['retries'];
								$retry++;
								$final_retry = 6-$retry;
						
							if($retry>5){
								$_SESSION['error']="Account is Locked";
								gotoLogin();
							}else if($pwd != $password){
							    
									updateRetries($userID,$conn);
									$_SESSION['error']="Invalid password: ".$final_retry." retries remaining!";
									gotoLogin();
							
							}else if($pwd == $password){
							    
									resetRetries($userID,$conn);
									$_SESSION['ULOGINID'] = $userID;
									$_SESSION['UNAME'] = $username;
								session_regenerate_id();
								gotoHome();
								
						}
						}else{
								$_SESSION['error']="Account is not exist";
								gotoLogin();
						}
					}else{
						die('Error in sq query');
					}
			}else{
				$_SESSION['error']="Blank username and password is not allowed!";
				gotoLogin();
			}
		}else{
			gotoLogin();
		}
	}else{
		gotoLogin();
	}

?>