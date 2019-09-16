<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content = "text/html; charset = utf-8"/>
    <title>ConditionalScript</title>
</head>

<body>
    <?php
        $IntVariable = 75; //($IntVariable >100) ? $Result = '$IntVariable is greater than 100' : $Result = '$IntVariable is less than or equal to 100'; echo "<p>$Result</p>"; - old code
        $Result;
        if($IntVariable <= 100) {
            $Result = '$IntVariable is less than or equal to 100';
        }
        else {
            $Result = '$IntVariable is greater than 100';
        }

        echo "<p>$Result</p>";
    ?>
</body>

</html>