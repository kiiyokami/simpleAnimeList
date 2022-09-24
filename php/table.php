<?php
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbname = "aniList";

	$conn = new mysqli($servername, $username, $password, $dbname);


		$sql = "SELECT title, engTitle, seasons, eps, status, rating, dateStarted, dateFinished FROM animelist";
    
    	if ($result = mysqli_query($conn, $sql)) {
        	if ($result->num_rows > 0){
            	while($row = $result->fetch_assoc()){
                	echo "<tr>";
                	echo "<td>". $row["title"]."</td><td>".$row["engTitle"]."</td><td>".$row["seasons"]."</td><td>".$row["eps"]."</td><td>".$row["status"]."</td><td>".$row["rating"]."</td><td>".$row["dateStarted"]."</td><td>".$row["dateFinished"]."</td>";
                	echo "</tr>";
            }
        }
         
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    ?>