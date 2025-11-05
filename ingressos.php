<?php

    require_once "admin/config.inc.php";

    $sql = "SELECT * FROM ingressos";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){

    echo "<h1>Tipos De Ingresso</h1>";
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Tipo</th>
            <th>Preço</th>
            <th>Open bar</th>
        </tr>
    </thead>
    <tbody>
    <?php
        while($dados = mysqli_fetch_array($resultado)){
    ?>
        <tr>
            <td><?=$dados['ingresso']?></td>
            <td><?=$dados['preço']?></td>
            <td><?=$dados['open_bar']?></td>
        </tr>
    <?php
        }
    ?>
    </tbody>
</table>
<?php
    }else{
        echo "<h2>Nenhum ingresso cadastrado no momento.</h2>";
    }