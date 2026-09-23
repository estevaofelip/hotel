<?php
require_once 'conexao.php';

$id_hotel = $_GET['id_hotel'];

$sql = "SELECT * FROM quartos WHERE hotel_id = '$id_hotel'";

$resultado = mysqli_query($conexao, $sql);

if (!$resultado) {
    echo "Erro ao consultar quartos: " . mysqli_error($conexao);
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hotel - Quartos</title>

</head>

<body>

    <h1>🏨 Quartos Disponíveis</h1>

    <h2>🛏️ Quartos do Hotel</h2>

    <table>

        <tr>
            <th>Número</th>
            <th>Tipo</th>
            <th>Preço</th>
        </tr>

        <?php

        while ($quarto = mysqli_fetch_assoc($resultado)) {

            echo "<tr>";
            echo "<td>" . $quarto['numero'] . "</td>";
            echo "<td>" . $quarto['tipo'] . "</td>";
            echo "<td>R$ " . $quarto['preco_diaria'] . "</td>";
            echo "</tr>";
        }

        ?>

    </table>

    <h2>Fazer Reserva</h2>

    <form action="salvar_reserva.php" method="POST">

        <p>
            id do Cliente:
            <input type="number" name="id_cliente" required>
        </p>

        <p>
            ID do Quarto:
            <input type="number" name="id_quarto" required>
        </p>

        <p>
            Data de Entrada:
            <input type="date" name="data_entrada" required>
        </p>

        <p>
            Data de Saída:
            <input type="date" name="data_saida" required>
        </p>

        <input type="submit" value="Confirmar Reserva">

    </form>

</body>

</html>
