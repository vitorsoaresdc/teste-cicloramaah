<?php
    require 'conexao.php';
    require 'cabecalho.php';

    if(isset($_POST["nome"]) && empty($_POST["nome"]) == false) {
        $nome = addslashes($_POST["nome"]);
        $sobrenome = addslashes($_POST["sobrenome"]);
        $apelido = addslashes($_POST["apelido"]);
        $email = addslashes($_POST["email"]);

        $sql = "INSERT INTO usuarios SET nome = '$nome', sobrenome = '$sobrenome', apelido = '$apelido', email = '$email' ";
        $pdo->query($sql);

        header("Location: lista.php");
    }else{

        echo "deu algum erro!";
    }

?>

<div class="container_add_user">

<form method="POST">

    Nome:<br>
    <input type="text" name="nome" required><br>
    Sobrenome:<br>
    <input type="text" name="sobrenome" required><br>
    Apelido:<br>
    <input type="text" name="apelido" required><br>
    E-mail:<br>
    <input type="email" name="email" required><br><br>

    <input type="submit" value="Adicionar" class="botao">
</form>

</div>

<?php require 'rodape.php'; ?>