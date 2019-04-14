<?php
$fileNames = ["file1", "file2", "file3", "file4", "file5"];
$suffix = ".txt";
//$handle = opendir("dir2/");
foreach ($fileNames as $file){
    $fp = fopen("dir2/" . $file . $suffix, "w");
    fwrite($fp, "I'm come back");
    fclose($fp);
}
//closedir($handle);
?>
