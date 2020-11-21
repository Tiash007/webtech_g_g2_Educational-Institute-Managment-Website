<?php
    include('headeruploadnotice.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<center>
<form method="POST" action="../php/validationnoticeupload.php">
    <table border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <fieldset>
                    <legend><h2><b>Upload Notice</h2></legend>
                    
                    <textarea name="notice" rows="10" cols="30"></textarea>
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