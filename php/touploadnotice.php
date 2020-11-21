<?php
	//session_start();
$uname="tt";

		//session_start();
				setcookie("loggedinuseruploadnotice",$uname,time()+120,'/');
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:../view/uploadnotice.php");
		?>