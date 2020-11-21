<?php
	require('headerprofile.php');
	session_start();
	
	$img = "";
	if(isset($_SESSION['img'])){
		$img = $_SESSION['img'];
	}
?>


<!DOCTYPE html>
<html>
<head></head>
<body>
<center>
<h1>Admin Profile</h1>
<table id="1" width=800px border=0>
<tr><th align=left width=150px>Name:</th><td> Md.Junaed Kiron Tiash</td><td rowspan=10 width=160px><img src="jkformal.png" width=160px/></td></tr>
<tr><th align=left>Profession:</th><td>Student</td></tr>
<tr><th align=left>Nationality:</th><td>Bangladeshi</td></tr>
<tr><th align=left>Date of Birth:</th><td>06 November, 1997</td></tr>
<tr><th align=left>Religion:</th><td>Muslim</td></tr>
<tr><th align=left>Martial Status:</th><td>Unmarried</td></tr>
<tr><th align=left>Present Address:</th><td>168,Road:8,Block:G,Boshundhara.</td></tr>
<tr><th align=left>Parmanent Address:</th><td>Mandarpur,B.Baria.</td></tr>
<tr><th align=left>Mobile Number:</th><td>01795895080</td></tr>
<tr><th align=left>Email:</th><td>jktiash123@gmail.com</td></tr>
</table>

<table id="2" border=1 width=800px>
<tr><th colspan=5><h1>Key QUALIFICATION</h1></th></tr>
<tr><th width=100px>Qualifications</th><th>institution</th><th>Session</th><th>GPA</th><th>Board</th></tr>
<tr><td>J.S.C.</td><td>Adamjee Cantonment Public School</td><td>11</td><td>5.00</td><td>Dhaka</td></tr>
<tr><td>S.S.C.</td><td>Adamjee Cantonment Public School</td><td>12-13</td><td>5.00</td><td>Dhaka</td></tr>
<tr><td>H.H.C.</td><td>Adamjee Cantonment College</td><td>14-16</td><td>5.00</td><td>Dhaka</td></tr>


</table>
</center>
<center><a href="../php/logout.php">logout</a></center>
</body>

</html>