<?php
 
	session_start();
	require_once('includes_/mysql_connection.php');
	require_once('includes_/mysql_functions.php');
	require_once('includes_/general_functions.php');
	require_once('includes_/session_check.php');
	if(isset($_POST['btnsubmit'])){
		if(isset($_POST['txtusername']) && isset($_POST['txtpassword']) && isset($_POST['confirm_pwd'])){
			if(!empty($_POST['txtusername']) && !empty($_POST['txtpassword']) && !empty($_POST['confirm_pwd'])){
			    
			   
				$user = strip_tags($_POST['txtusername']);
				/*review on md5 issues when pass match but doesn't access*/
				$pwd = md5(strip_tags($_POST['txtpassword']));
			    $pwd_c = md5(strip_tags($_POST['confirm_pwd']));
			    
			    if($pwd == $pwd_c){
			        
                if(!isUserExist($user,$conn)){
                    
                
                
				$sql = "INSERT INTO users VALUES ('','$user','$pwd','')";
				$result = mysqli_query($conn,$sql);
					
				
					if($result){
                         $_SESSION['error']="Account Created Successfully!";
			    	gotoLogin();
					}else{
						die('Error in sq query');
					}
                }else{
                     $_SESSION['error']="Username exist please try diffrent!";
				gotoSignUp();
                }
			    }else{
			        $_SESSION['error']="Passwords doesn't Matched!";
				gotoSignUp();
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