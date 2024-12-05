<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $birthday = $_POST["birthday"];
    
    // Display the submitted data
    echo "<h1>Thanks for soliciting!</h1>";
    echo "<p>First name: $fname</p>";
    echo "<p>Last name: $lname</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Birthday: $birthday</p>";
} else {
    // Handle cases where the form wasn't submitted
    echo "<p>Form not submitted. Please go back and submit the form.</p>";
}
?>
</body>
</html>