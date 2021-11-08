<?php

//const BR = '<br/>';


function bonjour($jour) {
	if ($jour === true) {
		echo "Bonjour";
	}
	
	else if ($jour === false) {
		echo "Bonsoir";
	}

}

bonjour(true); //ou bonjour(false);

?>