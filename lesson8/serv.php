<?php 

if ($_GET["page"] == "1"){
    echo "Main page";
}elseif ($_GET["page"] == 2){
    echo "Contacts";
}elseif ($_GET["page"] == 3){
    echo "news";
}

?>
