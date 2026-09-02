<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "hotel_db";

$conexao = mysqli_connect($host,$usuario,$senha,$banco);

if($conexao){
    echo "Usuario conectado ao banco de dados";
} else{
    echo "Usuário não se conectou ao banco de dados";
}
?>