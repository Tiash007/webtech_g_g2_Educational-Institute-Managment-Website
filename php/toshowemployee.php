<?php
	//session_start();
$uname="tt";

		//session_start();
				setcookie("loggedinusershowemployee",$uname,time()+120,'/');
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:../view/showemployee.php");
		?>