<?php
	//session_start();
$uname="tt";

		//session_start();
				setcookie("loggedinusershowteacher",$uname,time()+120,'/');
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:../view/showteacher.php");
		?>