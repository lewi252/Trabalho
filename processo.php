<?php
session_start();

// Conexão com o banco de dados
$conn = new mysqli('localhost', 'root', '', 'trabalho');

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Email = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
    $Senha = $_POST['Senha'];

    // Verifica se o e-mail e a senha não estão vazios
    if (empty($Email) || empty($Senha)) {
        echo "<script>alert('Por favor, preencha todos os campos.'); window.history.back();</script>";
        exit();
    }

    // Prepara a consulta para verificar o e-mail
    $stmt = $conn->prepare("SELECT Senha FROM clientes WHERE Email = ?");
    if (!$stmt) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    // Verifica se o e-mail existe e se a senha está correta
    if ($stmt->num_rows > 0 && password_verify($Senha, $hashed_password)) {
        $_SESSION['email'] = $Email; // Armazena o e-mail na sessão
        header("Location: 1_Tela.php"); // Redireciona para a página do painel
        exit();
    } else {
        echo "<script>alert('E-mail ou senha incorretos!'); window.history.back();</script>";
        header("Location: login.php");
    }
}
?>