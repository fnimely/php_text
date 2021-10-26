<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Numbers</title>
</head>
<body>
  <!-- Script 1.2 - numbers.php -->
  <p>This is standard HTML.</p>
 <?php
 	// set the variables:
	$quantity = 21; // buying widgets
	$price = 420.69;
	$taxrate = .13; // 13% sales tax
	
	// calculate total:
	$total = $quantity * $price;
	$total = $total + ($total * $taxrate); // total plus tax
	
	// format the total
	$total = number_format($total, 2);
	
	// print the result
	/*echo '<p>You are purchasing <strong>' . $quantity . '</strong> widget(s)
		at a cost of <strong>$' . $price . '</strong> each. With tax, the toal
		comes to <strong>$' . $total . '</strong>.</p>';*/
		
		
	// print the result using double quotation mark
	echo "<h3> Using double quotation marks:</h3>";
	echo "<p> You are purchasing <strong>$quantity</strong>
		widget(s) at a cost of <strong>$$price</strong> each.
		With tax, the total comes to <strong>\$$total</strong>.</p>\n";
		
	// print the the result using single quotation
	echo '<h3> Using double quotation marks:</h3>';
	echo '<p> You are purchasing <strong>$quantity</strong>
		widget(s) at a cost of <strong>\$$price</strong> each.
		With tax, the total comes to <strong>\$$total</strong>.</p>\n'
  ?>
  
  
</body>
</html>