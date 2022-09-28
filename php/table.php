<?php
	include("connection.php");



		$sql = "SELECT * FROM animelist";
    
    	if ($result = mysqli_query($conn, $sql)) {
        	if ($result->num_rows > 0){
            	while($row = $result->fetch_assoc()){
                	echo "<tr id='row".$row["ID"]."'>";
                	echo "<td style='display:none;'>".$row["ID"]."</td>
					<td>". $row["title"]."</td>
					<td>".$row["engTitle"]."</td>
					<td>".$row["seasons"]."</td>
					<td>".$row["eps"]."</td>
					<td>".$row["status"]."</td>
					<td>".$row["dateStarted"]."</td>
					<td>".$row["dateFinished"]."</td>
					<td><button class='btn' onclick=\"updateEntity('row".$row["ID"]."')\"> 
					<b>Update</b> </button> ".
					"<button class='btn' onclick=\"deleteEntity('row".$row["ID"]."')\"> 
					<b>Delete</b> </button></td>";
        			echo "</tr>";
            }
        }
         
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    ?>