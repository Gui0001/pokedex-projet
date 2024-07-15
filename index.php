<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poké</title>

    <?php include 'pokedex.php' ?> 
</head>
<body>
    <h1>Pokédex</h1>
    <ul>Liste de Pokémonstres :<br>
        <?php foreach ($results as $pokemon) {
            echo $pokemon['name'] . "<br>";
        } ?>

    </ul>
</body>
</html>