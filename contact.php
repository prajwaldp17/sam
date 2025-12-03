<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "sweet_treats";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data safely
    $name    = $conn->real_escape_string($_POST['name']);
    $email   = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert into database
    $sql = "INSERT INTO contact_messages (name, email, message)
            VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Thank you! Your message has been sent successfully.</h2>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
