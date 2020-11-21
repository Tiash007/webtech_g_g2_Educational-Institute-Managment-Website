<?php
	//session_start();
$uname="tt";

		//session_start();
				setcookie("loggedinuseraddemployee",$uname,time()+120,'/');
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:../view/addemployee.php");
		?>