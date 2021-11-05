<?php

if (isset($_POST['name'])) {
	echo "Hello" . $_POST['name'] . "!";

if (isset($_POST['surname'])) {
	echo "Hello Mr." . $_POST['surname'] . "!";
	}	
}

var_dump($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Doc3</title>
</head>

<body>

<form action="index.php" method="post">
	<label>Name :</label>
	<input type="text" name="name">
	<label>Surname :</label>
	<input type="text" name="surname">
	<input type="submit" value="submit">
</form>

</body>
</html>
