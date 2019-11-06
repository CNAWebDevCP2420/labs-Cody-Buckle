
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Submit Bug Report</title>
</head>

<body>
  <?php 

  
    if(empty($_POST['prodName']) || empty($_POST['prodVer']) || empty($_POST['hardware']) || empty($_POST['os']) || empty($_POST['freq']) || empty($_POST['pSolutions'])) 
    {
        echo "All fields must be filled, please click the browsers refresh button to re-enter the form.";
    }
    else 
    {
        $prodName = addslashes($_POST['prodName']);
        $prodVer = addslashes($_POST['prodVer']);
        $hardware = addslashes($_POST['hardware']);
        $os = addslashes($_POST['os']);
        $freq = addslashes($_POST['freq']);
        $fileName = $prodName . "BugReport.txt";
        $pSolutions = addslashes($_POST['pSolutions']);

            $bugFile = fopen($fileName, "ab");

            if(is_writeable($fileName)) 
            {
                if(fwrite($bugFile, "Product Name: " . $prodName . "\r\nProduct Version: " . $prodVer . "\r\nHardware Type: " . $hardware . "\r\nOperating System: " . $os .
                    "\r\nFrequency of Occurence: " . $freq . "\r\nProposed Solution: " . $pSolutions . "\r\n<hr />" )) 
                {
                echo 'Report Sucessfully submitted! Thank you!';
                ?>
                <hr />
                <a href = "BugReportsHome.html"><input type = "button" name = "return" value = "return" /></a>
                <?php 
                }
                else 
                {
                    echo 'Report Unsucessfull, please try again.';
                }
            }
            else 
            {
                echo 'Report Unsucessful, please try again.';
            }
        
    }
  ?>
</body>

</html>
