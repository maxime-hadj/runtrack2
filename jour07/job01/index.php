<?php
session_start();

if(isset($_GET['reset'])){
    session_unset();
}

if(!(isset($_SESSION['nbvisites']))){
    $_SESSION['nbvisites'] = 0; 
}
else{
    $_SESSION['nbvisites'] ++;
}
echo "Vous avez visité cette page ".$_SESSION['nbvisites']." fois.";


?>
<form method="GET" action="index.php">
<button type="submit" name="reset" value="submit">Reset</button>
</form>