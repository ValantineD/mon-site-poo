<h1> <?= $title ?> </h1>

<form action="" method="post">

    <div>
        <label for="title" id="title">Title</label>
        <input type="text" name="title" id="title" placeholder="Saisir le nom du Produit">
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" style="resize: none"></textarea>
    </div>

    <div>
        <label for="price" id="price">Price</label>
        <input type="number" name="price" id="price" placeholder="Saisir le prix du Produit">
    </div>

    <button type="submit">Soumettre</button>

</form>
