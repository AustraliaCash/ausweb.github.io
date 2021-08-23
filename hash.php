<?php
$homepage = file_get_contents('http://auscashexplorer.org/api/getnetworkhashps');
echo $homepage = number_format($homepage / 1000000, 0);
?>
