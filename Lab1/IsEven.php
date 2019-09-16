<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content = "text/html; charset = utf-8"/>
    <title>IsEven</title>
</head>

<body>
    <?php
     $EvenNum = 2.2;
     $OddNum = 5;
     $NotNum = "Cow";
     $EvenCheck;
     $IsNumber;

     if(is_numeric($OddNum) == 1) 
     {
         $IsNumber = "Yes";
     }
     else 
     {
         $IsNumber = "No";
     }


     echo "<p>Is $OddNum a number? ----> ", $IsNumber;
    
    if($OddNum%2) 
    {
        $EvenCheck = "No";
    }
    else if($OddNum%1) 
    {
        $EvenCheck = "Yes";
    }

    if(is_numeric($NotNum) == 1) 
     {
         $IsNumber = "Yes";
     }
     else 
     {
         $IsNumber = "No";
     }

    echo "<p>Is $OddNum an even number> ----> ", $EvenCheck, "<br />",
        "<p>Is $NotNum a number? ----> ", $IsNumber, "<br />";

    if(is_numeric(floor($EvenNum)) == 1)
     {
         $IsNumber = "Yes";
     }
     else 
     {
         $IsNumber = "No";
     }
    
    echo "<p>IS$EvenNum a number? ----> ", $IsNumber;
    
    if($EvenNum%2) 
    {
        $EvenCheck = "No";
    }
    else if ($EvenNum%1) 
    {
        $EvenCheck = "Yes";
    }

    echo "<p>Is $EvenNum an even number? ----> ", $EvenCheck;

    ?>
</body>

</html>