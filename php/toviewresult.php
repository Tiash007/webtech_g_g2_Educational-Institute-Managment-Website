<?php
	//session_start();
$uname="tt";

		//session_start();
				setcookie("loggedinuserviewresult",$uname,time()+120,'/');
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:../view/viewresult.php");
		?>