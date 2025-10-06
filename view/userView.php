<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($users as $user):  ?>
            <li>
                <p>Utilisateur <?= htmlspecialchars($user->name, ENT_QUOTES, 'UTF-8') ?></p>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>