<?php
	include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<form method="POST" action="php/registration_Check.php">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3><b>ADMIN FUNCTIONALITY</h3></legend>
					
					<a href="../php/toaddstudent.php">1. Add Student</a><br>
					<hr>
					<a href="../php/toaddteacher.php">2. Add Teacher</a><br>
					<hr>
					<a href="../php/toaddemployee.php">3. Add Employee</a><br>
					<hr>
					<a href="../php/toshowstudent.php">4. View Student List</a><br>
					<hr>
					<a href="../php/toshowteacher.php">5. View Teacher List</a><br>
					<hr>
					<a href="../php/toshowemployee.php">6. View Employee List
					</a><br>
					<hr>
					<a href="../php/toviewresult.php">7. View Result</a><br>
					<hr>
					<a href="../php/toviewnotice.php">8.View Notice</a><br>
					<hr>
					<a href="../php/touploadnotice.php">9.Upload Notice</a>
					<br>
					<hr>
					<a href="../php/toprofile.php">10.Profile</a><br>
					<hr>
					<a href="../php/toupdatesalarydate.php">11.Employee Salary date Update</a><br>
					<hr>
					<a href="../php/toviewsalarydate.php">12.Employee Salary date Show</a><br>
					<hr>
					<a href="../php/logout.php">logout</a> 
					
					<br>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
</body>
</html>