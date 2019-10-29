<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Bowling Registration</title>
</head>

<body>
  <?php 
    if(empty($_POST['name']) || empty($_POST['age']) || empty($_POST['avg'])) 
    {
        echo "<p> All fields must be filled out, click the browser's back button to return to the registration form."; 
    }
    else 
    {
        $name = addslashes($_POST['name']);
        $age = addslashes($_POST['age']);
        $average = addslashes($_POST['avg']);
        $BowlingReg = fopen("bowlingsignup.txt", "ab");

        if(is_writeable("bowlingsignup.txt")) 
        {
            if(fwrite($BowlingReg, $name . ",\r\n" . $age . ",\r\n" . $average . "\r\n\r\n")) 
            {
                echo "<p>Registration Complete!</p>\r\n";
            }
            else 
            {
                echo "<p>Registration Incomplete!</p>";
            }
        }
        else 
        {
            echo "Sorry could not write to the file. Please try again."; 
        }
    }
  ?>
</body>

</html>
