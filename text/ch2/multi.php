<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multidimensional Arrays</title>
</head>
<body>
<p>
    Some North Americans States, Province, and Territories:
</p>
<?php
// create an array
$mexico =[
    'YU' => 'Yucatan',
    'BC' => 'Baja California',
    'OA' => 'Oaxaca'
];

// another array
$us = [
    'MD' => 'Maryland',
    'IL' => 'Pennsylvania',
    'IA' => 'Iowa',
    'WA' => 'Washington'
];

// an array
$canada = [
    'QC' => 'Quebec',
    'AB' => 'Alberta',
    'NT' => 'Northwest Territories',
    'YT' => 'Yukon',
    'PE' => 'Prince Edward Island'
];

// combined arrays
$n_america = [
    'Mexico' => $mexico,
    'United States' => $us,
    'Canada' => $canada
];

// loop through the countries
foreach ($n_america as $country => $list){
    // print a heading
    echo "<h2>$country</h2><ul>";

    // print each state, province, or territory
    foreach ($list as $k => $v) {
        echo "<li>$k - $v</li>\n";
    }

    // close the list
    echo "</ul>";
}

?>
</body>
</html>
