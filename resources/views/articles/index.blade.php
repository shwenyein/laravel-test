<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article List</title>
</head>
<body>
    <h1> Article List</h1>
    <ul>
        <?php foreach($persons as $person): ?>
        <li><?php echo $person['id']."->".$person['title']  ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>