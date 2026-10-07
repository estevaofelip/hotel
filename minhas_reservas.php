<?php
session_start();

if(!isset($_SESSION['logado'])|| $_SESSION['logado'] !== true){
    header("Location: login.html");
    exit();
}


require_once "conexao.php";

$sql = "SELECT 
    reservas.id AS id_reservas,
    hoteis.id AS id_hoteis,
    hoteis.nome AS nome_hotel, 
    quartos.tipo,
    reservas.data_entrada,
    reservas.data_saida
FROM reservas
JOIN quartos ON reservas.quarto_id = quartos.id
JOIN hoteis ON quartos.hotel_id = hoteis.id";

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
            <th>Cód. Reserva:</th>
            <th>Quarto:</th>
            <th>Tipo do Quarto:</th>
            <th>Diária:</th>
            <th>Data Entrada (Check-in):</th>
            <th>Data Saída (Check-out):</th>
        </tr>
<?php
            while($linha = mysqli_fetch_assoc($resultado)){
                echo "<tr>
                    <td>".$linha['id_reservas']."</td>
                    <td>".$linha['id_hoteis']."</td>
                    <td>".$linha['tipo']."</td>
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