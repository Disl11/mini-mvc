<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product update</title>
</head>

<body>

    <h1>Modifier le produit : <?= htmlspecialchars($product->title) ?></h1>


    <form action="index.php?page=product&action=saveProduct" method="post">
        <label for="">Nouveau nom produit :</label>
        <br>
        <input type="hidden" name="id" value="<?= htmlspecialchars($product->id) ?>">
        <input type="text" name="title">
        <br><br>
        <label for="">Nouveau prix:</label>
        <br>
        <input type="number" name="price">
        <br><br>
        <label for="">Nouvelle description :</label>
        <br>
        <input type="text" name="description">
        <br><br>
        <button type="submit" name="saveProduct">Enregistrer</button>
    </form>



</body>

</html>