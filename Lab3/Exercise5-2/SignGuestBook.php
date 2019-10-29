<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Sign Guest Book</title>
</head>

<body>
  <?php 
    if(empty($_POST['first_name']) || empty($_POST['last_name'])) 
    {
        echo "<p>You must enter the first and last name. Click your browser's back button to return to the Guest Book.</p>\n";
    }
    else 
    {
        $firstName = addslashes($_POST['first_name']);
        $lastName = addslashes($_POST['last_name']);
        $guestBook = fopen("guestbook.txt", "ab");

        if(is_writeable("guestbook.txt")) 
        {
            if(fwrite($guestBook, $lastName . ", " . $firstName . "\n")) 
            {
                echo "<p>Thank you for signing our Guest Book!</p>\n";
            }
            else 
            {
                echo "<p>Cannot add your name to the Guest Book.</p>\n";
            }
        }
        else 
        {
            echo "<p>Cannot write to the file.</p>\n";
            fclose($guestBook);
        }
    }
  ?>
</body>

</html>
