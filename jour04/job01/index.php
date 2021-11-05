<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Doc</title>
</head>

<body>

<form action="index.php" method="get">
	<label>Name :</label>
	<input type="text" name="name">
	<label>Surname :</label>
	<input type="text" name="surname">
	<input type="submit" value="submit">
</form>

</body>
</html>

<?php

if (isset($_GET['name'])) {
	echo "Hello" . $_GET['name'] . "!";

if (isset($_GET['surname'])) {
	echo "Hello Mr." . $_GET['surname'] . "!";
	}	
}

var_dump($_GET['name'] ['surname']);

?>