<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productViews</title>
</head>

<body>
    <h1>Les produits</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <?php echo htmlspecialchars($product->getTitle(), ENT_QUOTES, 'UTF-8') . " : "; ?>
                <?php echo htmlspecialchars($product->getPrice(), ENT_QUOTES, 'UTF-8') . "€"; ?>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>