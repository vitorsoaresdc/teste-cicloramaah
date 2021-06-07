<?php

$dsn = "mysql:dbname=cicloramaah;host=localhost";
$dbuser = "root";
$dbpass = "root";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    

}catch(PDOException $e) {
    echo "Falhou a conexão!".$e->getMessage();
}

?>