<?php
    echo "<table>
            <tr>
                <th>Variable Name</th>
                <th>Value</th>
            </tr>";
    
    global $_REQUEST;
    $FormValues = array($_REQUEST['firstName'], $_REQUEST['lastName'], $_REQUEST['email'], $_REQUEST['phone'], $_REQUEST['age']);
?>

