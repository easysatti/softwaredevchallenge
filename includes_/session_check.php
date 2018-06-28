<?PHP
	if(!isset($_SESSION['ULOGINID']) && !isset($_SESSION['UNAME'])){
		gotoLogin();
	}else{
			if(empty($_SESSION['ULOGINID']) || empty($_SESSION['UNAME']))
			gotoLogin();
	}


?>