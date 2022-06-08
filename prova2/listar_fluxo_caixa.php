<?php
    include('conexao.php');
    $sql = 'SELECT * FROM Fluxo';
    $result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Contatos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1 align="center">Consulta de fluxo de caixa</h1>
    <table align="center" border="1" width=500>
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Histórico</th>
            <th>Excluir</th>
        </tr>
        <?php
            while ($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['id_fluxo'] . "</td>";
                echo "<td>" . $row['dt_cadastro'] . "</td>";
                echo "<td><a href='altera_fluxo_caixa.php?id_fluxo=".$row['id_fluxo']."'>".$row['Historico']. "</a></td>";
                echo "<td>" . $row['Tipo'] . "</td>";
                echo "<td>" . $row['Valor'] . "</td>";
                echo "<td>" . $row['cidade'] . "</td>";
                echo "<td>" . $row['estado'] . "</td>";
                echo "<td><a href='excluir_fluxo_caixa.php?id_fluxo=".$row['id_fluxo']."'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>