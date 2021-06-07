<?php require 'conexao.php'; ?>
<?php require 'cabecalho.php'; ?>

<div class="add_new_user">
<a href="adiciona-usuario.php">Adicionar novo usuário</a>
</div>

<div class="container lista">

<table width="100%" >
    <tr>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Apelido</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>

    <?php

       $sql =  "SELECT * FROM usuarios";
       $sql = $pdo->query($sql);

       if($sql->rowCount() > 0) {
            foreach($sql->fetchAll() as $usuario) {
                echo '<tr>';
                echo '<td>'.$usuario['nome'].'</td>';
                echo '<td>'.$usuario['sobrenome'].'</td>';
                echo '<td>'.$usuario['apelido'].'</td>';
                echo '<td>'.$usuario['email'].'</td>';
                echo '<td> <a id="botao-editar" href="editar.php?id='.$usuario['id'].'">Editar</a>  <a id="botao-excluir" href="excluir.php?id='.$usuario['id'].'">Excluir</a> </td>';
                echo'</tr>';
            }
       }
    ?>

</table>

</div>

<?php require 'rodape.php'; ?>