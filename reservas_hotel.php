<?php

require_once 'conexao.php';

$sql = "SELECT clientes.nome AS nome_cliente, clientes.telefone, quartos.numero_quarto, reservas.data_entrada, reservas.data_saida
        FROM reservas 
        JOIN quartos ON reservas.id_quarto = quartos.id 
        JOIN clientes ON reservas.id_cliente = clientes.id 
        WHERE quartos.id_hotel = '$id_hotel'";
?>


$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Minhas Reservas confirmadas</h2>
    <table>
        <tr>
            <th>nome</th>
            <th>telefone:</th>
            <th>quarto:</th>
            <th>Diária:</th>
            <th>Data Entrada (Check-in):</th>
            <th>Data Saída (Check-out):</th>
            <th>preço</th>
        </tr>
<?php
            while($linha = mysqli_fetch_assoc($resultado)){
                echo "<tr>
                    <td>".$linha['nome']."</td>
                    <td>".$linha['id_hoteis']."</td>
                    <td>".$linha['preco']."</td>
                    <td>-</td>
                    <td>".$linha['data_entrada']."</td>
                    <td>".$linha['data_saida']."</td>
                </tr>";
            }
        ?>
    </table>
    
            <a href="listar_hoteis.php">Clique aqui para ir para a tela de cadastro</a>

</body>
</html>