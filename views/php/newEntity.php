<?php
include("connection.php");

  $title = $engTitle = $seasons = $eps = $status = $dateStarted = $dateFinished = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
	$engTitle = $_POST["engTitle"];
	$seasons = $_POST["seasons"];
	$eps = $_POST["eps"];
	$status = $_POST["status"];
	$dateStarted = $_POST["dateStarted"];
	$dateFinished = $_POST["dateFinished"];
  }
$sql = "INSERT INTO animelist (title, engTitle, seasons, eps, status, dateStarted, dateFinished)
VALUES ('$title', '$engTitle','$seasons','$eps','$status','$dateStarted','$dateFinished')";

if ($conn->query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: ../index.php')
?>
