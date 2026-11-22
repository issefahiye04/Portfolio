# Arbetslogg – Portfolio (HTML-uppgiften)

Grupp: HTML Inlämningsgrupp 23 – Ismail Fahiye och Abdelbaset Alzeiton

## Logg
| Datum | Tid | Vad jag gjorde | Commit |
|---|---|---|---|
| 2026-11-21 | 2,5 h | Skapade GitHub-repo och GitHub Projects-board med kort för alla delar. Skapade mappstruktur (css/, js/). Byggde head, header med navigation, main med tre sections och footer på Om mig (index.html). Platshållartext tillfälligt. | Skapat mappstruktur och head i index.html / Lagt till header och navigation med BEM / Om mig: struktur klar, tillfällig platshållartext |
| 2026-11-22 | 1,5h |  Fick bakgrunden till den fiktiva personen från Abdelbaset. Delade upp texten i presentation, bakgrund och mål på Om mig. Bytte ut platshållartexten mot egen text. Lade till efternamnet Lindqvist i title, h1 och footer. Skrev ny meta description. Valde en bild på Unsplash, skrev alt-text och bildtext och ändrade height till 200. Skapade mappen images/ och lade in profil.jpg | Om mig: egen text och profilbild |

## BEM-namn

| Block | Element | Modifier | Används på |
|---|---|---|---|
| page-header | – | – | Alla sidor |
| navigation | __list, __item, __link | __link--active | Alla sidor |
| profile | __title, __text, __figure, __image, __caption | – | index.html |
| background | __title, __text | – | index.html |
| goals | __title, __text | – | index.html |
| page-footer | __text | – | Alla sidor |


## Att göra
- Byta ut platshållartexten mot egen text // klart
- Lägga till bilden images/profil.jpg //klart
- Bestämma egen sida med Abdelbaset
- Kontakt-sidan + tack.php.

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