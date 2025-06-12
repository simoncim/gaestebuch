<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <!-- Stellt sicher, dass die Seite mit dem neuesten IE-Modus gerendert wird -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Responsives Layout für verschiedene Bildschirmgrößen -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Einbindung der Montserrat-Schriftart -->
    <link rel="stylesheet" type="text/css" href="./styles/lib/montserrat/webfonts/Montserrat.css" />
    <!-- Einbindung der Haupt-CSS-Datei -->
    <link rel="stylesheet" type="text/css" href="./styles/main.css" />
    <title>Gästebuch</title>
</head>

<body>
    <div class="container">
        <!-- Überschrift des Gästebuchs -->
        <h1 class="guestbook-heading">Gästebuch</h1>
        <!-- Formular zum Eintragen neuer Gästebucheinträge -->
        <form method="POST" action="submit.php">
            <!-- Fehlermeldung anzeigen, falls vorhanden -->
            <?php if (isset($errorMessage)): ?>
                <p><?php echo e($errorMessage); ?></p>
            <?php endif; ?>
            <!-- Eingabefeld für den Namen -->
            <label class="guestbook-entry-label" for="name">Dein Name:</label>
            <input
                required="required"
                class="guestbook-entry-input"
                type="text"
                id="name"
                name="name" />

            <!-- Eingabefeld für den Titel des Eintrags -->
            <label class="guestbook-entry-label" for="title">Titel des Eintrags:</label>
            <input
                required="required"
                class="guestbook-entry-input"
                type="text"
                id="title"
                name="title" />

            <!-- Eingabefeld für den Inhalt des Eintrags -->
            <label class="guestbook-entry-label" for="content">Inhalt des Eintrags:</label>
            <textarea
                required="required"
                rows="4"
                class="guestbook-entry-input"
                type="text"
                id="content"
                name="content"></textarea>

            <!-- Buttons zum Zurücksetzen und Absenden des Formulars -->
            <div class="guestbook-form-buttons">
                <input class="button" type="reset" value="Zurücksetzen">
                <input class="button" type="submit" value="Absenden">
            </div>
        </form>

        <hr class="guestbook-separator" />

        <!-- Anzeige aller Gästebucheinträge -->
        <?php foreach ($entries as $entry): ?>
            <?php
            // Inhalt des Eintrags in Absätze aufteilen und leere Zeilen entfernen
            $paragraphs = explode("\n", $entry['content']);
            $filteredParagraphs = [];
            foreach ($paragraphs as $paragraph) {
                $paragraph = trim($paragraph);
                if (strlen($paragraph) > 0) {
                    $filteredParagraphs[] = $paragraph;
                }
            }
            ?>
            <div class="guestbook-entry">
                <div class="guestbook-entry-header">
                    <!-- Titel des Eintrags -->
                    <h3 class="guestbook-entry-title">
                        <?php echo e($entry['title']); ?>
                    </h3>
                    <!-- Name des Autors -->
                    <span class="guestbook-entry-author">
                        <?php echo e($entry['name']); ?>
                    </span>
                </div>
                <div class="guestbook-entry-content">
                    <!-- Inhalt des Eintrags, aufgeteilt in Absätze -->
                    <?php foreach ($filteredParagraphs as $p): ?>
                        <p><?php echo e($p); ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>


        <?php
        // Anzahl der Seiten für die Paginierung berechnen
        $numPages = ceil($countTotal / $perPage);

        ?>
        <!-- Paginierung anzeigen, falls mehr als eine Seite vorhanden ist -->
        <?php if ($numPages > 1): ?>
            <ul class="guestbook-pagination">
                <?php for ($x = 1; $x <= $numPages; $x++): ?>
                    <li class="guestbook-pagination-li">
                        <a
                            class="guestbook-pagination-a<?php if ($x === $currentPage): ?> guestbook-pagination-active<?php endif; ?>"
                            href="index.php?<?php echo http_build_query(['page' => $x]); ?>">

                            <?php echo e($x); ?>
                        </a>
                    </li>
                <?php endfor; ?>
            </ul>
        <?php endif; ?>

        <hr class="guestbook-separator" />

        <!-- Footer mit Hinweis auf das Hotel -->
        <footer class="guestbook-footer">
            <p>Gästebuch für Hotel Königshof</p>
        </footer>

    </div>
</body>

</html>