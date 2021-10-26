<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calender</title>
</head>
<body>
<form action="calender.php" method="post">

<?php
// this script makes three pull down menus for an
// HTML form: months, days, years

// make the months array
$months = [1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
'September', 'October', 'November', 'December'];

// days and years array
$days = range(1, 31);
//$years = range(2017, 2027);
for($year = 2017; $year <= 2027; $year++){
    echo "<option value=\"$year\">$year</option>\n";
}

// month pull-down menu
echo '<select name = "months">';
foreach ($months as $key => $value){
    echo "<option value = \"$key\"> $value</option>\n";
}
echo '</select>';

// days pull-down menu
echo '<select name="day">';
foreach ($days as $day){
    echo "<option value = \"$day\">$day</option>\n";
}
echo '</select>';

// year pull-down menu
//echo '<select name ="years">';
//foreach ($years as $year){
//    echo "<option value = \"$year\">$year</option>\n";
//}
//echo '</select>';


?>
</form>
</body>
</html>
