<?php

if(!isset($_COOKIE["loggedinusershowteacher"]))
{
	header('location: login.php');
}
?>