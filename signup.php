<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kritika_nail_studio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $name = $conn->real_escape_string($_POST['name']);
    $address = $conn->real_escape_string($_POST['address']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone_number = $conn->real_escape_string($_POST['phone_number']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO user (name, address, email, phone_number, gender, password) VALUES ('$name', '$address', '$email', '$phone_number', '$gender', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        header("Location: home.html"); // Redirect to home page after registration
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


$conn->close();
?>
