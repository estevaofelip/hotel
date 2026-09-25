<?php
require_once 'conexao.php';
$id_hotel = $_GET['id_hotel'];

$sql = "SELECT * FROM quartos WHERE hotel_id = '$id_hotel' 
and disponivel = 1";
$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - Quartos e Reservas</title>
</head>
<body style='
    text-align: center;
    margin: 0;
    padding: 20px;
    background: linear-gradient(135deg, #1e1b4b, #312e81, #1e40af);
    font-family: Arial, sans-serif;
'>

    <h1 style='
        background: linear-gradient(90deg, #7c3aed, #2563eb);
        border-radius: 15px;
        display: inline-block;
        padding: 12px 24px;
        border: 2px solid #22d3ee;
        box-shadow: 0px 6px 20px rgba(34, 211, 238, 0.4);
        color: #ffffff;
    '>
        QUARTOS E RESERVAS 🛏️
    </h1>

    <div style='
        border: 3px solid #22d3ee;
        background: linear-gradient(145deg, #eef2ff, #ddd6fe);
        padding: 20px;
        max-width: 900px;
        margin: 0 auto;
        border-radius: 20px;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.35);
        color: #1e1b4b;
    '>

        <h2 style='
            background: linear-gradient(90deg, #4c1d95, #1d4ed8);
            border-radius: 10px;
            padding: 12px;
            border: 2px solid #a78bfa;
            color: #67e8f9;
            margin-bottom: 20px;
        '>
            📍 Quartos Disponíveis
        </h2>

        <table style='
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 30px;
        '>
            <tr style='
                background: linear-gradient(90deg, #7c3aed, #2563eb);
                color: white;
            '>
                <th style='padding: 12px; border: 2px solid #22d3ee;'>Número</th>
                <th style='padding: 12px; border: 2px solid #22d3ee;'>Tipo</th>
                <th style='padding: 12px; border: 2px solid #22d3ee;'>Preço</th>
            </tr>

            <?php while($quarto = mysqli_fetch_assoc($resultado)){
                echo "<tr style='
                    background-color: #eef2ff;
                    color: #1e1b4b;
                '>";
                echo "<td style='padding: 12px; border: 2px solid #a78bfa;'>" . $quarto['numero'] . "</td>";
                echo "<td style='padding: 12px; border: 2px solid #a78bfa;'>" . $quarto['tipo'] . "</td>";
                echo "<td style='padding: 12px; border: 2px solid #a78bfa;'>R$ " . $quarto['preco_diaria'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <h2 style='
            background: linear-gradient(90deg, #4c1d95, #1d4ed8);
            border-radius: 10px;
            padding: 12px;
            border: 2px solid #a78bfa;
            color: #67e8f9;
            margin-bottom: 20px;
        '>
            📅 Fazer uma Reserva
        </h2>

        <form action="salvar_reserva.php" method="post" style='
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            border: 2px solid #a78bfa;
            text-align: left;
        '>

            <div style="margin-bottom: 15px;">
                <label for="id_cliente" style="color: #1e1b4b; font-weight: bold;">ID do Cliente 👤:</label><br>
                <input type="number" name="id_cliente" id="id_cliente" placeholder="Digite o ID do cliente" required style='
                    width: 100%; padding: 10px; border: 1px solid #a78bfa; border-radius: 5px; margin-top: 5px; box-sizing: border-box;
                '>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="id_quarto" style="color: #1e1b4b; font-weight: bold;">ID do Quarto 🚪:</label><br>
                <input type="number" name="id_quarto" id="id_quarto" placeholder="Digite o ID do quarto" required style='
                    width: 100%; padding: 10px; border: 1px solid #a78bfa; border-radius: 5px; margin-top: 5px; box-sizing: border-box;
                '>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="data_entrada" style="color: #1e1b4b; font-weight: bold;">Data de Entrada 🟢:</label><br>
                <input type="date" name="data_entrada" id="data_entrada" required style='
                    width: 100%; padding: 10px; border: 1px solid #a78bfa; border-radius: 5px; margin-top: 5px; box-sizing: border-box;
                '>
            </div>

            <div style="margin-bottom: 25px;">
                <label for="data_saida" style="color: #1e1b4b; font-weight: bold;">Data de Saída 🔴:</label><br>
                <input type="date" name="data_saida" id="data_saida" required style='
                    width: 100%; padding: 10px; border: 1px solid #a78bfa; border-radius: 5px; margin-top: 5px; box-sizing: border-box;
                '>
            </div>

            <div style="text-align: center;">
                <button type="submit" style='
                    background: linear-gradient(90deg, #7c3aed, #2563eb);
                    color: white;
                    padding: 12px 24px;
                    border-radius: 6px;
                    font-weight: bold;
                    font-size: 16px;
                    border: 2px solid #22d3ee;
                    cursor: pointer;
                    box-shadow: 0px 4px 10px rgba(34, 211, 238, 0.3);
                '>Confirmar Reserva</button>
            </div>

        </form>
    </div>

</body>
</html>