<?php

require_once 'conexao.php';

$id_cliente   = $_POST['id_cliente'];
$id_quarto    = $_POST['id_quarto'];
$data_entrada = $_POST['data_entrada'];
$data_saida   = $_POST['data_saida'];
$total        = $_POST['total'];

$sql = "INSERT INTO reservas 
        (cliente_id, quarto_id, data_entrada, data_saida, total)
        VALUES 
        ('$id_cliente', '$id_quarto', '$data_entrada', '$data_saida', '$total')";

$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
  
    header("Location: minhas_reservas.php?status=sucesso");
    
    exit();

} else {

    echo "Erro ao salvar reserva: " . mysqli_error($conexao);
    echo"<a href='ver_quartos.php'>TENTE NOVAMENTE</a>";
}

?>