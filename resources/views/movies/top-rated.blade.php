<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>20 Top Movies</h1>

    <ul>
        <?php foreach ($movies as $movie) :?>
            <li><?= $movie->name . ' - Votes '. $movie->votes_nr ?></li>

        <?php endforeach ?>
    </ul>

   
    <h2>Person Details</h2>
    <p>ID: <?= $person->id ?></p>
    <p>Name: <?= $person->name ?></p>
 

</body>
</html>