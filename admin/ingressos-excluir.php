<?php

    require_once "config.inc.php";
    $id = $_GET['id'];

    $sql = "DELETE FROM ingressos WHERE id = $id";

    $resultado = mysqli_query($conexao, $sql);
    if($resultado){
       echo "<h2>ingresso excluido com sucesso!</h2>";
       echo "<br><a href='?pg=ingressos-admin'>Listar Clientes</a>";
    }else{
        echo "<h2>Erro ao excluir ingresso!</h2>";
        echo "<br><a href='?pg=ingressos-admin'>Voltar</a>";
    }



