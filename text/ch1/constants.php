<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Constants</title>
</head>
<body>
  <!-- Script 1.2 - numbers.php -->
  <p>This is standard HTML.</p>
 <?php
 	// set a date as constant
	define('TODAY', 'September 15, 2021');
	
	// print a message using predefined constant and a TODAY constant
	echo '<p> Today is ' . TODAY . '.<br>This server is running version
		<strong>' . PHP_VERSION . '</strong> of PHP on the <strong>' . PHP_OS . 
		'</strong> operating system.</p>';
  ?>
  
  
</body>
</html>