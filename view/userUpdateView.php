<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update user</title>
</head>

<body>

    <h1>Modifier user <?= htmlspecialchars($user->name) ?> </h1>

    <form action="index.php?page=user&action=saveUser" method="post">
        <label for="">Nouveau nom utilisateur :</label>
        <br>
        <input type="hidden" name="id" value="<?= htmlspecialchars($user->id) ?>">
        <input type="text" name="name">
        <br><br>
        <button type="submit" name="saveUser">Enregistrer</button>
    </form>

</body>

</html>