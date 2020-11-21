<?php


    if(isset($_POST['submit']))
    {   
        //$myfile = fopen('users.txt', 'a');
         //fwrite($myfile,"..");
        //fclose($myfile);
        //$flagid=false;
       
        
        if(empty($_POST["sdate"]))
        {
            echo "Name field is empty! Please enter your name";
        }
       
            else
            {
               
               $myfile = fopen('sdate.txt', 'a');
                fwrite($myfile, $_POST["sdate"] . "\r\n");
                fclose($myfile);
                echo "Adding done!!";
                

                    
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