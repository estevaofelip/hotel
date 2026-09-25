
<?php
require_once 'conexao.php';

$id_cliente = $_POST['id_cliente'];
$id_quarto = $_POST['id_quarto'];
$data_entrada = $_POST['data_entrada'];
$data_saida = $_POST['data_saida'];

$sql = "INSERT INTO reservas (cliente_id, quarto_id)
VALUES('$id_cliente','$id_quarto','$data_entrada','$data_saida')";


$resultado = mysqli_query($conexao, $sql);

if(mysqli_query($resultado) > 0){
   header("minhas_reservas.php");
   exit();
}else{
   header("Location:ver_quartos.php");
exit();
}
?>
