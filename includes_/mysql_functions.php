<?php 
 //save in includes_/mysql_functions.php 
 	function updateRetries($UID,$conn){ 
 		$success=false; 
 		$sql="UPDATE users SET retries=retries + 1 WHERE id =$UID"; 
 		$result = mysqli_query($conn,$sql); 
 			if(!$result){ 
 				die(mysqli_error($conn)); 
 			} 
		 } 
 
 	function resetRetries($UID,$conn){ 
 		$sql="UPDATE users SET retries=0 WHERE id =$UID"; 
 		$result = mysqli_query($conn,$sql); 
			if(!$result){ 
 				die(mysqli_error($conn)); 
 			}	
		 } 

	function comparePassword($userID,$prPWD,$conn){ 
 		$match=false; 
 		$sql="SELECT id FROM users WHERE id =$userID AND pwd=md5($prPWD);"; 
		$result = mysqli_query($conn,$sql); 
 			if($result){ 
 				if(mysqli_num_rows($result)==1) 
 					$match=true; 
 			}else{ 
			 	die(mysqli_error($conn)); 
 			} 
 		return $match;	
 	}

 	function isUserExist($uname,$conn){

 		$exist = false;

 		$query = "SELECT id FROM users where username='$uname';";

 		$result = mysqli_query($conn,$query);

 		if ($result) {
 			if (mysqli_num_rows($result) ==1) {
 				$exist = true;
 				# code...
 			}else{
 				$exist = false;
 			}
 			# code...

 		}else{
 			die("Error in sql stmt. ".mysqli_error($conn));
 		}
 		return $exist;
 	} 

 
 ?> 