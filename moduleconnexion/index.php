<?php
require_once "config.php";
ini_set('error_reporting', E_ALL);

session_start();
//var_dump($_SESSION);
if (isset($_POST['logout']))
    {
      session_destroy();
      header('location:index.php');
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
        .main {
            display:flex;
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

        .header-right {
            font-size: 14px;
            line-height: 22px;
            text-align: right;
}

        .image{
            display:flex;
            justify-content:center;
            margin-top:5%;
}
        .welcome {
            width:100%;
            flex-wrap:wrap;
}
        .co {
            display:flex;
            justify-content:center;
            width:100%;
}
        form {
            margin-left:2%;
        }

    </style>
    <title>Index</title>
</head>
    <header>
    <div class="header">
    <a class="logo" href="index.php">Hotel California</a>
    <div class="header-right">
    <?php
    if(!isset($_SESSION['user'])){
            echo "<a class='active' href='inscription.php'>S'inscrire </a>";
        }else{
            echo "";
        }
    if(!isset($_SESSION['user'])){
            echo "<a class='active' href='connexion.php'>Se connecter</a>";
        }else{
            echo "";
        }
        if(isset($_SESSION['user'])){
            echo "<a class='active' href='profil.php'>Profil </a>";
        }else{
            echo "";
        }
        ?>
        <a class="active" href="admin.php">Espace admin</a> 
    </div>
</div>
        
        <body>
            <main>

<div class="welcome">
    <div class="co">
    <h1><?php if(isset($_SESSION['user']) && $_SESSION['user'] != ''){
    echo "Bienvenue " . $_SESSION['user']['login'];} ?></h1>           
<?php if(isset($_SESSION['user'])){
    echo "<form method='post'>
    <button type='submit' name='logout' class='btn btn-danger'>Logout</button>  
        </form>";
    }

?>
    </div>
    </div>
<div class="image">
    <img height=400px length=500px src="https://www.rollingstone.fr/wp-content/uploads/2020/05/33583999_so-e1588883699818.jpg">
</div>
<div class="column">
    <ul><li><a href="https://github.com/prenom-nom/module-connexion">Repo Github</a></li></ul>
</div>                    
            </main>
        </body>
    </header>
</html>