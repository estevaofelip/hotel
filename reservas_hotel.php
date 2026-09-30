<?php
require_once 'conexao.php';

// Proteção básica contra SQL Injection (garante que o ID seja um número)
$hotel_id = isset($_GET['hotel_id']) ? intval($_GET['hotel_id']) : 0;

$sql = "SELECT reservas.id, 
            clientes.nome AS nome_cliente,
            hoteis.id AS hotel_id,
            clientes.telefone,
            quartos.numero,
            reservas.data_entrada,
            quartos.preco_diaria,
            reservas.data_saida
        FROM reservas 
        JOIN quartos ON reservas.quarto_id = quartos.id 
        JOIN clientes ON reservas.cliente_id = clientes.id 
        JOIN hoteis ON quartos.hotel_id = hoteis.id
        WHERE quartos.hotel_id = 1";
        
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Reservas</title>
    <style>
      
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --bg-color: #f4f7f6;
            --text-color: #333;
            --border-color: #e0e0e0;
        }

        /* Reset Básico */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }

        /* Container Principal */
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 1100px;
            overflow-x: auto; /* Tabela rolável em telas pequenas */
        }

        h2 {
            color: var(--primary-color);
            margin-bottom: 25px;
            text-align: center;
            font-size: 24px;
            border-bottom: 2px solid var(--secondary-color);
            padding-bottom: 10px;
            display: inline-block;
        }

        .header-container {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Estilização da Tabela */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
            white-space: nowrap;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid var(--border-color);
        }

        th {
            background-color: var(--primary-color);
            color: #ffffff;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        th:first-child { border-top-left-radius: 8px; }
        th:last-child { border-top-right-radius: 8px; }

        tr:hover {
            background-color: #f1f5f9;
            transition: background-color 0.2s ease;
        }

        /* Botão de Ação */
        .btn {
            display: inline-block;
            background-color: var(--secondary-color);
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.1s;
        }

        .btn:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        .empty-message {
            text-align: center;
            color: #7f8c8d;
            font-style: italic;
            padding: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header-container">
            <h2>Minhas Reservas Confirmadas</h2>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>ID do Hotel</th>
                    <th>Nome do Cliente</th>
                    <th>Telefone</th>
                    <th>Quarto</th>
                    <th>Diária</th>
                    <th>Check-in</th>
                    <th>Check-out</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($resultado && mysqli_num_rows($resultado) > 0) {
                    while($linha = mysqli_fetch_assoc($resultado)){
                        
                      
                        $data_entrada = date('d/m/Y', strtotime($linha['data_entrada']));
                        $data_saida = date('d/m/Y', strtotime($linha['data_saida']));
                        $diaria = number_format($linha['preco_diaria'], 2, ',', '.');

                        echo "<tr>
                            <td>{$linha['hotel_id']}</td>
                            <td>{$linha['nome_cliente']}</td>
                            <td>{$linha['telefone']}</td>
                            <td>{$linha['numero']}</td>
                            <td>R$ {$diaria}</td>
                            <td>{$data_entrada}</td>
                            <td>{$data_saida}</td>
                        </tr>";
                    }
                } else {
                  
                    echo "<tr><td colspan='7' class='empty-message'>Nenhuma reserva encontrada para este hotel no momento.</td></tr>";
                }
                ?>
            </tbody>
        </table>
        
        <div style="text-align: center;">
            <a href="listar_hoteis.php" class="btn">Voltar para a Lista de Hotéis</a>
            <br>
            <br>
              <a href="logout_hotel.php" class="btn" >sair</a>
        </div>
        </div>
    </div>

</body>
</html>