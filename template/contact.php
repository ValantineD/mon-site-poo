<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>contact</title>
</head>
<body>

<h1>
    <?= $title ?>
</h1>

<form action="" method="post">

    <div>
        <label for="email" id="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Saisir votre Email">
    </div>

    <div>
        <label for="subject">Subject</label>
        <select name="subject" id="subject">
            <option value="refund">Remboursement</option>
            <option value="help">Aide</option>
            <option value="problem">Problème</option>
        </select>
    </div>

    <div>
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10" style="resize: none"></textarea>
    </div>

    <button type="submit">Soumettre</button>

</form>

</body>
</html>
