<?php

	//session_start();
	//session_destroy();

	setcookie("loggedinuser",$uname,time()-120,'/');
	setcookie("loggedinuseraddemployee",$uname,time()-120,'/');
	setcookie("loggedinuseraddstudent",$uname,time()-120,'/');
	setcookie("loggedinuseraddteacher",$uname,time()-120,'/');
	setcookie("loggedinuserprofile",$uname,time()-120,'/');
	setcookie("loggedinusershowemployee",$uname,time()-120,'/');
	setcookie("loggedinusershowstudent",$uname,time()-120,'/');
	setcookie("loggedinusershowteacher",$uname,time()-120,'/');
	setcookie("loggedinuserupdatesaldate",$uname,time()-120,'/');
	setcookie("loggedinuseruploadnotice",$uname,time()-120,'/');
	setcookie("loggedinuserviewnotice",$uname,time()-120,'/');
	setcookie("loggedinuserviewresult",$uname,time()-120,'/');
	setcookie("loggedinuserviewsaldate",$uname,time()-120,'/');
	header('location: ../view/login.php');

?>