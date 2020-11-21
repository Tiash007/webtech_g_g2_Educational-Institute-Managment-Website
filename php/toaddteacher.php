<?php
	//session_start();
$uname="tt";

		//session_start();
				setcookie("loggedinuseraddteacher",$uname,time()+120,'/');
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:../view/addteacher.php");
		?>