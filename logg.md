# Arbetslogg – Portfolio (HTML-uppgiften)

Grupp: HTML Inlämningsgrupp 23 – Ismail Fahiye och Abdelbaset Alzeiton

## Logg
| Datum | Tid | Vad jag gjorde | Commit |
|---|---|---|---|
| 2026-11-21 | 2,5 h | Skapade GitHub-repo och GitHub Projects-board med kort för alla delar. Skapade mappstruktur (css/, js/). Byggde head, header med navigation, main med tre sections och footer på Om mig (index.html). Platshållartext tillfälligt. | Skapat mappstruktur och head i index.html / Lagt till header och navigation med BEM / Om mig: struktur klar, tillfällig platshållartext |
| 2026-11-22 | 1,5 h | Fick bakgrunden till den fiktiva personen från Abdelbaset. Delade upp texten i presentation, bakgrund och mål på Om mig. Bytte ut platshållartexten mot egen text. Lade till efternamnet Lindqvist i title, h1 och footer. Skrev ny meta description. Valde en bild på Unsplash, skrev alt-text och bildtext och ändrade height till 200. Skapade mappen images/ och lade in profil.jpg | Om mig: egen text och profilbild |
| 2026-11-22 | 0,5 h | Lade till en JS-krok på Om mig: knapp som ska byta cykelbilden mot en datorbild (data-js-action, data-image, data-alt, data-js-target). Skrev bildtext som passar båda bilderna. | Om mig: JS-krok för bildbyte |
| 2026-11-22 | 1,5 h | Skapade kontakt.html med inledning, kontaktuppgifter (mailto, GitHub, LinkedIn) och formulär med text, email, select, radioknappar i fieldset och textarea. Lade till required och "Välj ämne" på select. | Skapat kontaktsida med kontaktuppgifter och formulär / Kontakt: formulär klart med required på select |
| 2026-11-22 | 1 h | Skapade tack.php som läser formulärdata med $_POST, validerar fälten och visar ett svar med htmlspecialchars. | tack.php: tar emot formulärdata med $_POST / tack.php: visar svar och validerar formulärdata |
| 2026-11-23 | 3,5 h | Abdelbaset: Arbetade med kompetenser.html, projekt.html och utbildning.html. Anpassade innehåll, title, meta description, aktiv menylänk och namnet Alexander Lindqvist. Hämtade Ismails uppdateringar, löste konflikten i index.html och pushade ändringarna. | Merge updates from Ismail |
| 2026-11-23 | 2.5 h | Abdelbaset: Lade till BEM-klasser för mina tre sidor i CSS. Förstorade menylänkarnas klickytor. Genomförde W3C- och Lighthouse-tester och sparade skärmbilder. Rättade meta description på kompetenssidan. | 002cbf0 – Lagt till BEM-klasser och förbättrat menyns klickytor |
| 2026-11-25 | 2 h | Skapade Lärdagbok sida och uppdatera efter feedback | Lagt till Lärdagbok med filter-krok + uppdaterad nav |
| 2026-11-27 | 2 h | Abdelbaset: BEM-klassnamn för Om mig, Kontakt och tack.php i CSS. Större tryckytor för filterknappar och kontaktlänkar efter Lighthouse. | updatera css / updatera css för kontakt sidan |
| 2026-11-27 | 2 h | Båda: Publicerade portfolion på skolans webbserver och gjorde klart alla tester tillsammans, med skärmdumpar. | – |
| 2026-11-27 | 6 h | Båda: Skrev rapporten, PowerPoint och videomanus tillsammans. | – |

## BEM-namn

| Block | Element | Modifier | Används på |
|---|---|---|---|
| page-header | – | – | Alla sidor |
| navigation | __list, __item, __link | __link--active | Alla sidor |
| profile | __title, __text, __figure, __image, __caption, __button | – | index.html |
| background | __title, __text | – | index.html |
| goals | __title, __text | – | index.html |
| contact-intro | __title, __text | – | kontakt.html |
| contact-details | __title, __list, __item, __link | – | kontakt.html |
| contact-form-section | __title | – | kontakt.html |
| contact-form | __group, __label, __input, __select, __fieldset, __legend, __radio-group, __radio, __radio-label, __textarea, __button | – | kontakt.html |
| thank-you | __title, __text, __summary, __item, __term, __value, __link | – | tack.php |
| posts | __title, __intro, __filters, __filter-item, __filter-button, __list | __filter-button--active | lardagbok.html |
| post-card | __title, __meta, __text | – | lardagbok.html |
| page-footer | __text | – | Alla sidor |

