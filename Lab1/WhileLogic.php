<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content = "text/html; charset = utf-8"/>
    <title>While Logic</title>
</head>

<body>
    <?php
        $Count=0;
        $Numbers = array(); 
        while ($Count <= 100) 
        { 
            $Numbers[$Count] = $Count; 
            $Count++; 
            foreach ($Numbers as $CurNum) 
            { 
                echo "<p>$CurNum</p>";
            } 
        }
        //Output is not proper, numbers are repeated, couldn't figure this one out!
    ?>
</body>

</html>