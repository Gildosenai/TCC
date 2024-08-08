<?php
session_start();
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpfMatricula = $_POST['cpfMatricula'];
    $senha = $_POST['senha'];

    // Função para verificar login na tabela de funcionários
    function verificarLoginFuncionario($conn, $cpfMatricula, $senha) {
        $stmt = $conn->prepare("SELECT Matricula, Nome, DataDeNascimento, EmailCorporativo, PermissaoID, senha FROM funcionarios WHERE Matricula = ?");
        $stmt->bind_param("s", $cpfMatricula);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($matricula, $nome, $dataDeNascimento, $emailCorporativo, $permissaoID, $hashed_senha);
            $stmt->fetch();

            if (password_verify($senha, $hashed_senha)) {
                return array(
                    'Matricula' => $matricula,
                    'Nome' => $nome,
                    'DataDeNascimento' => $dataDeNascimento,
                    'EmailCorporativo' => $emailCorporativo,
                    'PermissaoID' => $permissaoID,
                    'TipoUsuario' => 'funcionario'
                );
            }
        }
        return false;
    }

    // Função para verificar login na tabela de clientes
    function verificarLoginUsuario($conn, $cpfMatricula, $senha) {
        $stmt = $conn->prepare("SELECT CPF, Nome, DataDeNascimento, Email, senha FROM clientes WHERE CPF = ?");
        $stmt->bind_param("s", $cpfMatricula);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($cpf, $nome, $dataDeNascimento, $email, $hashed_senha);
            $stmt->fetch();

            if (password_verify($senha, $hashed_senha)) {
                return array(
                    'CPF' => $cpf,
                    'Nome' => $nome,
                    'DataDeNascimento' => $dataDeNascimento,
                    'Email' => $email,
                    'PermissaoID' => 'user',  // Definindo uma permissão padrão para usuários
                    'TipoUsuario' => 'cliente'
                );
            }
        }
        return false;
    }

    // Verificar login na tabela de funcionários
    $usuario = verificarLoginFuncionario($conn, $cpfMatricula, $senha);

    if (!$usuario) {
        // Verificar login na tabela de clientes
        $usuario = verificarLoginUsuario($conn, $cpfMatricula, $senha);
    }

    if ($usuario) {
        $_SESSION['usuario'] = $usuario;
        if ($usuario['TipoUsuario'] == 'funcionario') {
            header("Location: home.php");
        } else {
            header("Location: homecliente.php");
        }
        exit();
    } else {
        $mensagem = "CPF/Matrícula ou Senha Inválida.";
        $redirecionar = "index.html";
        echo "<script>alert('$mensagem'); window.location.href ='$redirecionar';</script>";
    }

    $conn->close();
} else {
    echo "Please submit the form.";
}
?>