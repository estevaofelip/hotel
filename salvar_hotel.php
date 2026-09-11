<?php

$texto = $_POST['texto'];
$cidade = $_POST['cidade'];
$avaliacao = $_POST['avaliacao'];

echo "<h1>Hotel cadastrado!</h1>";

echo "Nome do Hotel: " . $texto . "<br>";
echo "Cidade: " . $cidade . "<br>";
echo "Estrelas: " . $avaliacao . "<br>";

echo "<br>";
echo "<a href='cadastro_hotel.html'>Voltar</a>";

?>