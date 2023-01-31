<?php
include("connection.php");

$id = $_POST['id'];

$sql = "DELETE FROM animelist WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: ../index.php')
?>