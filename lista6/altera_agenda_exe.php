<?php
    include("conexao.php");
    $id_agenda = $_POST['id_agenda'];
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];	
    $cidade = $_POST['cidade'];		
    $estado = $_POST['estado'];	
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $dt_cadastro = date("Y-m-d");

    echo "Nome: $nome<br>";
    

    $sql = "UPDATE agenda SET
        nome= '".$nome."',
        apelido = '".$apelido."',
        endereco = '".$endereco."',
        bairro = '".$bairro."',
        cidade = '".$cidade."',		
        estado = '".$estado."',	
        telefone = '".$telefone."',
        celular = '".$celular."',
        email = '".$email."',
        dt_cadastro = '".$dt_cadastro."'
        WHERE id_agenda = $id_agenda";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<br><br>Dados alterados com sucesso";
    } else {
        echo "<br><br>Dados não alterados: ".mysqli_error($con);
    }
?>