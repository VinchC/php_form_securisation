<?php
// var_dump($_GET);

// echo $_GET['user_name'];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de réclamation</title>

    <link rel="stylesheet" href="formstyle.css">
</head>

<body>

    <header>
        <h1>Formulaire</h1>
    </header>

    <main>
        <p class="title">Formulaire de contact</p>

        <form action="thanks.php" method="post">
            <div>
                <label for="first_name">Prénom :</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>

            <div>
                <label for="last_name">Nom :</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>

            <div>
                <label for="user_email">Courriel :</label>
                <input type="email" id="user_email" name="user_email" required>
            </div>

            <div>
                <label for="user_phone">Téléphone :</label>
                <input type="tel" id="user_phone" name="user_phone" pattern="[0-9]{10}" required>
            </div>

            <div>
                <label for="mail_topic">Choisissez votre contact</label>
                <select name="mail_topic" id="mail_topic" required>
                    <option value="information">Information</option>
                    <option value="reclamation">Réclamation</option>
                    <option value="autre">Autre</option>
                </select>
            </div>

            <div>
                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>
            </div>

            <div class="button">
                <button type="submit">Envoyer votre message</button>
            </div>
        </form>
    </main>

</body>

</html>