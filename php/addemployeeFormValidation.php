<?php


    if(isset($_POST['submit']))
    {   
        //$myfile = fopen('users.txt', 'a');
         //fwrite($myfile,"..");
        //fclose($myfile);
        //$flagid=false;
       
        
        if(empty($_POST["name"]))
        {
            echo "Name field is empty! Please enter your name";
        }
        else if(empty($_POST["id"]))
        {
            echo "ID field is empty! Please enter your ID!";
        }
        
        else if(empty($_POST["password"]))
        {
            echo "password field is empty! Please enter your password!";
        }
        else if(!isValidGender())
        {
            echo "Gender is not selected";
        }
        else if(empty($_POST["day"]))
        {
            echo "Day field of DOB is empty! Please enter your DOB properly!";
        }
        else if(empty($_POST["month"]))
        {
            echo "Month field of DOB is empty! Please enter your DOB properly!";
        }
        else if(empty($_POST["year"]))
        {
            echo "Year field of DOB is empty! Please enter your DOB properly!";
        }
        else if( !isValidBloodGroup($_POST["bloodGroup"]) )
        {
            echo "Blood group is not selected";
        }
        else if( !isValidDegree())
        {
            echo "Select at least one of the degrees";
        }
        else if(empty($_POST["picture"]))
        {
            echo "Picture field is empty! Please upload a picture!";
        }
        else
        {


            if(!isValidName($_POST["name"]))
            {
                echo "Invalid user name";
            }
            //else if(!isValidEmail($_POST["id"]))
            //{
              //  echo "Invalid email address!";
            //}
            else if( !isValidDOB($_POST["day"], $_POST["month"], $_POST["year"]) )
            {
                echo "Invalid DOB";
            }
            else
            {
                if( isset($_POST["SSC"]) && !isset($_POST["HSC"]) && !isset($_POST["BSc"]))
                {
                    $degree="SSC";
                }
                else if( !isset($_POST["SSC"]) && isset($_POST["HSC"]) && !isset($_POST["BSc"]))
                {
                    $degree="HSC";
                }
                else if( !isset($_POST["SSC"]) && !isset($_POST["HSC"]) && isset($_POST["BSc"]))
                {
                   $degree="BSc";
                }
                else if( isset($_POST["SSC"]) && isset($_POST["HSC"]) && !isset($_POST["BSc"]))
                {
                    $degree="SSC & HSC";
                }
                else if( isset($_POST["SSC"]) && isset($_POST["HSC"]) && isset($_POST["BSc"]))
                {
                    $degree="SSC,HSC & BSc";
                }
                else if( !isset($_POST["SSC"]) && isset($_POST["HSC"]) && isset($_POST["BSc"]))
                {
                    $degree="HSC & BSc";
                }
                else
                {
                    $degree="SSC & BSc";
                }
                       
               $myfile = fopen('employee.txt', 'a');
                fwrite($myfile,"=>Name:".$_POST["name"] ."|"."ID:". $_POST["id"] ."|"."Gender:".$_POST["Genders"]."|"."Date of Birth:".$_POST["day"]."/".$_POST["month"]."/".$_POST["year"]."|"."bloodGroup:".$_POST["bloodGroup"] ."|"."Degree:".$degree. "\r\n");
                fclose($myfile);
                 $myfile = fopen('employeeidpass.txt', 'a');
                fwrite($myfile,  $_POST["id"] ."|".$_POST["password"]. "\r\n");
                fclose($myfile);
                echo "Adding done!!";
                

                    
                }
               
                
                
            }


        }



        

        
    


    function isValidName( $name )
    {
        if(str_word_count($name) >= 2  && ctype_alpha($name[0]) &&  ctype_alpha(str_replace(" ", "", $name)) )
        { 
            return true;
        }
        else if(str_word_count(str_replace(".", " ",$name)) >= 2 && ctype_alpha($name[0]) &&  ctype_alpha(str_replace(".", "", $name)) && $name[strlen($name)-1] != "." )
        {
            return true;
        }
        else if(str_word_count(str_replace("-", " ",$name)) >= 2 && ctype_alpha($name[0]) &&  ctype_alpha(str_replace("-", "", $name)) && $name[strlen($name)-1] != "-" )
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    function isValidEmail( $email)
    {

        $atSign = strpos($email, "@");
        $lastDot = strripos($email, ".");


        if($atSign > 0 && $email[$atSign+1] != "." && substr_count($email, "@") == 1 && $lastDot > $atSign+1 && !strpos($email, " ") && !strpos($email, "..") && strlen($email) > ($lastDot+1))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function isValidGender()
    {
        if(isset($_POST["Genders"]))
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    function isValidDOB($day, $month, $year)
    {


        if( $day >= 1 && $day <=31 && $month >= 1 && $month <= 12 && $year >= 1900 && $year <= 2016)
        {

            if( ($month == 4 || $month == 6 ||  $month == 9 || $month == 11 ) && $day <= 30 )
            {
                return true;
                
            }
            else if( ($month == 1 || $month == 3 ||  $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12 ) && $day <= 31 )
            {
                return true;

            }
            else if( $month == 2 && $day <= 28 )
            {
                return true;

            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }


    }


    function isValidBloodGroup( $bloodGroup )
    {
        
        if( !empty($bloodGroup) )
        {
            return true;
        }
        else
        {
            return false;
        }

    }


    function isValidDegree()
    {

        if( isset($_POST["SSC"]) || isset($_POST["HSC"])|| isset($_POST["BSc"]) )
        {
            return true;
        }
        else
        {
            return false;
        }

    }



?>