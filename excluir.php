<?php
require 'conexao.php';

if(isset($_GET["id"]) && empty($_GET["id"]) == false){

    $id = addslashes($_GET["id"]);

    $sql = "DELETE FROM usuarios WHERE id = '$id'";
    $pdo->query($sql);

    header("Location: lista.php");

} else {
    header("Location: index.php");
}

?>