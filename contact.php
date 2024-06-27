<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="core/style/style.css">
    <link rel="shortcut icon" href="assets/favicon.jpg"/>
    <title>Explore Globe</title>
</head>
<body>

    <header>
        <?php require_once(__DIR__ . '/include/header.php'); ?>
    </header>

    <section id="contact">
        <div class="container">
            <div class="title">
                <p class="ask">Une question ? un conseil ?</p>
                <p class="conta">Contactez-nous</p>
            </div>
            <form action="#" method="post">
                <input type="text" name="name" placeholder="Entrer votre nom..." required="">
                <input type="email" name="email" placeholder="Entrer votre mail..." required="">
                <input type="text" name="subject" placeholder="Entrer le sujet..." required="">
                <input type="text" name="number" placeholder="Entrer votre numéro de téléphone" required="">
                <textarea name="message" placeholder="Entrer votre message"></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </section>

    


















</body>
</html>