## JS-krokar

| Interaktion | ACTION | DATA | TARGET | Sida |
|---|---|---|---|---|
| Byta profilbild | data-js-action="swap-image" | data-image, data-alt | data-js-target="profile-image" | index.html |
| Filtrera inlägg efter kategori | data-js-action="filter-posts" | data-category | data-js-target="posts-list" | lardagbok.html |

## AI-användning
| Datum | Vad jag (ismail) frågade AI om | Vad jag lärde mig |
|---|---|---|
| 2026-11-20 | Sammanfatta HTML-uppgiften och rapportmallen | Vilka sidor som krävs, de tre lagren (HTML/CSS/JS), vad som ska lämnas in |
| 2026-11-20 | Vad W3C-validering, Lighthouse och tangentbordstest är | W3C kollar att HTML-koden är korrekt, Lighthouse ger poäng för tillgänglighet och SEO, tangentbordstest visar om sidan går att använda utan mus |
| 2026-11-20 | Hur lång tid projektet tar och vad som ska vara med i videon | Ungefärlig tidsplan, att videon följer en mall |
| 2026-11-21 | Feedback på mitt gamla webbprojekt jämfört med nya kraven | Mappstruktur med css/, js/, images/, meta description, egen h1 per sida, BEM |
| 2026-11-21 | Vad tack.php och .md är | tack.php visar svaret från formuläret och läser $_POST, .md är Markdown |
| 2026-11-21 | Feedback på min HTML-kod för Om mig | Saknad > i meta-taggen, BEM-block ska ligga på section i stället för main |
| 2026-11-22 | Feedback på texten om Alexander: dela upp i tre sektioner | Att använda efternamn |
| 2026-11-22 | AI förminskade bildfilen från 3,6 MB till 180 kB | Bildstorlek & laddningstid |
| 2026-11-22 | AI förminskade datorbilden | Bildstorlek & laddningstid |
| 2026-11-22 | Förklaring av JS-krokar och feedback på min krok | En JS-krok är som en etikett på HTML-element, som gör att JavaScript lätt hittar rätt element |
| 2026-11-22 | Förklaring av PHP, $_POST och htmlspecialchars, feedback på formulär och tack.php | Jag lärde mig att PHP tar emot formulärdatan på servern via $_POST utifrån fältens name-attribut och skriver ut svaren säkert med htmlspecialchars() så att ingen injicerad kod körs på sidan. |
| 2026-11-22 | Förhörsfrågor om koden i tack.php | Testade om jag förstod det rätt |
| 2026-11-25 | Granskning av Abdelbasets sidor och kontroll av uppgiftskraven i Canvas | Alla krav verkades upfyllas |
| 2026-11-25 | Förslag på egen sida och förslag på inläggsrubriker till Lärdagbok | Bollade ider och kom fram till en Lärdagbok, en sida där Alexander skriver korta inlägg om vad han har lärt sig |
| 2026-11-25 | Feedback på Lärdagbok: aria-pressed, aria-label på filterlistan, aria-live, div som behållare |förbättrade tillgänglighet och struktur i Lärdagbok med aria-pressed på filterknapparna, aria-label på filterlistan, aria-live="polite" på inläggslistan och enhetlig menyordning med Lärdagbok före Kontakt. |
| 2026-11-27 | Hjälp med tester (W3C, Lighthouse, skärmläsare) och felsökning av tack.php på servern | PHP måste köras på en server, och W3C ska testa HTML-utdata (Ctrl+U), inte PHP-koden |
| 2026-11-27 | AI-stöd för PowerPoin och Ai skrev jamförelse koden utan context | Vi granskade Powerpointen. Jämförelsen med AI-kod finns i rapporten, avsnitt 8.2 |