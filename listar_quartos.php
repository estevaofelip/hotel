<?php

require_once 'conexao.php';

$sql = "SELECT * FROM quartos";

$resultado = mysqli_query($conexao, $sql);

if (!$resultado) {

    echo "Erro ao consultar: " . mysqli_error($conexao);

    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quartos</title>
</head>

<body style='
    text-align: center;
    margin: 0;
    padding: 20px;
    background: linear-gradient(135deg, #1e1b4b, #312e81, #1e40af);
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
        QUARTOS 🏨
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
        '>
            DADOS DOS QUARTOS
        </h2>

        <table style='
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
        '>

            <tr style='
                background: linear-gradient(90deg, #7c3aed, #2563eb);
                color: white;
            '>

                <th style='padding: 12px; border: 2px solid #22d3ee;'>
                    ID HOTEL
                </th>

                <th style='padding: 12px; border: 2px solid #22d3ee;'>
                    NÚMERO DO QUARTO
                </th>

                <th style='padding: 12px; border: 2px solid #22d3ee;'>
                    TIPO DO QUARTO
                </th>

                <th style='padding: 12px; border: 2px solid #22d3ee;'>
                    PREÇO DA DIÁRIA
                </th>

            </tr>

            <?php

            while ($quarto = mysqli_fetch_assoc($resultado)) {

                echo "<tr style='
                    background-color: #eef2ff;
                    color: #1e1b4b;
                '>";

                echo "<td style='padding: 12px; border: 2px solid #a78bfa;'>" 
                    . $quarto['hotel_id'] . 
                    "</td>";

                echo "<td style='padding: 12px; border: 2px solid #a78bfa;'>" 
                    . $quarto['numero'] . 
                    "</td>";

                echo "<td style='padding: 12px; border: 2px solid #a78bfa;'>" 
                    . $quarto['tipo'] . 
                    "</td>";

                echo "<td style='padding: 12px; border: 2px solid #a78bfa;'>" 
                    . "R$ " . $quarto['preco_diaria'] . 
                    "</td>";

                echo "</tr>";

            }

            ?>

        </table>

        <br>

        <a href='logout_hotel.php' style='
            background: linear-gradient(90deg, #7c3aed, #2563eb);
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            border: 2px solid #22d3ee;
        '>
            VOLTAR
            
        </a>
        <br>
        <br>
         <a href="cadastrar_quarto.html" style="color: red;">Clique aqui para ir para a tela de cadastro</a>


    </div>

</body>

</html>
