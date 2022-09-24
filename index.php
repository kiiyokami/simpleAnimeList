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
<button class="btn" onclick="updateEntity()"> <b>Update</b> </button>
<button class="btn" onclick="deleteEntity()"> <b>Delete</b> </button>
</div>


<div class="form-popup" id="createNewEntity">
	<form action="php/newEntity.php" class="form-container" method="post">
		<label for="title">Title: <label>
			<input type="text" id="title" name="title"><br>
		<label for="engTitle">English Title: <label>
			<input type="text" id="engTitle" name="engTitle"><br>
		<label for="seasons">Seasons: <label>
			<input type="number" id="seasons" name="seasons" min="1" max="99"><br>
		<label for="eps">Episodes: <label>
				<input type="number" id="eps" name="eps" min="1" max="9999"><br>
		<label for="status">Status: <label>
			<select name="status" id="status" name="status">
				<option value="inProgress">In Progress</option>
				<option value="finished">Finished</option>
				<option value="dropped">Dropped</option>
				<option value="notStarted">Not Started</option>
			</select><br>
		<label for="rating">Rating (1-10): <label>
			<input type="number" id="rating" name="rating" min="1" max="10" maxlength="2"><br>
		<label for="dateStarted">Date Started: <label>
			<input type="date" id="dateStarted" name="dateStarted"><br>
		<label for="dateFinished">Date Finished: <label>
			<input type="date" id="dateFinished" name="dateFinished"><br>
		<button type="submit">Submit</button>
	</form>
</div>
<div class="form-popup" id="searchEntity">
</div>
<div class="form-popup" id="updateEntity">
	<form action="/php/updateEntity.php" class="form-container">
	<label for="title">Title: <label>
			<input type="text" id="title"><br>
		<label for="engTitle">English Title: <label>
			<input type="text" id="engTitle"><br>
		<label for="seasons">Seasons: <label>
			<input type="number" id="seasons" min="1" max="99"><br>
		<label for="eps">Episodes: <label>
				<input type="number" id="eps" min="1" max="9999"><br>
		<label for="status">Status: <label>
			<select name="status" id="status">
				<option value="inProgress">In Progress</option>
				<option value="finished">Finished</option>
				<option value="dropped">Dropped</option>
				<option value="notStarted">Not Started</option>
			</select><br>
		<label for="rating">Rating (1-10): <label>
			<input type="number" id="rating" min="1" max="10" maxlength="2"><br>
		<label for="dateStarted">Date Started: <label>
			<input type="date" id="dateStarted"><br>
		<label for="dateFinished">Date Finished: <label>
			<input type="date" id="dateFinished"><br>
		<button type="submit">Update</button>
	</form>
</div>
<div class="form-popup" id="deleteEntity">
	<form action="php/deleteEntity.php" class="form-container">
		<label for="id">ID: <label>
			<input type="text" id="id" readonly><br>
		<label for="title">Title: <label>
			<input type="text" id="title" disabled><br>
		<label for="engTitle">English Title: <label>
			<input type="text" id="engTitle" disabled><br>
		<label for="seasons">Seasons: <label>
			<input type="number" id="seasons" min="1" max="99" disabled><br>
		<label for="eps">Episodes: <label>
			<input type="number" id="eps" min="1" max="9999" disabled><br>
		<label for="status">Status: <label>
			<input type="text" id="status" disabled><br>
		<label for="rating">Rating (1-10): <label>
			<input type="number" id="rating" min="1" max="10" maxlength="2" disabled><br>
		<label for="dateStarted">Date Started: <label>
			<input type="date" id="dateStarted" disabled><br>
		<label for="dateFinished">Date Finished: <label>
			<input type="date" id="dateFinished" disabled><br>
		<button type="submit">Delete</button>
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
			<th>Rating</th>
			<th>Date Started</th>
			<th>Date Finished</th>
		</tr>
	</thead>
	<tbody>
	<?php include 'php/table.php'; ?>
	</tbody>
</div>

<script src="js/form.js">
</script>
</body>
</html>