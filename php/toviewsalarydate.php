<?php
	//session_start();
$uname="tt";

		//session_start();
				setcookie("loggedinuserviewsaldate",$uname,time()+120,'/');
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:../view/showsalarydate.php");
		?>