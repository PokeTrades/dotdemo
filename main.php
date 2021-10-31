<?php 
    require 'vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    function connectfn($host, $user, $pw, $db, $port){
        echo "Host: $host<br>User: $user<br>Password: $pw<br>DB: $db<br>Port: $port<br>";
    }

    connectfn($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB'], $_ENV['DB_PORT']);
?>
