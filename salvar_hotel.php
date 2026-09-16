
<?php
include 'conexao.php';

$texto = $_POST['texto'];
$cidade = $_POST['cidade'];
$avaliacao = $_POST['avaliacao'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO hoteis (nome,cidade,estrelas,email,senha)
VALUES('$texto','$cidade','$avaliacao','$email','$senha')";

$resultado = mysqli_query($conexao,$sql);

if (!$resultado){
    echo "erro ao cadastrar" . mysqli_error($conexao);
exit;
}

?>  
<!DOCTYPE html>
<html lang='pt-BR'>

<head>
    <meta charset='UTF-8'>
    <title>Hotel cadastrado</title>
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
        Hotel cadastrado! 🏨
    </h1>

    <div style='
        border: 3px solid #22d3ee;
        background: linear-gradient(145deg, #eef2ff, #ddd6fe);
        padding: 20px;
        max-width: 400px;
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
            DADOS DO HOTEL
        </h2>

        <p><b>Nome do Hotel:</b> <?php
        
        echo $texto

        ?></p>

        <p><b>Cidade:</b> <?php
        
        echo $cidade

        ?></p>

        <p><b>Estrelas:</b> ⭐ <?php
        
        echo $avaliacao

        ?></p>

 <p><b>email:</b> <?php
        
        echo $email

        ?></p>
 <p><b>senha:</b> <?php
        
        echo "🔒🔒🔒🔒"

        ?></p>




        <br>

        <a href='cadastro_hotel.html' style='
            background: linear-gradient(90deg, #7c3aed, #2563eb);
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        '>
            VOLTAR
        </a>

    </div>

</body>

</html>

