
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Password Strength Validation</title>
</head>

<body>
  <h1>Password Strength Validation</h1><hr />
  <?php
    $Passwords = array("chiCken1$2", "bearsbeets123", "Lilah1994*", "PASSW0RD", "N0t!ong", "Tetley%94", "No Spac3s*", "PewPewPew#", "badPass#*", "G0oDpaS$");
    $passCount = 0;

    foreach($Passwords as $pass) 
    {
        echo "<p>The password " . $pass . ":</p>";
        if(preg_match("/^\s$/", $pass)) 
        {
            echo "<p> is weak. Spaces are not permitted.</p>";
            echo "<p>" . $passCount . "/5 tests were passed.";
        }
        else 
        {
            $passCount++;
            if(!preg_match("/^[a-z]$/", $pass)) 
            {
                echo "<p> is weak. No lowercase characters detected.</p>";
                echo "<p>" . $passCount . "/5 tests were passed.</p>";
            }
            else 
            {
                $passCount++;
                if(!preg_match("/^[A-Z]$", $pass)) 
                {
                    echo "<p> is weak. No uppercase characters detected.</p>";
                    echo "<p>" . $passCount  . "/5 tests were passed.</p>";
                }
                else
                {
                    $passCount++;
                    if(!preg_match("/^[0-9]$", $pass)) 
                    {
                        echo "<p> is weak. No numbers detected.</p>";
                        echo "<p>" . $passCount . "/5 tests were passed.</p>";
                    }
                    else
                    {
                        $passCount++;
                        if(!preg_match("/^[^0-9A-Za-z]$", $pass)) 
                        {
                            echo "<p> is weak. No special characters detected.(!@#$%^&*)</p>";
                            echo "<p>" . $passCount . " /5 tests were passed.</p>";
                        }
                        else
                        {
                            $passCount++;
                            echo "<p> is strong.</p>";
                            echo "<p>" . $passCount . "/5 tests were passed.</p>";
                        }
                    }
                }
            }
        }
    }
  ?>
</body>

</html>
