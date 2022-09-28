<?php
include("connection.php");

  $id = $title = $engTitle = $seasons = $eps = $status = $dateStarted = $dateFinished = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["ID"];
    $title = $_POST["title"];
	$engTitle = $_POST["engTitle"];
	$seasons = $_POST["seasons"];
	$eps = $_POST["eps"];
	$status = $_POST["status"];
	$dateStarted = $_POST["dateStarted"];
	$dateFinished = $_POST["dateFinished"];
  }

  $sql = "UPDATE animelist
        SET title='$title', engTitle='$engTitle', seasons='$seasons',eps='$eps',status='$status',dateStarted='$dateStarted', dateFinished='$dateFinished'
    WHERE ID='$id';
    ";

if ($conn->query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: ../index.php');
?>
