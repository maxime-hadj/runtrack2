<?php

if (isset($_GET['name'])) {
	echo "Hello" . $_GET['name'] . "!";

if (isset($_GET['surname'])) {
	echo "Hello Mr." . $_GET['surname'] . "!";
	}	
}

var_dump($_GET);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Doc2</title>
</head>

<body>

<form action="index.php" method="get">
	<label>Name :</label>
	<input type="text" name="name">
	<label>Surname :</label>
	<input type="text" name="surname">
	<input type="submit" value="submit">
</form>

<table>
	<tr>
		<th>Name</th>
		<th>Surname</th>
	</tr>
	<tr>
		<td><?php echo $_GET['name']?></td>
		<td><?php echo $_GET['surname']?></td>
	</tr>
</table>

<style>

td {
    border: 1px solid #333;
}

th {
	border: 3px solid #333;
}



</style>


</body>
</html>