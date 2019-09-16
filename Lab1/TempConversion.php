<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content = "text/html; charset = utf-8"/>
    <title>Temp Conversion</title>
</head>

<body>
    <?php
      $F = array();
      $C;
      $X;
      for($X = 0; $X <= 100; $X++) 
      {
          $F[$X] = $X;
      }

      for($X = 0; $X <= 100; $X++) 
      {
          $C = ($F[$X] - 32) * (5/9);
          $C = round($C, $percision = 1);
          echo "<p>$F[$X] degrees Fahrenheit converted to Celsius is $C degrees</p>";
      }
    ?>
</body>

</html>