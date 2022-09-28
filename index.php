<!DOCTYPE HTML>
<html>
<head>
<title>AniList</title>
<link rel="stylesheet" href="css/index.css">
</head>
<body>
<nav>
<b>AniList</b>
</nav>

<div class="center">
<button class="btn" onclick="addEntity()"> <b>Add to List</b> </button>
</div>

<div class="form-popup" id="createNewEntity">
	<form action="php/newEntity.php" class="form-container" method="post">
	<span class="close" id="close">&times;</span>
	<h2 style="text-align: center;">Add Entity</h2>
	<br>
		<label for="title">Title<label><br>
			<input type="text" id="title" name="title"><br>
		<label for="engTitle">English Title<label><br>
			<input type="text" id="engTitle" name="engTitle"><br>
		<label for="seasons">Seasons<label><br>
			<input type="number" id="seasons" name="seasons" min="1" max="99"><br>
		<label for="eps">Episodes<label><br>
				<input type="number" id="eps" name="eps" min="1" max="9999"><br>
		<label for="status">Status<label><br>
			<select name="status" id="status" name="status">
				<option value="In Progress">In Progress</option>
				<option value="Finished">Finished</option>
				<option value="Dropped">Dropped</option>
				<option value="Not Started">Not Started</option>
			</select><br>
		<label for="dateStarted">Date Started<label><br>
			<input type="date" id="dateStarted" name="dateStarted"><br>
		<label for="dateFinished">Date Finished<label><br>
			<input type="date" id="dateFinished" name="dateFinished"><br>
		<button type="submit" class="btn">Submit</button>
		</form>
</div>
<div class="form-popup" id="updateEntity">
	<form action="php/updateEntity.php" class="form-container" method="post">
	<span class="close" id="shut">&times;</span>
	<h2 style="text-align: center;">Update Entity</h2>
		<input style="display:none;" id="cID" name="ID" readonly><br>
	<label for="title">Title<label><br>
		<input type="text" id="cTitle" name="title"><br>
	<label for="engTitle">English Title<label><br>
		<input type="text" id="cengTitle" name="engTitle"><br>
	<label for="seasons">Seasons<label><br>
		<input type="number" id="cseasons" name="seasons" min="1" max="99"><br>
	<label for="eps">Episodes<label><br>
			<input type="number" id="ceps" name="eps" min="1" max="9999"><br>
	<label for="status">Status<label><br>
		<select name="status" id="cstatus">
			<option value="In Progress">In Progress</option>
			<option value="Finished">Finished</option>
			<option value="Dropped">Dropped</option>
			<option value="Not Started">Not Started</option>
		</select><br>
	<label for="dateStarted">Date Started<label><br>
		<input type="date" id="cdateStarted" name="dateStarted"><br>
	<label for="dateFinished">Date Finished<label><br>
		<input type="date" id="cdateFinished" name="dateFinished"><br>
	<button type="submit" class="btn">Update</button>
	</form>
</div>
<div class="form-popup" id="deleteEntity">
	<form action="php/deleteEntity.php" class="form-container" method="post">
		<span class="close" id="down">&times;</span>
		<h2 style="text-align: center;">Delete Entity</h2>
		<input style="display:none;" id="dID" name="id"><br>
		<p id="deletequery"></p>
		<button type="submit" class="btn">Delete</button>
	</form>
</div>

<div>
	<table>
		<thead>
			<tr>
				<th>Title</th>
				<th>English Title</th>
				<th>Seasons</th>
				<th>Episodes</th>
				<th>Status</th>
				<th>Date Started</th>
				<th>Date Finished</th>
				<th>Modify</th>
			</tr>
		</thead>
		<tbody id="theList">
		<?php include 'php/table.php'; ?>
		</tbody>
	</table>
</div>
<script src="js/query.js"></script>
<script src="js/form.js"></script>

</body>
</html>