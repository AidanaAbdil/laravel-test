<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awards</title>
</head>
<body>
    <h1>My Awards</h1>


    <ul>
        <?php foreach ($awards as $award) :?>
            <li><?= $award ?></li>
        <?php endforeach ?>
    </ul>
    
</body>
</html>