<?php
    $bdd = mysqli_connect('localhost','root','','jour08');
    mysqli_set_charset($bdd , 'utf8');
    $requete = mysqli_query($bdd,"select * FROM salles ");
    $salles = mysqli_fetch_all($requete, MYSQLI_ASSOC);

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
     <th>ID étage</th>
     <th>Capacité</th>
  </tr>
  </thead>
<tbody>


<?php 
foreach ($salles as $salle) :?>
  
  <tr>
        
        <td> <?php echo $salle ['nom']; ?></td>
        <td> <?php echo $salle ['id_etage']; ?></td>
        <td> <?php echo $salle ['capacite']; ?></td>
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