<?php

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = array_map('trim', $_POST);

    if (!isset($data['mail_topic']) || empty($data['mail_topic']))
        $errors[] = "Le sujet est obligatoire.";


    if ((!isset($data['first_name'])) || (empty($data['first_name']))) {
        $errors[] = "Le prénom est obligatoire.";
    }


    if ((!isset($data['last_name'])) || (empty($data['last_name']))) {
        $errors[] = "Le nom de famille est obligatoire.";
    }


    if ((!isset($data['user_email'])) || !filter_var($data['user_email'], FILTER_VALIDATE_EMAIL) || empty($data['user_email'])) {
        $errors[] = "L'adresse mail est obligatoire et doit être renseigné au bon format.";
    }


    if (!isset($data['user_phone']) || empty($data['user_phone'])) {
        $errors[] = "Le n° de téléphone est obligatoire.";
    }


    if (!isset(($data['message'])) || empty($data['message'])) {
        $errors[] = "Le message est obligatoire.";
    }
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merci</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <h1>Nous traitons votre demande dans les plus bref délais.</h1>
    </header>

    <main>
        <?php
        if (!empty($errors)) {
            foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach;
        } else {
            ?>
            <p>
                Merci <?php echo htmlentities(($_POST["first_name"])); ?> <?php echo htmlentities(($_POST["last_name"])); ?> de nous avoir contacté à propos de <?php echo htmlentities(($_POST["mail_topic"])); ?>.
            </p>
            <p>
                Un de nos conseillers vous contactera soit à l’adresse <?php echo htmlentities(($_POST["user_email"])); ?> ou par téléphone au <?php echo htmlentities(($_POST["user_phone"])); ?> dans les plus brefs délais pour traiter votre demande :
            </p>
            <p>
                <?php echo htmlentities(($_POST["message"])); ?>.
            </p>
        <?php }; ?>
    </main>
</body>

</html>