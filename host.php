<?php
require_once 'conexao.php';

$sql = "SELECT * FROM links_principais";  // Selecionar todas as colunas da tabela
$resultado = $conn->query($sql);

$link = array();

if ($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $link[] = $row;
    }
}

$conn->close();

echo json_encode($link);
?>

