<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u_name = $_POST["name"];
    $u_email = $_POST["email"];
    $u_subject = $_POST["subject"];
    $u_message = $_POST["message"];

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO udetails (u_name,u_email,u_subject,u_message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $u_name, $u_email, $u_subject, $u_message);

    if ($stmt->execute() === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}
$conn->close();
