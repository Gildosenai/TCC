<?php
// lista.php
$ip = isset($_GET['ip']) ? $_GET['ip'] : '';
$ip = htmlspecialchars($ip);

// Conectar ao banco de dados
$mysqli = new mysqli("localhost", "root", "tcc123", "tcc");

// Verificar a conexão
if ($mysqli->connect_error) {
    http_response_code(500); // Definir código de status HTTP 500
    echo json_encode(['error' => 'Falha na conexão com o banco de dados']);
    exit();
}

// Preparar a consulta
$stmt = $mysqli->prepare("SELECT * FROM equipamentos WHERE IP = ?");
$stmt->bind_param("s", $ip);
$stmt->execute();
$result = $stmt->get_result();

// Fetch all results
$data = $result->fetch_all(MYSQLI_ASSOC);

// Retornar dados como JSON
header('Content-Type: application/json');
echo json_encode($data);

// Fechar a conexão
$stmt->close();
$mysqli->close();
?>