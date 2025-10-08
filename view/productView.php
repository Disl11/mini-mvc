<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productViews</title>
</head>

<body>
    <h1>Les produits</h1>
    <a href="index.php?page=user&action=displayAllUsers">page user</a>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <?php echo htmlspecialchars($product->title, ENT_QUOTES, 'UTF-8') . " : "; ?>
                <?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8') . "€"; ?>
                <a href="index.php?page=product&action=detail&id=<?= $product->id; ?>">discription produit</a>

                <form method="post" action="index.php?page=product&action=deleteProduct&id">
                    <button type="submit" name="id" value="<?= $product->id ?>">Supprimer</button>
                </form>

            </li>
        <?php endforeach ?>
    </ul>

    <h2>Ajouter un produit :</h2>

    <form action="index.php?page=product&action=addProduct" method="post">

        <label for="">Titre du produit:</label>
        <br>
        <input type="text" name="title">
        <br><br>

        <label for="">Prix :</label>
        <br>
        <input type="text" name="price">
        <br><br>

        <label for="">Description:</label>
        <br>
        <input type="text" name="description">
        <br><br>

        <button type="submit" name="addProduct">Ajouter nouveau Produits</button>

    </form>
</body>

</html>