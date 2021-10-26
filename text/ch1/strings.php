<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Strings</title>
</head>
<body>
  <!-- Script 1.6 - strings.php -->
  <p>This is standard HTML.</p>
 <?php
 	// Create the variables:
	$firstName = 'Facsimile';
	$lastName = 'Nimely';
	$book = 'My Autobiography';
	$city = 'Kent';
	$state = 'Washington';
	$addy = $city . ', ' . $state; 
	
	
	
	// Print the values:
	echo "<p>The book <em>$book</em>
		was written by $firstName $lastName in $addy.</p>"
  ?>
  
  
</body>
</html>