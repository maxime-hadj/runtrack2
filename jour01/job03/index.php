<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
</head>
<body>

    <?php
        $str="texte"; //string texte
        $int=30; //variable nombre
        $float=1.50; //variable nombre float
        $bool=true; //variable true or false
    ?>

    <table>
        <thead>
            <th class="table">type</th>
            <th class="table">name</th>
            <th class="table">value</th>
        </thead>
        

        <tbody>
            <tr>
                <td class="table"><?php echo gettype($str); ?></td>
                <td class="table"><?php echo $str; ?></td>
                <td class="table"> Variable chaîne de charactères.</td>
            </tr>
            <tr>
                <td class="table"><?php echo gettype($int); ?></td>
                <td class="table"><?php echo $int; ?></td>
                <td class="table">Variable avec nom entier.</td>
            </tr>
            <tr>
                <td class="table"><?php echo gettype($float); ?></td>
                <td class="table"><?php echo $float; ?></td>
                <td class="table">Variable float / nombre.</td>
            </tr>
            <tr>
                <td class="table"><?php echo gettype($bool); ?></td>
                <td class="table"><?php echo $bool; ?></td>
                <td class="table">Variable bool true / false.</td>
            </tr>
        </tbody>
    </table>
</body>
</html>