<?php

if (file_exists("test.txt")) {
    unlink("test.txt");
}else{
    $fp = fopen("test.txt", "w");
    fwrite($fp, "I'm come back");
    fclose($fp);
}

?>
