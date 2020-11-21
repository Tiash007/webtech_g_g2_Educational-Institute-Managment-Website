<?php
	//session_start();
$uname="tt";

		//session_start();
				setcookie("loggedinuserviewnotice",$uname,time()+120,'/');
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:../view/viewnotice.php");
		?>