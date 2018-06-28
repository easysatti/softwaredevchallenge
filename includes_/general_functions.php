 <?php 
 //save in includes_/general_functions.php 
 	function gotoLogin(){ 
 		header('location:user_login.php'); 
 	} 
 	function gotoHome(){ 
		 header('location:index.php'); 
 } 
 function gotoSignUp(){ 
		 header('location:user_signup.php'); 
 } 
 function gotoresetPass(){ 
		 header('location:resetPassword.php'); 
 } 

 

 	function getErrmsg($errNo){

 		switch ($errNo) {
 			case '1':
 				return "Empty field/s is/are not allowed";
 				break;
 			case '2':
 			return " Account already exist";
 				# code...
 				break;
 			case '3':
 			return "Make sure to fill all fields!";
 				# code...
 				break;

 			default:
 			return "No error massage found";
 				# code...
 				
 		}
 	}

 	function getInfomsg($msgNo){
 			switch ($msgNo) {
 			case '1':
 				return "Account Created Successfully";
 				break;
 			case '2':
 			return "Account Updated Successfully";
 				# code...
 				break;
 			case '3':
 					return "Account Deleted Successfully";
 					# code...
 					break;
 			case '4':
 				return "New Usertype Added Successfully.";
 				break;
 			case '5':
 				return "Usertype Updated Successfully.";
 				break;
 			case '6':
 				return "Uesrtype Deleted.";
 				break;
 			case '7':
 				return "Uesrtype already exist.";
 				break;
 			case '8':
 				return "Student Added Successfully.";
 				break;
 			case '9':
 				return "Student Deleted .";
 			case '10':
 				return "Student Updated Successfully.";
 				break;
 				break;
 			default:
 			return "No error massage found";
 				# code...
 				
 		}

 	}
 
?>