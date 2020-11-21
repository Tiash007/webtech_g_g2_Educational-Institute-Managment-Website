<?php
    include('headerupdatesaldate.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<center>
<form method="POST" action="../php/validationsalaryupdate.php">
    <table border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <fieldset>
                    <legend><h2><b>Update Salary Date</h2></legend>
                    
                    <textarea name="sdate" rows="10" cols="30"></textarea>
                    <br><br>
                    <input type="submit" name="submit" value="Upload">
                    
                    <br>
                </fieldset>
            </td>
        </tr>                                
    </table>
</form>
</center>
<center><a href="../php/logout.php">logout</a></center>
</body>
</html>