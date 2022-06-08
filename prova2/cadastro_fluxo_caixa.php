<?php
    include('conexao.php');
    
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
        echo "<td>" . $row['id_fluxo'] . "</td>";
        echo "<td>" . $row['dt_cadastro'] . "</td>";
        echo "<td><a href='altera_fluxo_caixa.php?id_fluxo=".$row['id_fluxo']."'>".$row['Historico']. "</a></td>";            echo "<td>" . $row['Tipo'] . "</td>";
        echo "<td>" . $row['Valor'] . "</td>";
        echo "<td>" . $row['cidade'] . "</td>";
        echo "<td>" . $row['estado'] . "</td>";
	
	$sql = "INSERT INTO fluxo (nome,apelido,endereco,bairro,cidade,estado,telefone,celular,email,foto_blob, foto_nome) 
	        VALUES ('".$nome."','".$apelido."','".$endereco."','".$bairro."','".$cidade."','".$estado."','".$telefone."','".$celular."','".$email."','".$fotoBlob."','".$fotoNome."')";
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados inseridos com sucesso";
	else
		echo "Erro ao inserir no banco de dados: ".mysqli_error($con);
?> 