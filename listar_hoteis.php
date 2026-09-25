<?php

require_once 'conexao.php';

$sql = "SELECT * FROM hoteis";

$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - Hotéis</title>
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
        HOTÉIS CADASTRADOS 🏨
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
            📍 Lista de Hotéis
        </h2>

        <table style='
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
        '>

            <tr style='
                background: linear-gradient(90deg, #7c3aed, #2563eb);
                color: white;
            '>
                <th style='padding: 12px; border: 2px solid #22d3ee;'>Nome do Hotel</th>
                <th style='padding: 12px; border: 2px solid #22d3ee;'>Cidade</th>
                <th style='padding: 12px; border: 2px solid #22d3ee;'>Estrelas</th>
                <th style='padding: 12px; border: 2px solid #22d3ee;'>Ação</th>
            </tr>

            <?php
            while ($linha = mysqli_fetch_assoc($resultado)) {

                echo "<tr style='
                    background-color: #eef2ff;
                    color: #1e1b4b;
                '>";
                
                echo "<td style='padding: 12px; border: 2px solid #a78bfa;'>" . $linha['nome'] . "</td>";
                echo "<td style='padding: 12px; border: 2px solid #a78bfa;'>" . $linha['cidade'] . "</td>";
                echo "<td style='padding: 12px; border: 2px solid #a78bfa;'>" . $linha['estrelas'] . " ⭐</td>";
                
              
                echo "<td style='padding: 12px; border: 2px solid #a78bfa;'>
                        <a href='ver_quartos.php?id_hotel=" . $linha['id'] . "' style='
                            background: linear-gradient(90deg, #7c3aed, #2563eb);
                            color: white;
                            padding: 8px 16px;
                            border-radius: 6px;
                            text-decoration: none;
                            font-weight: bold;
                            border: 2px solid #22d3ee;
                            display: inline-block;
                            box-shadow: 0px 4px 10px rgba(34, 211, 238, 0.3);
                        '>Ver quartos</a>
                      </td>";
                      
                echo "</tr>";
            }
            ?>

        </table>

    </div>

</body>

</html>