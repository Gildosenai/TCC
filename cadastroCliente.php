<?php
require_once 'conexao.php'; // Certifique-se de que este arquivo contém a conexão correta com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $CPF = $_POST['CPF'];
    $nome = $_POST['Nome'];
    $dataDeNascimento = $_POST['DataDeNascimento'];
    $email = $_POST['Email'];
    $endereco = $_POST['Rua'];
    $numero = $_POST['Numero'];
    $bairro = $_POST['Bairro'];
    $complemento = $_POST['Complemento'];
    $telefone = $_POST['Telefone'];
    $senha = $_POST['senha'];
    $hashed_senha = password_hash($senha, PASSWORD_DEFAULT);

    // Preparar a consulta SQL para evitar injeção de SQL
    $stmt = $conn->prepare("INSERT INTO clientes (CPF, Nome, DataDeNascimento, Email, Rua, Numero, Bairro, Complemento, Telefone,  senha) VALUES (?, ?, ?, ?, ?,?, ?,?,?,?)");
    $stmt->bind_param("ssssssssss", $CPF, $nome, $dataDeNascimento, $email ,$rua, $numero, $bairro, $complemento, $telefone, $hashed_senha);

    if ($stmt->execute()) {
        $mensagem = "Cadastro de cliente realizado com sucesso!";
        $redirecionar = "home.php";
        echo "<script>alert('$mensagem');
        window.location.href ='$redirecionar';
        </script>";
        
    } else {
        $mensagem = "Erro ao cadastrar:".$stmt->error;
        $redirecionar = "home.php";
        echo "<script>alert('$mensagem');
        window.location.href ='$redirecionar';
        </script>";
       
    }

    $stmt->close();
    $conn->close();
} else {
    $mensagem = "Método de requisição inválido.";
    $redirecionar = "home.php";
    echo "<script>alert('$mensagem');
    window.location.href ='$redirecionar';
    </script>";
   
}
?>