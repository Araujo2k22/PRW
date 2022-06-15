<?php
    include('conexao.php');
    
    $dt_cadastro = date("Y-m-d");
    $tipo = $_POST['Tipo'];
    $valor = $_POST['Valor'];	
    $historico = $_POST['Historico'];	
    $cheque = $_POST['Cheque'];

        echo "Data: " . $dt_cadastro. "<br>";
        echo "Tipo: " . $tipo. "<br>";
	echo "Valor: " . $valor. "<br>";
        echo "Historico: " .$historico. "<br>";
        echo "Cheque: " .$cheque. "<br>";

	$sql = "INSERT INTO fluxo_caixa (data,tipo,valor,historico,cheque) 
	        VALUES ('".$dt_cadastro."','".$tipo."','".$valor."','".$historico."','".$cheque."')";
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados inseridos com sucesso";
	else
		echo "Erro ao inserir no banco de dados: ".mysqli_error($con);
?> 