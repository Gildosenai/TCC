<?php
require_once 'conexao.php'; // Certifique-se de que este arquivo contém a conexão correta com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST['Matricula'];
    $nome = $_POST['Nome'];
    $dataDeNascimento = $_POST['DataDeNascimento'];
    $emailCorporativo = $_POST['EmailCorporativo'];
    $permissao_id = $_POST['permissoes'];
  
    $senha = $_POST['senha'];
    $hashed_senha = password_hash($senha, PASSWORD_DEFAULT);

    // Preparar a consulta SQL para evitar injeção de SQL
    $stmt = $conn->prepare("INSERT INTO funcionarios (Matricula, Nome, DataDeNascimento, EmailCorporativo, permissao_id, senha) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssis", $matricula, $nome, $dataDeNascimento, $emailCorporativo , $permissao_id, $hashed_senha);

    if ($stmt->execute()) {
        $mensagem = "Cadastro de funcionario realizado com sucesso!";
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