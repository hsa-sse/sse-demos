<h1>Dateiinhalt ausgeben</h1>

<?php
echo shell_exec("cat ".$_GET['file']);
?>