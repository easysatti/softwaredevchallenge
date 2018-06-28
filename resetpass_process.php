<?php
 
	session_start();
	require_once('includes_/mysql_connection.php');
	require_once('includes_/mysql_functions.php');
	require_once('includes_/general_functions.php');
	require_once('includes_/session_check.php');
	if(isset($_POST['btnsubmit'])){
		if(isset($_POST['txtusername']) && isset($_POST['txtpassword'])){
			if(!empty($_POST['txtusername']) && !empty($_POST['txtpassword'])){
			    if(isset($_SESSION['ULOGINID'])){
			        
			    $uid = $_SESSION['ULOGINID'];
			   
				$user = md5(strip_tags($_POST['txtusername']));
				/*review on md5 issues when pass match but doesn't access*/
				$pwd = md5(strip_tags($_POST['txtpassword']));
		
			    
			    if($pwd != $user){
			        
                $sql = "SELECT pwd,retries from users where id='$uid';";
				$result = mysqli_query($conn,$sql);
					
					if($result){
					    $row=mysqli_fetch_array($result);
					    
					    $oldPass = $row['pwd'];
					    
					    if($oldPass == $user){
					        
					        $sql = "UPDATE users set pwd='$pwd' where id='$uid';";
				$result = mysqli_query($conn,$sql);
				
				if($result){
				    
			
					        
					    $_SESSION['error']="Password Changed!";
				gotoHome();
					}else{
					      $_SESSION['error']="sql error ditoy!";
				gotoresetPass();
					}
					    }else{
					         $_SESSION['error']="You Have entered wrong Old Password";
				gotoresetPass();
					    }
					}
			    }else{
			        $_SESSION['error']="Passwords are the same!";
				gotoresetPass();
			    }
			}else{
			    
			    $_SESSION['error']="User Id missed!";
				gotoHome();
			    
			}
			}else{
				$_SESSION['error']="Blank username and password is not allowed!";
				gotoLogin();
			}
		}else{
			gotoLogin();
		}
	}else{
	    header('Location:https://google.com');
		gotoLogin();
	}

?>