<?php

/*class Emploee{
    public $name;
    public $age;
    public $salary;
    public function getName(){
        return $this->name;
    }
    public function __construct($name, $age, $salary){
        $this->name = $name;

     $this->age = $age;
     $this->salary = $salary;

}
}

$vasia = new Emploee('Vasia', 25, 1000);


$peter = new Emploee('Peter', 30, 2000);


echo 'Зарплата Васи: ' . $vasia->salary . ', зарплата Пети: ' . $peter->salary . '<br>';
echo 'Summ: ' . ($vasia->salary + $peter->salary) . '<br>';

echo $vasia->getName();*/



require 'dbOpen.php';
require 'registration.php';
if (isset($_POST['submit'])){
    $newUser = new Registration($_POST['login'], $_POST['password'], $_POST['email']);
    $db = new Database('localhost', 'root', '', 'cms');
    //$sql = "SELECT * FROM users";
    //$users = $db->selectAll($sql);
    $regNewUser = "INSERT INTO users (login, password, email) VALUES ('{$newUser->login}', '{$newUser->password}', '{$newUser->email}')";
    $regNewUserRezult = $db->selectAll($regNewUser);
    if(!$regNewUserRezult) {
        echo "Запрос не удался";
    }
}
?>


<!--<ul>
<?php
/*foreach ($users as $user):
    */?>
    <li><?/*=$user['name']*/?></li>
<?php
/*endforeach;
*/?>
</ul>-->

<form action="" method="post">
    <input type="text" name="login">Login<br>
    <input type="password" name="password">Password<br>
    <input type="email" name="email">Email<br>
    <input type="submit" name="submit">
</form>

