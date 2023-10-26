<?php
$aktualnaDataTimestamp = strtotime('now');
$nowaDataTimestamp = $aktualnaDataTimestamp + (14 * 24 * 60 * 60);
echo "Data za 2 tygodnie: " . date('Y-m-d H:i:s', $nowaDataTimestamp) . "\n";
?>
