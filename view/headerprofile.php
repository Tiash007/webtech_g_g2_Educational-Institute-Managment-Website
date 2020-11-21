<?php

if(!isset($_COOKIE["loggedinuserprofile"]))
{
	header('location: login.php');
}
?>