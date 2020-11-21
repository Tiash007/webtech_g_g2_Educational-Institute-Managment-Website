<?php

if(!isset($_COOKIE["loggedinuser"]))
{
	header('location: login.php');
}
?>