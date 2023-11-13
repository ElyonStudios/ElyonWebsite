<?php
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Password = $_POST['Password'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'elyon studios');
if ($conn->connect_error) {
  die('Connection Failed: ' . $conn->connect_error);
} else {
  $stmt = $conn->prepare("INSERT INTO registration (FirstName, LastName, Email, Phone, Password) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("ssiss", $FirstName, $LastName, $Email, $Phone, $Password);
  $stmt->execute();
  echo "Registration Successful...";
  $stmt->close();
  $conn->close();
}
?>
