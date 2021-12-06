<?php
require_once "config.php";
ini_set('error_reporting', E_ALL);

session_start();

/*if(isset($_SESSION['user'])){
    header("location: index.php");
}*/

if(isset($_REQUEST['inscription_btn'])){
    
    /*echo "<pre>";
        print_r($_REQUEST);
    echo "</pre>";*/
    
    $_login = filter_var($_REQUEST['login'],FILTER_SANITIZE_STRING);
    $_prenom = filter_var($_REQUEST['prenom'],FILTER_SANITIZE_STRING);
    $_nom = filter_var($_REQUEST['nom'],FILTER_SANITIZE_STRING);
    $_password = strip_tags($_REQUEST['password']);

    if(empty($_login)){
        $errorMsg[0][] = 'Login requis';
    }
    if(empty($_prenom)){
        $errorMsg[1][] = 'Prénom requis';
    }
    if(empty($_nom)){
        $errorMsg[2][] = 'Nom requis';
    }
    if(empty($_password)){
        $errorMsg[3][] = 'Password requis';
    }

    if(empty($errorMsg)){
        
        $select_stmt = $db->prepare("SELECT login,prenom,nom FROM utilisateurs WHERE login = :login" );
        var_dump($_login);
        $select_stmt->bindValue(':login',$_login);
        $select_stmt->execute();
        $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
        
        if(isset($row['login']) && $row['login'] == $_login){
            $errorMsg[0][] = "Ce nom d'utilisateur existe déjà, veuillez en choisir un autre";
        }
        else{
            $hashed_password = password_hash($_password, PASSWORD_DEFAULT);
            $insert_stmt = $db->prepare("INSERT INTO utilisateurs (login,prenom,nom,password) VALUES (:login,:prenom,:nom,:password)");
            $insert_stmt->bindValue(':login', $_login);
            $insert_stmt->bindValue(':prenom',$_prenom);
            $insert_stmt->bindValue(':nom', $_nom);
            $insert_stmt->bindValue('password',$hashed_password);
        
            $insert_stmt->execute();
                header("location: connexion.php");   
        }
        }
    }
?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<style>
        body { 
            font: 14px sans-serif;
            background-color: slategrey;
            font-family: monospace; 
}
        .wrapper{ width: 360px; padding: 20px; 
}
        
        .logo {
            float: left;
            color: white;
            padding: 6px;
            text-decoration: none;
            font-size: 14px;
            line-height: 22px;
            font-family: monospace;
            cursor: pointer;
}
        
    </style>
    <title>Register</title>
</head>
    <body>
        <div class="header">
        <a class="logo" href="index.php">Hotel California</a>
	    <div class="container">
		<form action="inscription.php" method="post">
        <div class="mb-3">
                
        <?php
        if(isset($errorMsg[0])){
            foreach($errorMsg[0] as $loginErrors){
                echo "<p class='small text-danger'>".$loginErrors."</p>";
            }
        }
        ?>
        
                <label for="login" class="form-label">Login</label>
				<input type="text" name="login" class="form-control" placeholder="">
			    </div>
        
        <div class="mb-3">        
                
        <?php
        if(isset($errorMsg[1])){
            foreach($errorMsg[1] as $prenomErrors){
                echo "<p class='small text-danger'>".$prenomErrors."</p>";
            }
        }
        ?>   
        
                <label for="prenom" class="form-label">Prénom</label>
				<input type="text" name="prenom" class="form-control" placeholder="">
			    </div>
        
        <div class="mb-3">
		
        <?php
        if(isset($errorMsg[2])){
            foreach($errorMsg[2] as $nomErrors){
                echo "<p class='small text-danger'>".$nomErrors."</p>";
            }
        }
        ?>   
        
                <label for="nom" class="form-label">Nom</label>
				<input type="text" name="nom" class="form-control" placeholder="">
			    </div>
			
        <div class="mb-3">
				
        <?php
        if(isset($errorMsg[3])){
            foreach($errorMsg[3] as $passwordErrors){
                echo "<p class='small text-danger'>".$passwordErrors."</p>";
            }
        }
        ?>       

                <label for="password" class="form-label">Password</label>
				<input type="password" name="password" class="form-control" placeholder="">
				</div>
			
                <button type="submit" name="inscription_btn" class="btn btn-primary">Enregistrer</button>
		    </form>
		    Vous possédez déjà un compte ? <a class="connexion" href="connexion.php">Connectez-vous !</a>
	    </div>
    </body>
</html>