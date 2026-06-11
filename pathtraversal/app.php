<h1>Dateiinhalt ausgeben</h1>

<?php
$file = $_GET['file'] ?? '';
if ($file === '') {
    exit('Kein file-Parameter übergeben.');
}

$content = @file_get_contents($file);
echo $content === false ? 'Datei nicht lesbar oder nicht gefunden.' : $content;
?>
