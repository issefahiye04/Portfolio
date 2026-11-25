<?php
$namn = trim($_POST['namn'] ?? '');
$epost = trim($_POST['epost'] ?? '');
$amne = trim($_POST['amne'] ?? '');
$kontaktsatt = trim($_POST['kontaktsatt'] ?? '');
$meddelande = trim($_POST['meddelande'] ?? '');

$harFel = (
    $namn === '' ||
    $epost === '' ||
    !filter_var($epost, FILTER_VALIDATE_EMAIL) ||
    $amne === '' ||
    $meddelande === ''
);
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
                    <a href="lardagbok.html" class="navigation__link">Lärdagbok</a>
                </li>
                <li class="navigation__item">
                    <a href="kontakt.html" class="navigation__link">Kontakt</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="thank-you">
            <?php if ($harFel): ?>
                <h1 class="thank-you__title">Något saknas i formuläret</h1>
                <p class="thank-you__text">
                    Kontrollera att du har fyllt i namn, en giltig e-postadress, ämne och meddelande innan du skickar.
                </p>
                <a href="kontakt.html" class="thank-you__link">Tillbaka till kontaktsidan</a>
            <?php else: ?>
                <h1 class="thank-you__title">Tack för ditt meddelande, <?php echo htmlspecialchars($namn); ?>!</h1>
                <p class="thank-you__text">
                    Jag har tagit emot din förfrågan och återkommer så snart jag kan.
                </p>

                <dl class="thank-you__summary">
                    <div class="thank-you__item">
                        <dt class="thank-you__term">E-post</dt>
                        <dd class="thank-you__value"><?php echo htmlspecialchars($epost); ?></dd>
                    </div>
                    <div class="thank-you__item">
                        <dt class="thank-you__term">Ämne</dt>
                        <dd class="thank-you__value"><?php echo htmlspecialchars($amne); ?></dd>
                    </div>
                    <?php if ($kontaktsatt !== ''): ?>
                        <div class="thank-you__item">
                            <dt class="thank-you__term">Önskad kontaktväg</dt>
                            <dd class="thank-you__value"><?php echo htmlspecialchars($kontaktsatt); ?></dd>
                        </div>
                    <?php endif; ?>
                    <div class="thank-you__item">
                        <dt class="thank-you__term">Meddelande</dt>
                        <dd class="thank-you__value"><?php echo nl2br(htmlspecialchars($meddelande)); ?></dd>
                    </div>
                </dl>

                <a href="index.html" class="thank-you__link">Tillbaka till startsidan</a>
            <?php endif; ?>
        </section>
    </main>

    <footer class="page-footer">
        <p class="page-footer__text">&copy; Alexander Lindqvist 2026</p>
    </footer>
</body>
</html>