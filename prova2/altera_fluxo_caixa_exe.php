<?php
    include("conexao.php");

    $id_fluxo = $_POST['id_fluxo'];
    $dt_cadastro = date("Y-m-d");
    $tipo = $_POST['Tipo'];
    $valor = $_POST['Valor'];	
    $historico = $_POST['Historico'];	
    $cheque = $_POST['Cheque'];
    
    echo "<h1>Alteração do Fluxo de Caixa</h1>";

    $sql = "UPDATE fluxo SET
        data='".$dt_cadastro."',
        tipo='".$tipo."',
        valor='".$valor."',
        historico='".$hisotrico."',
        cheque='".$cheque."'
        WHERE id_fluxo =". $id_fluxo;

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Dados alterados com sucesso<br>";
    } else {
        echo "Dados não alterados: ".mysqli_error($con)."<br>";
    }
?>
<br><a href="index.php">Voltar</a>