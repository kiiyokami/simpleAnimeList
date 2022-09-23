<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "aniList";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  $title = $engTitle = $seasons = $eps = $status = $rating = $dateStarted = $dateFinished = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$id = 1;
    $title = $_POST["title"];
	$engTitle = $_POST["engTitle"];
	$seasons = $_POST["seasons"];
	$eps = $_POST["seasons"];
	$status = $_POST["status"];
	$rating = $_POST["rating"];
	$dateStarted = $_POST["dateStarted"];
	$dateFinished = $_POST["dateFinished"];
  }
$id = 
$sql = "INSERT INTO animelist (title, engTitle, seasons, eps, status, rating, dateStarted, dateFinished)
VALUES ('$title', '$engTitle','$seasons','$eps','$status','$rating','$dateStarted','$dateFinished')";

if ($conn->query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: ../index.php')
?>
