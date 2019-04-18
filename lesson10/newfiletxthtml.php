<?php
$fileNames = ["file1", "file2", "file3", "file4"];
$suffix1 = ".txt";
$suffix2 = ".html";

if (!file_exists("dir3")){
    mkdir("dir3");
}

for ($i = 0; $i < 4; $i++){
    if (!file_exists("dir3" . $fileNames[$i])){
        if ($i == 3){
            $fp = fopen("dir3/" . $fileNames[$i] . $suffix2, "w");
            fwrite($fp, "I'm come back");
            fclose($fp);
        }else{
            $fp = fopen("dir3/" . $fileNames[$i] . $suffix1, "w");
            fwrite($fp, "I'm come back");
            fclose($fp);
        }
    }

}
/*$files = glob("/OSPanel/domains/PHPlearning/lesson10/dir3/*.txt");
foreach ($files as $curfile){
    echo basename($curfile) . "<br>";
}*/
echo count(glob("/OSPanel/domains/PHPlearning/lesson10/dir3/*.txt")) . " files '.txt' <br>";
echo count(glob("/OSPanel/domains/PHPlearning/lesson10/dir3/*.html")) . " files '.html' <br>";
?>
