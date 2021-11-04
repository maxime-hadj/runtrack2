<?php

$i=array(200, 204, 173, 98, 171, 404, 459);
$x=0;
	
	while (isset($i[$x])) {
	if ($i[$x] %2==0) {
		echo $i[$x] . "est pair <br/>";
	 	
	 }
	 else {
	 	echo $i[$x] . "est impair <br/>";
	 } 

	$x++;
}

?>