<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content = "text/html; charset = utf-8"/>
    <title>DaysArray</title>
</head>

<body>
    <?php
        $Days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        $Count = 0;
        echo "<p>The days of the week in English are:" , "<br />";
        do 
        {
            echo $Days[$Count], "<br />";
            $Count++;
        }
        while($Count < 7);

        $Days[0] = "Dimanche";
        $Days[1] = "Lundi";
        $Days[2] = "Mardi";
        $Days[3] = "Mercredi";
        $Days[4] = "Jeudi";
        $Days[5] = "Vendridi";
        $Days[6] = "Samedi";
        $CountF = 0;
        echo "<p>The days of the week in French are:", "<br />";
        do 
        {
            echo $Days[$CountF], "<br />";
            $CountF++;
        }
        while($CountF < 7);
    ?>
</body>

</html>