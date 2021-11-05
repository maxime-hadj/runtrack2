<?php

if (isset($_POST['LOGIN']) && isset($_POST['PASSWORD'])) {


if ($_POST['LOGIN'] == 'John' && $_POST['PASSWORD'] == 'Rambo') {
	echo "C'est pas ma guerre";
}


else {
	echo "Votre pire cauchemar";
}


}

//var_dump ($_POST)
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Doc5</title>
</head>

<body>

<form method="post">
	<label>LOGIN :</label>
	<input type="text" name="LOGIN">
	<label>PASSWORD :</label>
	<input type="text" name="PASSWORD">
	<input type="submit" value="submit">
</form>

</body>
</html>