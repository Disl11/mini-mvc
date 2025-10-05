<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productViews</title>
</head>

<body>
    <h1>Le produit <?= htmlspecialchars($product->getTitle(), ENT_QUOTES, 'UTF-8'); ?></h1>
    <p>Prix <?= htmlspecialchars($product->getPrice(), ENT_QUOTES, 'UTF-8') ?></p>
</body>

</html>