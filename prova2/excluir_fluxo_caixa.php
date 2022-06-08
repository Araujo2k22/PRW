<?php
    include('conexao.php');
    
	$id_fluxo = $_GET['id_fluxo'];

    $sql = 'DELETE FROM fluxo WHERE id_fluxo='.$id_fluxo;
    
	echo "<h1> Exclusão de Consultas </h1>";
	$result = mysqli_query($con, $sql);
	
	if($result)
		echo "Registro excluído com sucesso<br>";
	else
		echo "Erro ao tentar excluir a consulta: ".mysqli_error($con)."<br>";
  
?>
<a href='listar_fluxo_caixa.php'> Voltar</a>