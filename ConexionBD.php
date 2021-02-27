<?php   

    $host='localhost';
    $user='root';
    $pass='';
    $db='diario';

    try{
    $pdo= new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
    }
    catch(PDOException $ex)
    {
        echo $ex -> getmesssage();
    }
    
    
?>