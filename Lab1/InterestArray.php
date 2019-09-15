<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta content = "text/html; charset = utf-8"/>
    <title>Interest Array</title>
</head>

<body>
    <?php
        
        $InterestRate1 = 0.725;
        $InterestRate2 = 0.750;
        $InterestRate3 = 0.775;
        $InterestRate4 = 0.800;
        $InterestRate5 = 0.825;
        $InterestRate6 = 0.850;
        $InterestRate7 = 0.875;
        $RatesArray = array($InterestRate1, $InterestRate2, $InterestRate3, $InterestRate4, $InterestRate5, $InterestRate6, $InterestRate7);
        $Count = 0;

        do {
            echo $RatesArray[$Count], "<br />";
            $Count++;
        }
        while ($Count < 7);

    ?>
</body>

</html>
