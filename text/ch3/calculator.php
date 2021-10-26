<?php

// this function create a radio button, takes on argument
// and also makes the button "sticky"
function create_radio($value, $name = 'gallon_price'){

    // start the element
    echo '<input type="radio" name="' . $name . '" value="' . $value . '"';

    // check for stickiness
    if(isset($_POST[$name]) && ($_POST[$name] == $value)){
        echo ' checked = "checked"';
    }

    // complete the element
    echo "> $value";
} // end of create_gallon_radio() function.


// this function calculates the cost of the trip, takes three args,
// and returns the total price
function calculate_trip_cost($miles, $mpg, $ppg){

    // get the number of gallons
    $gallons = $miles/$mpg;

    // cost of gallons
    $dollars = $gallons * $ppg;

    // return the formatted cost
    return number_format($dollars, 2);
} // end of calculate_trip_cost() function



$page_title = 'Trip Cost Calculator';
include ('includes/header.html');

// check for submission
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // minimal form validation
    if(isset($_POST['distance'], $_POST['gallon_price'], $_POST['efficiency'])
    && is_numeric($_POST['distance']) && is_numeric($_POST['gallon_price'])
    && is_numeric($_POST['efficiency'])){

        // calculate the result
        $gallons = $_POST['distance'] / $_POST['efficiency'];
        $dollars = $gallons * $_POST['gallon_price'];
        $hours = $_POST['distance'] / 65;

        // print the result
        echo '<div class="page-header"><h1>Total Estimated Cost</h1></div>
            <p>The total cost of driving ' . $_POST['distance'] . ' miles, averaging '
            . $_POST['efficiency'] . ' per gallon, is $' . number_format ($dollars, 2) . '
        . If you have an average of 65 miles per hour, the trip will take approximately ' .
 number_format($hours, 2) . ' hours.</p>';
    } else { // invalid submitted value

        echo '<div class="page-header"><h1>Error!</h1></div>
        <p class="text-danger">Please enter a valid distance, price per gallon, and fuel
        efficiency.</p>';
    }
}
?>

<div class="page-header"><h1>Trip Cost Calculator</h1></div>
<form action="calculator.php" method="post">
    <p>Distance (in miles):
        <input type="number" name="distance"
               value="<?php if (isset($_POST['distance'])) echo $_POST['distance']?>"></p>
    <p>Ave. price per gallon:
        <?php
        create_radio('3.00');
        create_radio('3.50');
        create_radio('4.00');
        ?>
    </p>

    <p>
        Fuel Efficiency:
        <select name="efficiency">
            <option value="10">Terrible</option>
            <option value="20">Decent</option>
            <option value="30">Very Good</option>
            <option value="40">Outstanding</option>
        </select>
    </p>
    <input type="submit" name="submit" value="Calculate!">
</form>

<?php include ('includes/footer.html'); ?>