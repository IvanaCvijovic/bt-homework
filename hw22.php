<?php

class Db {
    private $host="localhost";
    private $dbname="homeworks";
    private $u="root";
    private $p="";
    
    public function connect(){
    $dsn= "mysql:host=" . $this->host . "; dbname=" . $this->dbname;
    $pdo = new PDO ($dsn, $this->u, $this->p); 
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
    }

}

class User extends Db {
    
    public function setNewUser($name, $pass){
    $sql = "INSERT INTO users (". 'name, password' . ") VALUES ('$name', '$pass')";
    $stm = $this->connect()->prepare($sql);
    $stm->execute();
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    try{
    $u1 = new User;
    $u1->setNewUser('Sara', 'Sara1');

    $u2 = new User;
    $u2->setNewUser('Jovana', 'Jovana1');

    $u2 = new User;
    $u2->setNewUser('Jovan', 'Jovan1');
    $u3 = new User;
    $u3->setNewUser('vesna');

    $u4 = new User;
    $u4->setNewUser('relja', 'relja');

    $u5 = new User;
    $u5->setNewUser('zivko', 'zivko');
    } catch (\Throwable $ex) {
        echo $ex->getMessage();
    }
    
    ?>
</body>
</html>