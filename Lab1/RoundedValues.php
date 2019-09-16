<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content = "text/html; charset = utf-8"/>
    <title> RoundedValues </title>
</head>

<body>
    <?php
        $Num1 = 2.6;
        $Num2 = 10.5;

        echo "<p>$Num1 rounded to the nearest whole number is:", round($Num1), "<br />",
            "<p>$Num2 rounded down to the nearest whole number is:", floor($Num2), "<br />",
            "<p>$Num2 rounded up to the nearest whole number is:", ceil($Num2); 
    ?>
</body>

</html>