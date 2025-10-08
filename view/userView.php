<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Liste des utilisateurs</h1>
    <a href="index.php?page=product">page produit</a>
    <ul>
        <?php foreach ($users as $user):  ?>
            <li>
                <p>Utilisateur : <?= htmlspecialchars($user->name, ENT_QUOTES, 'UTF-8') ?></p>

                <form method="post" action="index.php?page=user&action=deleteUser&id">
                    <button type="submit" name="deleteUser" value="<?= $user->id ?>">Supprimer</button>
                </form>
                <form method="post" action="index.php?page=user&action=updateUser&id">
                    <button type="submit" name="updateUser" value="<? $user->id ?>">Modifier</button>
                </form>
            </li>
        <?php endforeach ?>
    </ul>


    <h2>Ajouter un utilisateur</h2>

    <form action="index.php?page=user&action=addUser" method="post">
        <label for="">Nom utilisateur:</label>
        <br>
        <input type="text" name="name">
        <br><br>
        <button type="submit" name="addUser">Ajouter utilisateur</button>
    </form>
</body>

</html>