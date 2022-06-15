<?php
    include("conexao.php");
    $id_fluxo = $_GET['id_fluxo'];
    $sql = 'SELECT * FROM fluxo WHERE id_fluxo='.$id_fluxo;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alterar Fluxo de Caixa</title>
</head>
<body>
<form action="altera_fluxo_exe.php" method="post" enctype='multipart/form-data'>
        <table align="center">
            <tr>
                <th colspan="2">Cadastro Fluxo de Caixa</th>
            </tr>
            <tr>
                <td>
                    <p>Data:</p>
                </td>
                <td><input type="text" name="Data" value="<?php echo $row['Data'] ?>"></td>
            </tr>
            <tr>
                <td>
                    <p>Tipo:</p>
                </td>
                <td><input type="text" name="Tipo" value="<?php echo $row['Tipo'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                </td>
            </tr>
            <tr>
                <td>
                    <p>Valor:</p>
                </td>
                <td><input type="text" name="Valor" value="<?php echo $row['Valor'] ?>"></td>
                <td>
                    <p>Historico:</p>
                </td>
                <td><input type="text" name="Historico" value="<?php echo $row['Historico'] ?>"></td>
            <tr>
                <td colspan="2">
                </td>
            </tr>
            <tr>
                <td>
                    <p>Cheque:</p>
                </td>
                <td>
                    <select name="cheque" id="cheque">
                        <option>Selecionar...</option>
                        <option <? if($row['cheque']=='Sim') echo "selected"?>>Sim</option>
                        <option <? if($row['cheque']=='Não') echo "selected"?>>Não</option>
                    </select>
                </td>
            </tr>
            <tr>
                <input type="hidden" name="id_fluxo" value="<?php echo $row['id_fluxo'] ?>">
                <td colspan="2"><br><input type="submit" class="btnEnviar" value="Enviar"></td>
            </tr>
        </table>
    </form>
</body>
</html>