
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Validate Local Address</title>
</head>

<body>
  <h1>Validate Local Address</h1><hr />
  <?php
    $email = array("jsmith123@example.org", "john.smith.mail@example.org", "john.smith@example.org", "john.smith@example", "jsmith.123@mail.example.org");
    foreach($email as $emailAddress) 
    {
        echo "The email address &ldquo;" . $emailAddress . " &rdquo; ";
        if(preg_match("/^(([A-Za-z]+\d+) |" . "([A-Za-z]+\.[A-Za-z]+))" . "@((mail\.)?)example\.org$/i", $emailAddress)==1) 
        {
            echo " is a valid email address.";
        }
        else 
        {
            echo " is not a valid email address.";
        }

    }
  ?>
</body>

</html>
