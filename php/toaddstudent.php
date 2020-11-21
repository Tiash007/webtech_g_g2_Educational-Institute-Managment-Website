<?php
	//session_start();
$uname="tt";

		//session_start();
				setcookie("loggedinuseraddstudent",$uname,time()+120,'/');
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:../view/addstudent.php");
		?>