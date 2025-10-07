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
                <a href="index.php?page=product&action=deleteProduct&id=<?= $product->id ?>">Supprimer</a>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>