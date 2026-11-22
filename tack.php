<?php
$namn = trim($_POST['namn'] ?? '');
$epost = trim($_POST['epost'] ?? '');
$amne = trim($_POST['amne'] ?? '');
$kontaktsatt = trim($_POST['kontaktsatt'] ?? '');
$meddelande = trim($_POST['meddelande'] ?? '');
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tack för ditt meddelande - Alexander Lindqvist</title>
    <meta name="description" content="Tack för att du hörde av dig till Alexander Lindqvist. Här visas en bekräftelse på ditt skickade meddelande.">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>
    <header class="page-header">
        <nav class="navigation" aria-label="Huvudmeny">
            <ul class="navigation__list">
                <li class="navigation__item">
                    <a href="index.html" class="navigation__link">Om mig</a>
                </li>
                <li class="navigation__item">
                    <a href="kompetenser.html" class="navigation__link">Kompetenser</a>
                </li>
                <li class="navigation__item">
                    <a href="projekt.html" class="navigation__link">Projekt</a>
                </li>
                <li class="navigation__item">
                    <a href="utbildning.html" class="navigation__link">Utbildning</a>
                </li>
                <li class="navigation__item">
                    <a href="kontakt.html" class="navigation__link">Kontakt</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
    </main>

    <footer class="page-footer">
        <p class="page-footer__text">&copy; Alexander Lindqvist 2026</p>
    </footer>
</body>
</html>