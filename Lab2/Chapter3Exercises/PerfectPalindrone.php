
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Perfect Palindrone Validation</title>
</head>

<body>
  <h1>Perfect Palindrone Validation<h1><hr />
  <?php
    $stringOne = "hannah";
    if(strrev($stringOne) == $stringOne) 
    {
        echo "<p>The string " . $stringOne . " is a palindrome.</p>";
    }
    else 
    {
        echo "<p>The string " . $stringOne . " is not a palindrome.</p>";
    }
  ?>
</body>

</html>
