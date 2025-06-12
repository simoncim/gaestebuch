<?php

try {
    // Erstelle ein neues PDO-Objekt zur Verbindung mit der MySQL-Datenbank.
    // host=localhost: Die Datenbank läuft lokal.
    // dbname=php_guestbook: Name der Datenbank.
    // 'root', '': Benutzername und Passwort für die Datenbankverbindung (hier leeres Passwort).
    // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION: Setzt den Fehlerbehandlungsmodus so, dass Ausnahmen (Exceptions) geworfen werden.
    $pdo = new PDO('mysql:host=localhost;dbname=php_guestbook', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}
catch(PDOException $e) {
    // Falls eine PDOException auftritt (z.B. Verbindungsfehler), wird diese abgefangen.
    // Ausgabe einer Fehlermeldung an den Benutzer.
    echo 'Probleme mit der Datenbankverbindung...';
    // Skriptabbruch, um weitere Ausführung zu verhindern.
    die();
}