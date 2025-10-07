<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deatail produit</title>
</head>

<body>

    <h2>Details produit</h2>
    <p>Nom produit : <?= htmlspecialchars($product->title) ?></p>
    <p>Prix : <?= htmlspecialchars($product->price) ?></p>
    <p>Description : <?= htmlspecialchars($product->description) ?></p>


    <a href="index.php?page=productList">retour liste des produit</a>


</body>

</html>