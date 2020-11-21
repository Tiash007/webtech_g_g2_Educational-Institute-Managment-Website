<?php
    include('headeraddstudent.php');
?>


<!DOCTYPE html>
<html>
    <head>
        <title> Add Student </title>
    </head>
    <body>

        <form action="../php/addstudentFormValidation.php" method="POST">

            <table align="center" border="1" style="border-collapse: collapse;" width="35%">

                <tr>
    
                    <td align="center" colspan=3> <h2>ADD STUDENT</h2> </td>
    
                </tr>
    
                <tr height="40px">
    
                    <td style="padding-left: 5px;"> <label for="name"> Name </td>
                    <td style="padding-left: 5px;"> <input type="text" id="name" name="name" > </td>
                    <td width="30px"></td>
    
                </tr>
    
                <tr height = 40px>
    
                    <td style="padding-left: 5px;"> <label for="id"> ID </label> </td>
                    <td style="padding-left: 5px;"> <input type="text" id="id" name="id" > </td>
                    <td width="30px"></td>
                </tr>

                <tr height = 40px>
    
                    <td style="padding-left: 5px;"> <label for="password">Password </label> </td>
                    <td style="padding-left: 5px;"> <input type="password" name="password"> </td>
                    <td width="30px"></td>
                </tr>
    
                <tr height = 40px>
    
                    <td style="padding-left: 5px;">
                        <label> Gender </label>
                    </td>
    
                    <td style="padding-left: 5px;">
    
                        <input type="radio" name="Genders" value="Male" id="genderOption1">
                        <label for="genderOption1"> Male </label>
                        <input type="radio" name="Genders" value="Female" id="genderOption2">
                        <label for="genderOption2"> Female </label>
                        <input type="radio" name="Genders" value="Others" id="genderOption3">
                        <label for="genderOption3"> Others </label>
    
                    </td>
    
                    <td width="30px"></td>
    
                </tr>
    
                <tr height = 40px>
    
                    <td style="padding-left: 5px;">
                        <label> Date of Birth </label>
                    </td>
    
                    <td style="padding-left: 5px;"> 
                        <input type="text" name="day" size="1" > <strong><big>/</big></strong>
                        <input type="text" name="month" size="1" > <strong><big>/</big></strong>
                        <input type="text" name="year" size="2" > 
                        <label> (dd/mm/yyyy) </label>
                    </td>
    
                    <td width="30px"></td>
    
                </tr>
    
                <tr height = 40px>
    
                    <td style="padding-left: 5px;"> 
                        <label for="bloodGroups"> Blood Group </label> 
                    </td>
    
                    <td style="padding-left: 5px;"> 
                        <select name="bloodGroup" id="bloodGroups">
                            <option value=""></option>
                            <option value="A+"> A+ </option>
                            <option value="A-"> A- </option>
                            <option value="B+"> B+ </option>
                            <option value="B-"> B- </option>
                            <option value="AB+"> AB+ </option>
                            <option value="AB-"> AB- </option>
                            <option value="O+"> O+ </option>
                            <option value="O-"> O- </option>
                        </select> 
                    </td>
    
                    <td width="30px"></td>
    
                </tr>
    
                <tr height = 40px>
    
                    <td style="padding-left: 5px;">
                        <legend> Degree </legend>
                    </td>
    
                    <td style="padding-left: 5px;">
                        <input type="checkbox" name="SSC" value="SSC" id="Degree1">
                        <label for="Degree1"> SSC </label>
                        <input type="checkbox" name="HSC" value="HSC" id="Degree2">
                        <label for="Degree2"> HSC </label>
                        <input type="checkbox" name="BSc" value="BSc" id="Degree3">
                        <label for="Degree3"> BSc </label>
                    </td>
    
                    <td width="30px"></td>
    
                </tr>
    
                <tr height = 40px>
    
                    <td style="padding-left: 5px;"> <label for="picture"> Photo </label> </td>
                    <td colspan="2" style="padding-left: 5px;"> <input type="file" name="picture" id="picture" > </td>
    
                </tr>
    
                <tr height = 40px>
                    <td colspan="3"></td>
                </tr>
    
                <tr height = 40px>
    
                    <td colspan="3" align="right">
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </td>
    
                </tr>
               
    
            </table>
<center><a href="../php/logout.php">logout</a></center>

        </form>

        
    </body>
</html>