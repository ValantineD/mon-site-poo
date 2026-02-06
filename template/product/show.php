<h1><?= $title ?></h1>

<body>

<img src="<?= $product->getPicture() ?>" alt="" width="500">

    <div>
        <h2>Prix:</h2>
        <p><?= $product->getPrice() ?> € </p>
    </div>

    <div>
        <h2>Description:</h2>
        <p><?= $product->getDescription() ?> </p>

    </div>
</body>
