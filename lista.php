<?php
// Incluir o arquivo de conexão
require_once 'conexao.php';

// Consulta SQL para obter as categorias
$sql = "SELECT Tipo, IP, link, link1, link2, link3, link4, link5, link6, link7, link8 FROM equipamentos";
$resultado = $conn->query($sql);

$categorias = array();

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $categorias[] = $row;
    }
}

// Fechar conexão
$conn->close();

// Retornar os resultados como JSON
echo json_encode($categorias);
?>
