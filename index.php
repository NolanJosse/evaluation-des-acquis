<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <nav>
            <a href="#">Accueil</a>
            <a href="#">Contactez-moi</a>
        </nav>
    </header>

<section id="section1">
    <div class="row">
        <img src="https://picsum.photos/200/150" alt="random">
        <p>ceci est un test</p>
        <p>je suis en bts sio</p>
    </div>
</section>

<section id="section2">
    <div class="row">

        <img src="https://picsum.photos/200/150" alt="random">

        <form method="POST">
            <p>Nom : <input type="text" name="nom" required></p>
            <p>Email : <input type="email" name="email" required></p>

            <button type="submit">Validez</button>

            <?php 
                if (!empty($_POST)) {

                    $nom = trim($_POST['nom']);
                    $email = trim($_POST['email']);

                    if ($nom !== "" && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo '<p class="message success">Votre demande est bien envoyée !</p>';
                    } else {
                        echo '<p class="message error">Vos informations ne sont pas correctes</p>';
                    }
                }
            ?>
        </form>

    </div>
</section>


</body>