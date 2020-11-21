<?php
	//session_start();
$uname="tt";

		//session_start();
				setcookie("loggedinuserupdatesaldate",$uname,time()+120,'/');
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:../view/updatesalarydate.php");
		?>