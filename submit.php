<?php
$mysqli = new mysqli("localhost", "root", "zyx@ZY19960323", "foodblog");

if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$name = $_POST['name'];
$message = $_POST['message'];

$stmt = $mysqli->prepare("INSERT INTO comments (name, message) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $message);
$stmt->execute();

echo "Comment submitted! <a href='view.php'>View Comments</a>";

$stmt->close();
$mysqli->close();
?>
