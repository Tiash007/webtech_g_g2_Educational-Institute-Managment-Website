<?php
	//session_start();
$uname="tt";

		//session_start();
				setcookie("loggedinusershowstudent",$uname,time()+120,'/');
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:../view/showstudent.php");
		?>