<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Existing Bug Reports</title>
</head>

<body>
  <h1>Current Bugs</h1><hr />
  <p>Select one of the reports below to update the contents:</p>
  <?php 
    $fileArray = scandir("../Exercise5-4");
    foreach($fileArray as $file) 
    {
        echo "<a href = '$file'>$file</a>";
    }
  ?>
</body>

</html>
