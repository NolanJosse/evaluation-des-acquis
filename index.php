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

<form method="POST" id="contactForm"> <p>Nom : <input type="text" name="nom" id="nomInput" required></p>
    <p>Email : <input type="email" name="email" id="emailInput" required></p>

    <button type="submit">Validez</button>

    <p class="message success hidden" id="successMessage">Votre demande est bien envoyée !</p>
    <p class="message error hidden" id="errorMessage">Vos informations ne sont pas correctes</p>
    
</form>

<script src="script.js"></script> 

    </div>
</section>

<p>Page web faite par nolan
            <?php
            require_once 'config.php'; 
            try {
                $sql = "SELECT prenom FROM user LIMIT 1";
                $stmt = $pdo->query($sql);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);              
                if ($result && !empty($result['prenom'])) {
                    echo htmlspecialchars($result['prenom']);
                } else {
                    echo "Auteur";
                }             
            } catch (PDOException $e) {
                echo "Auteur";
            }
            ?>




</body>

</html>