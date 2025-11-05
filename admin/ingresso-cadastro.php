<?php

    require_once "config.inc.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cliente = $_POST["ingresso"];
        $cidade = $_POST["preço"];
        $estado = $_POST["open_bar"];

        $sql = "INSERT INTO ingressos (ingresso, preço, open_bar) 
            VALUES ('$cliente', '$cidade', '$estado')";

        $executa = mysqli_query($conexao, $sql);
        if($executa) {
            echo "<h2>Cadastro realizado com sucesso.</h2>";
            echo "<a href='?pg=clientes-admin'>Voltar</a>";
        }else{
            echo "<h2>Erro ao cadastrar.</h2>";
            echo "<a href='?pg=clientes-admin'>Voltar</a>";
        }
    }else{
        echo "<h2>Acesso negado.</h2>";
        echo "<a href='?pg=clientes-admin'>Voltar</a>";
    }


