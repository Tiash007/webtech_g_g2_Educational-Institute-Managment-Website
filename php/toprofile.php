<?php
	//session_start();
$uname="tt";

		//session_start();
				setcookie("loggedinuserprofile",$uname,time()+120,'/');
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:../view/profile.php");
		?>