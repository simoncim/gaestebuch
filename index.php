<?php

// Stellt die Verbindung zur Datenbank her und lädt Hilfsfunktionen
require_once __DIR__ . '/inc/db-connect.php';
require_once __DIR__ . '/inc/functions.php';

<<<<<<< HEAD
// Anzahl der Einträge pro Seite für die Paginierung
$perPage = 3;

// Standardmäßig wird die erste Seite angezeigt
=======
$perPage = 3;
>>>>>>> c6d61f662f95e82e6312d7887c1392fb498f87fb
$currentPage = 1;

// Prüft, ob ein Seitenparameter übergeben wurde
if (isset($_GET['page'])) {
    // Wandelt den Parameter in einen Integer um, Fehler werden unterdrückt
    $currentPage = @(int) $_GET['page'];
    // Falls ungültiger Wert (z.B. 0 oder negativ), auf Seite 1 zurücksetzen
    if ($currentPage <= 0) {
        $currentPage = 1;
    }
}

// Zählt die Gesamtanzahl der Einträge in der Tabelle 'entries'
$stmtCount = $pdo->prepare('SELECT COUNT(*) AS `count` FROM `entries`');
$stmtCount->execute();
$countTotal = $stmtCount->fetch(PDO::FETCH_ASSOC)['count'];

// Holt die Einträge für die aktuelle Seite, sortiert nach ID absteigend
$stmt = $pdo->prepare('SELECT * FROM `entries` ORDER BY `id` DESC LIMIT :offset, :perPage');
// Bindet die maximale Anzahl der Einträge pro Seite als Integer
$stmt->bindValue('perPage', $perPage, PDO::PARAM_INT);
// Berechnet und bindet den Offset (Startpunkt) für die LIMIT-Abfrage
$stmt->bindValue('offset', ($currentPage - 1) * $perPage, PDO::PARAM_INT);
$stmt->execute();
// Holt alle gefundenen Einträge als assoziatives Array
$entries = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Lädt die View-Datei, die die Einträge anzeigt
require __DIR__ . '/views/index.view.php';