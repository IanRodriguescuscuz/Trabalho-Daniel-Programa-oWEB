<?php
    require_once "config.inc.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM ingressos WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) > 0){
        $cliente = mysqli_fetch_array($resultado);


?>

<h2>Cadastro de Ingresso</h2>
<form action="?pg=ingressos_alterar" method="post">
    <input type="hidden" name="id" value="<?=$cliente['id']?>">
    <label>Ingresso:</label>
    <input type="text" name="ingresso" value="<?=$cliente['ingresso']?>"><br>
    <label>Preço:</label>
    <input type="text" name="preço" value="<?=$cliente['preço']?>"><br>
    <label>Open bar:</label>
    <input type="text" name="open_bar" value="<?=$cliente['open_bar']?>"><br>

    <input type="submit" value="Alterar Ingresso">
</form>

<?php
    }else{
        echo "<h2>Nenhum tipo de Ingresso cadastrado!</h2>";
    }
?>