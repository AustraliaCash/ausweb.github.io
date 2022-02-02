<?php
$homepage = file_get_contents('https://openchains.info/api/v1/australiacash/getsupply');
echo $homepage = number_format($homepage, 0);
?>
