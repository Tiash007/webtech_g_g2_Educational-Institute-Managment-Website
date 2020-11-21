<?php
	//session_start();

	if(isset($_POST['submit'])){

		//declaration
		$uname 	= $_POST['username'];
		$pass 	= $_POST['password'];

		//validation
		if($uname == ""){
			//echo "Username field is empty...";
			header('location: ../view/login.php?msg=null_username');

		}else if(empty($pass)){
			//echo "Password field is empty...";
			header('location: ../view/login.php?msg=null_password');

		}
			elseif($uname == "Employee" && $pass=="123")
			{
				//session_start();
				setcookie("loggedinuser",$uname,time()+120,'/');
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:../view/home.php");
			}

			elseif($uname == "Admin" && $pass=="1234")
			{
				//session_start();
				setcookie("loggedinuser",$uname,time()+120,'/');
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:../view/AdminFunction.php");
			}

			elseif($uname == "Student" && $pass=="124")
			{
				//session_start();
				setcookie("loggedinuser",$uname,time()+120,'/');
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:../view/home.php");
			}


			elseif($uname == "Teacher" && $pass=="125")
			{
				//session_start();
				setcookie("loggedinuser",$uname,time()+120,'/');
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:../view/teacher.html");
			}



			else{
				//echo "invalid user!please register...";
				header('location: ../view/login.php?msg=invalid_user');
			}
		
	}else{
		header('location: login.php');
	}
?>