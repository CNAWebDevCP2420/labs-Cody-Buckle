
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Two Trains</title>
</head>

<body>
  <?php
    $displayForm = TRUE;
    $number = "";

    if(isset($_POST['Submit'])) 
    {
        $number = $_POST['number'];
        if(is_numeric($number)) 
        {
            $displayForm = FALSE;
        }
        else 
        {
            echo "<p>You need to enter a numeric value.</p>\n";
            $displayForm = TRUE;
        }
    }

    if($displayForm == TRUE) 
    {
        
    }
  ?>
      
</body>

</html>
