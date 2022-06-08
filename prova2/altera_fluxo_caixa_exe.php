<?php
    include("conexao.php");

    $id_fluxo = $_POST['id_fluxo'];
    $dt_cadastro = date("Y-m-d");
    $nome = $_POST['nome'];
    $valor = $_POST['Valor'];	
    $cheque = $_POST['Cheque'];	
    

    echo "Nome: $nome<br>";
    

    $sql = "UPDATE fluxo SET
        dt_cadastro = '".$dt_cadastro."',
        apelido = '".$apelido."',
        endereco = '".$endereco."',
        bairro = '".$bairro."',
        cidade = '".$cidade."',		
        estado = '".$estado."',	
        telefone = '".$telefone."',
        celular = '".$celular."',
        email = '".$email."',
        foto_blob='".$fotoBlob."',
        foto_nome='".$fotoNome."'
        WHERE id_agenda = $id_fluxo";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<br><br>Dados alterados com sucesso";
    } else {
        echo "<br><br>Dados não alterados: ".mysqli_error($con);
    }
?>