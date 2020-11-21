<?php
    include('headerviewresult.php');
?>


<!DOCTYPE html>
<html>
    <head>
        <title> Show Result </title>
    </head>
    <body>

        <form action="" method="">

            <table align="center" border="1" style="border-collapse: collapse;" width="35%">

                <tr>
    
                    <td align="center" colspan=3> <h2>Show Result</h2> </td>
    
                </tr>
    
                <tr height="40px">
    
                    <td style="padding-left: 5px;"> 
                        <?php 
                        $myfile = fopen("../php/result.txt", "r") or die("Unable to open file!");
                        // Output one line until end-of-file
                        while(!feof($myfile)) {
                           // print_r(explode('|',$myfile,0));
                          // print (explode("|",$myfile,0));
                         $row= fgets($myfile) . "<br>";
                        // echo $row;
                         $piece=(explode('|', $row));
                        // print_r($piece);   
                            for ($i=0; $i < count($piece) ; $i++) { 
                                echo $piece[$i]." ";
                            }
                                        }
                            fclose($myfile);
                        ?>
                        </td>
    
                </tr>
    
               
               
    
            </table>
<center><a href="../php/logout.php">logout</a></center>

        </form>

        
    </body>
</html>