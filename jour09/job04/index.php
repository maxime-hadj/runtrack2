<?php
    $bdd = mysqli_connect('localhost','root','','jour08');
    mysqli_set_charset($bdd , 'utf8');
    $requete = mysqli_query($bdd,"select * FROM etudiants WHERE prenom
     LIKE 'T%' ");
    $etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang= "en">
    <head>
        <title>Tableau</title>
    </head>
    <body>
        <table>
  <thead align="left" style="display: table-header-group">
  <tr>
     <th>Nom</th>
     <th>Prénom</th>
     <th>Naissance</th>
     <th>Sexe</th>
     <th>Email</th>
  </tr>
  </thead>
<tbody>


<?php 
foreach ($etudiants as $etudiant) :?>
  
  <tr>
        
        <td> <?php echo $etudiant ['nom']; ?></td>
        <td> <?php echo $etudiant ['prenom']; ?></td>
        <td> <?php echo $etudiant ['naissance']; ?></td>
        <td> <?php echo $etudiant ['sexe']; ?></td>
        <td> <?php echo $etudiant ['email']; ?></td>
  </tr>

<style>
table,
td {
    border: 2px solid #333;
}

thead,
tfoot {
    background-color: #333;
    color: #fff;
}
</style>

<?php endforeach;?>

</tbody>
</table>
</html>


