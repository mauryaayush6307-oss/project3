<?php


$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$city = $_POST["city"];


if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("INSERT INTO register (name, email, password, city) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $password, $city);

if ($stmt->execute()) {
    echo "Registration Successful";
} else {
    echo "Error: " . $stmt->error;
}


$stmt->close();
$conn->close();

?>