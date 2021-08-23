<?php
$homepage = file_get_contents('http://auscashexplorer.org/ext/getmoneysupply');
echo $homepage = number_format($homepage, 0);
?>
