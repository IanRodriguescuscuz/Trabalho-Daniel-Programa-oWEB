<?php

    require_once "config.inc.php";

    echo "<a href='?pg=ingressos-form'>Cadastrar ingresso</a>";

    echo "<h1>Lista de INGRESSOS DISPONIVEIS</h1>";

    $sql = "SELECT * FROM ingressos";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            echo "ID: ".$dados['id']."<br>";
            echo "Ingresso: ".$dados['ingresso']."<br>";
            echo "Preço: ".$dados['preço']."<br>";
            echo "Bebida inclusa: ".$dados['open_bar']."<br>";
            echo " <a href='?pg=ingresso-form-alterar&id=$dados[id]'>Editar</a>";
            echo "| <a href='?pg=ingressos-excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "<h3>Nenhum INGRESSO cadastrado!</h3>";
    }


