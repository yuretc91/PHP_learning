<?php
$usersList = file("users/users.txt");
foreach ($usersList as $users){
    $userName[] = explode("%", $users)[0];
    $userEmail[] = explode("%", $users)[1];
    $userLogin[] = explode("%", $users)[2];
    $telephone[] = explode("%", $users)[3];
    $info[] = explode("%", $users)[4];
    $userAva[] = explode("%", $users)[5];
}
echo "<p>Name: " . $userName[0] . "</p><p>e-mail: " . $userEmail[0] . "</p><p>Login: " . $userLogin[0] . "</p><p>Tel: " . $telephone[0] . "</p><p>Info: " . $info[0] . "</p>";
echo "<img src=" . $userAva[0] . ">";

?>
