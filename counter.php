<?php
$counterFile = 'counter.txt';

// Lees de tellerwaarde uit het bestand
$visitorCount = file_get_contents($counterFile);

// Als het bestand niet bestaat of leeg is, initialiseer de teller op 0
if ($visitorCount === false || $visitorCount === '') {
    $visitorCount = 0;
}

// Verhoog de tellerwaarde
$visitorCount++;

// Schrijf de bijgewerkte tellerwaarde terug naar het bestand
file_put_contents($counterFile, $visitorCount);

// Stuur de tellerwaarde als reactie
echo $visitorCount;
?>
