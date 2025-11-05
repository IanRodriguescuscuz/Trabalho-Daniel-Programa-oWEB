<?php

require_once "config.inc.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cliente = $_POST["ingresso"];
    $cidade = $_POST["preço"];
    $estado = $_POST["open_bar"];
    $id = $_POST["id"];

    $sql = "UPDATE ingressos SET 
            ingresso = '$cliente',
            preço = '$cidade',
            open_bar = '$estado'
            WHERE id = '$id'";

    $executa = mysqli_query($conexao, $sql);
    if($executa) {
        echo "<h2>Alteração realizada com sucesso.</h2>";
        echo "<a href='?pg=ingressos-admin'>Voltar</a>";
    }else{
        echo "<h2>Erro ao alterar cadastro.</h2>";
        echo "<a href='?pg=ingressos-admin'>Voltar</a>";
    }
}else{
    echo "<h2>Acesso negado.</h2>";
    echo "<a href='?pg=ingressos-admin'>Voltar</a>";
}

