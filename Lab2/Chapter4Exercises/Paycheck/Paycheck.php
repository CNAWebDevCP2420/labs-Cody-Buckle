<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>PaycheckPhp</title>
</head>

<body>
  <?php
    function displayError ($fieldName, $errorMsg) 
    {
        global $errorCount;
        echo "Error for \"$fieldName\": $errorMsg<br />\n";
        ++errorCount; 
    }

    function validateField ($data, $fieldName) 
    {
        global $errorCount;
        global $retval;
        if(empty($data)) 
        {
            displayError($fieldName, "This field is required.");
            

        }
        else 
        {
            
            $retval = $data;
            if($retval < 0) 
            {
                displayError($fieldName, "must be above 0.");


            }
            if(preg_match("/^[a-zA-Z]+$/i", $retval) == 1) 
            {
                displayError($fieldName, "Input must be a number.");
            }
        }
        
        return $retval;
    }

    function CalulcatePay($data1, $data2) 
    {
        $pay = $data1;
        $hoursWorked = $data2;
        global $total;
        
        if($hoursWorked > 40) 
        {
            $pay = $data1 * 1.5;
            $total = $pay * $hoursWorked;
        }
        else 
        {
            $total = $pay * $hoursWorked;
        }
        
        return $total;
    }

    $errorCount = 0;
    $workerPay = validateField($_POST['wage'], "wage");
    $workerHours = validateField($_POST['hours'], "hours");
    

    if($errorCount > 0) 
    {
        echo "Please use the \"Back\" button to re-enter the data. <br />\n";
    }
    else 
    {
        echo "The total earnings for " . $workerHours . " hours at " . $workerPay . " is: " . CalculatePay($workerPay, $workerHours);
        
    }
  ?>
</body>

</html>