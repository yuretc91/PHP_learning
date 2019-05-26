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
    $db = new Database('localhost', 'root', '', 'test');
    $sql = "SELECT * FROM users";
    $users = $db->selectAll($sql);
    /*$regNewUser = "INSERT INTO users (login, password, email) VALUES ('{$newUser->login}', '{$newUser->password}', '{$newUser->email}')";
    $regNewUserRezult = mysqli_query($connection, $regNewUser);
    if(!$regNewUserRezult) {
        echo "Запрос не удался";
    }*/
}


foreach ($users as $user):
?>

<ul>
    <li><?=$user['name']?></li>
</ul>



<?php
endforeach;
    ?>