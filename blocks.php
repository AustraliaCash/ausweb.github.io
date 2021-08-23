<?php
$homepage = file_get_contents('http://auscashexplorer.org/api/getblockcount');
echo $homepage = number_format($homepage, 0);
?>
