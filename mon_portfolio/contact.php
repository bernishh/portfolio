<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>Home</title>
</head>
<body>
<header>
    <nav class="navbar">     
        <a href="./home.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="./Apropos.php"><i class="fa-solid fa-user"></i>A propos</a>
        <a href="./veille_techno.php"><i class="fa-solid fa-microchip"></i>Veille Technonologique</a>
        <a href="./veille_juri.php"><i class="fa-solid fa-file-contract"></i>Veille Juridique</a>
        <a href="./E4.php"><i class="fa-solid fa-diagram-project"></i>E4</a>
        <a href="./E5.php"><i class="fa-solid fa-diagram-project"></i>E5</a>
        <a class="active" href="./contact.php"><i class="fa fa-fw fa-envelope"></i>Contact</a>          
    </nav>
</header>

<div class="container">
        <h1>Contactez-moi</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Envoyer</button>
            </div>
        </form>

        <div class="social-media">
            <p>Suivez-moi sur :</p>
            <a href="https://www.linkedin.com" target="_blank">LinkedIn</a>
            <a href="https://github.com" target="_blank">GitHub</a>
            <a href="https://twitter.com" target="_blank">Twitter</a>
        </div>

        <div class="map">
            <h2>Ma localisation</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2615.1830297603337!2d2.2922923!3d48.8588441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f1cbd1654f3%3A0xc0d3b4e3f58c8fd6!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1614368820895!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</body>
</html>



