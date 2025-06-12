<?php

// Die Funktion 'e' dient dazu, HTML-Sonderzeichen in einer Zeichenkette zu maskieren.
// Dies ist besonders wichtig, um Cross-Site Scripting (XSS) zu verhindern,
// wenn Benutzereingaben in HTML-Ausgaben eingebettet werden.
function e($html) {
    // htmlspecialchars konvertiert Sonderzeichen in HTML-Entities.
    // ENT_QUOTES sorgt dafür, dass sowohl einfache als auch doppelte Anführungszeichen konvertiert werden.
    // 'UTF-8' gibt die Zeichenkodierung an.
    // Das vierte Argument 'true' erzwingt eine doppelte Umwandlung (ab PHP 5.2.3).
    return htmlspecialchars($html, ENT_QUOTES, 'UTF-8', true);
}
