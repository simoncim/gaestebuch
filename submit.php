<?php

// Einbinden der Datenbankverbindung und weiterer Funktionen aus externen Dateien
require_once __DIR__ . '/inc/db-connect.php';
require_once __DIR__ . '/inc/functions.php';

// Prüfen, ob das Formular per POST übermittelt wurde
if (!empty($_POST)) {

    // Initialisierung der Variablen für die Formularfelder
    $title = '';
    if (isset($_POST['title'])) {
        // Wert aus dem POST-Array auslesen und in String konvertieren
        // Das @-Zeichen unterdrückt mögliche Warnungen (z.B. bei fehlerhafter Typumwandlung)
        $title = @(string) $_POST['title'];
    }

    $name = '';
    if (isset($_POST['name'])) {
        $name = @(string) $_POST['name'];
    }

    $content = '';
    if (isset($_POST['content'])) {
        $content = @(string) $_POST['content'];
    }

    // Prüfen, ob alle drei Felder nicht leer sind
    if (!empty($title) && !empty($name) && !empty($content)) {
        // Vorbereitung eines SQL-Statements zum Einfügen eines neuen Gästebucheintrags
        $stmt = $pdo->prepare('INSERT INTO entries (`name`, `title`, `content`) VALUES (:name, :title, :content)');
        // Binden der Werte an die Platzhalter im SQL-Statement
        $stmt->bindValue('name', $name);
        $stmt->bindValue('title', $title);
        $stmt->bindValue('content', $content);
        // Ausführen des SQL-Statements
        $stmt->execute();

        // Ausgabe eines Links zurück zur Startseite/Gästebuch
        echo '<a href="index.php">Zurück zum Gästebuch...</a>';
        // Skript beenden, damit kein weiterer Code ausgeführt wird
        die();
    }
}

// Falls die Eingaben nicht vollständig sind oder ein Fehler auftritt,
// wird eine Fehlermeldung definiert und die index.php eingebunden
$errorMessage = 'Es ist ein Fehler aufgetreten...';
require __DIR__ . '/index.php';
