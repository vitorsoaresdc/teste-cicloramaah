<?php
require 'conexao.php';
require 'cabecalho.php';

$id = 0;

if(isset($_GET["id"]) && empty($_GET["id"]) == false) {
    $id = addslashes($_GET['id']);

if(isset($_POST["nome"]) && empty($_POST["nome"]) == false) {
        $nome = addslashes($_POST["nome"]);
        $sobrenome = addslashes($_POST["sobrenome"]);
        $apelido = addslashes($_POST["apelido"]);
        $email = addslashes($_POST["email"]);

        $sql = "UPDATE usuarios SET nome = '$nome', sobrenome = '$sobrenome', apelido = '$apelido', email = '$email' WHERE id = '$id' ";
        $pdo->query($sql);

        header("Location: lista.php");
}

    $sql = "SELECT * FROM usuarios WHERE id = '$id' ";
    $sql = $pdo->query($sql);

    if($sql->rowCount() > 0) {
        $dado = $sql->fetch();
        
    } else {
        header("Location: lista.php");
        
    }

} 

?>

<div class="container_add_user">

<form method="POST">

    Nome:<br>
    <input type="text" name="nome" required value="<?php echo $dado['nome']; ?> "><br>
    Sobrenome:<br>
    <input type="text" name="sobrenome" required value="<?php echo $dado['sobrenome']; ?>"><br>
    Apelido:<br>
    <input type="text" name="apelido" required value="<?php echo $dado['apelido']; ?>"><br>
    E-mail:<br>
    <input type="text" name="email" required value="<?php echo $dado['email']; ?>"><br>

    <input type="submit" value="Atualizar" class="botao_atualizar">
</form>
</div>