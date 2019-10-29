<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Hit Counter</title>
</head>

<body>
  <?php 
    $counterFile = "hitcount.txt";

    if(file_exists($counterFile)) 
    {
        $hits = file_get_contents($counterFile);
        ++$hits;
    }
    else 
    {
        $hits = 1;
    }

    echo "<h1>There have been $hits hits to this page</h1>\n";
    if(file_put_contents($counterFile, $hits)) 
    {
        echo "<p>The counter file has been updated</p>\n";
    }
  ?>
</body>

</html>
