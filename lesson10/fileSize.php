<?php
$num = 1024;
echo round(filesize("index.php") / $num, "2") . " kb";

?>
