<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Feedback</title>
</head>
<body>
<?php #Script 2.2 - handle_form.php

    if(!empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email'])){
        echo "<p>Thank you, <strong>{$_POST['name']}</strong>,
        for the following comments:</p>
        <pre>{$_POST['comments']}</pre>
        <p>We will reply to you at <em>{$_POST['email']}</em>.</p>";
    } else {
        echo '<p>Please go back and fill out the form again.';
    }

    $states = [
            'IA' => 'Iowa',
        'MD' => 'Maryland'
    ];

    foreach($states as $initial => $state){
        echo "$initial is $state";
    }


//// validate the form
//if (!empty($_REQUEST['name'])) {
//    $name = $_REQUEST['name'];
//} else {
//    $name = NULL;
//    echo '<p class ="error"> You forgot to enter your name</p>';
//}
//
//// validate the email
//if (!empty($_REQUEST['email'])) {
//    $email = $_REQUEST['email'];
//} else {
//    $email = NULL;
//    echo '<p class = "error">You forgot to enter your email address!</p>';
//}
//
//// validate comments
//if (!empty($_REQUEST['comments'])) {
//    $comments = $_REQUEST['comments'];
//} else {
//    $comments = NULL;
//    echo '<p class = "error">You forgot to enter your comment!</p>';
//}
//
//// validate gender
//if (isset($_REQUEST['gender'])) {
//    $gender = $_REQUEST['gender'];
//    if ($gender == 'M') {
//        $greetings = '<p><strong>Good day, Sir!</strong></p>';
//    } elseif ($gender == 'F') {
//        $greetings = '<p><strong>Good day, Madam!</strong></p>';
//    } else {
//        $gender = NULL;
//        echo '<p class = "error">Gender should be either "M" or "F"!</p>';
//    }
//} else {
//    $gender = NULL;
//    echo '<p class = "error">You forgot to select your gender!</p>';
//}
//
//// everything is OK, print message
//if ($name && $gender && $email && $comments) {
//    echo "<p>Thank you, <strong>$name
//        </strong>, for the following
//        comments:</p>
//      <pre>$comments</pre>
//      <p>We will reply to you at <em>$email
//        </em>.</p>\n";
//
//    echo $greetings;
//} else {
//    echo '<p class="error">Please go back
//        and fill out the form again.</p>';
//}



//// Create a shorthand for the form data:
//$name = $_REQUEST['name'];
//$email = $_REQUEST['email'];
//$comments = $_REQUEST['comments'];
///* Not used:
// $_Request['age']
//$_Request['gender']
//$_Request['submit']
// */
//
//// create the gender variable
//if(isset($_REQUEST['gender'])){
//    $gender = $_REQUEST['gender'];
//} else{
//    $gender = NULL;
//}
//
//// Print the submitted information:
//echo "<p>Thank you, <strong>$name</strong>, for the following
//comments:</p>
//<pre>$comments</pre>
//<p>We will reply to you at <em>$email</em>.</p>\n";
//
//// print a message based on the gender value
//if($gender == 'M'){
//    echo '<p><strong>Good day, Sir!</strong></p>';
//} elseif ($gender == 'F'){
//    echo '<p><strong>Good day, Madam!</strong>';
//} else {
//    echo '<p><strong>You forgot to enter your gender!</strong></p>';
//}

?>
</body>
</html>

