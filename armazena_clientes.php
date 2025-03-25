<?php
// Recebe as informações do formulário
$Nome = $_POST['Nome'];
$Email = $_POST['Email'];
$Telefone = $_POST['Telefone'];
$Cidade = $_POST['Cidade'];
$Senha = $_POST['Senha'];

// Variável para mensagem de retorno
$mensagem = '';

// Verifica se as informações estão corretas
if (empty($Nome) || empty($Email) || empty($Telefone) || empty($Cidade) || empty($Senha)) {
    $mensagem = "Todos os campos devem ser preenchidos"; // Mensagem de erro
    header("Location: cadastro.php?msg=$mensagem"); // Volta para a tela de cadastro
    exit; // Adiciona exit para garantir que o script não continue
}

// Conectar ao banco de dados
try {
    $conexao = new PDO('mysql:host=localhost;dbname=trabalho', 'root', '');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Cria a SQL para inserir o cliente
    $sql = "INSERT INTO clientes (
                Nome, 
                Email, 
                Telefone,
                Cidade,
                Senha
            ) VALUES (
                :Nome,
                :Email,
                :Telefone,
                :Cidade,
                :Senha
            )";

    // Prepara a SQL
    $state = $conexao->prepare($sql);

    // Executa a SQL
    $state->execute([
        ':Nome' => $Nome, // Corrigido para usar a variável correta
        ':Email' => $Email,
        ':Telefone' => $Telefone,
        ':Cidade' => $Cidade,
        ':Senha' => password_hash($Senha, PASSWORD_DEFAULT) // Armazenando a senha de forma segura
    ]);

    // Verificar se deu certo
    $armazenou = $conexao->lastInsertId();

    // Redirecionar para a tela de cadastro
    if ($armazenou) { // Se armazenou for verdadeiro
        $mensagem = "Usuário cadastrado com sucesso!";
        header("Location:cadastro.php?msg=$mensagem");
    } else { // Se armazenou for falso
        $mensagem = "Erro ao se cadastrar";
        header("Location: login.php?msg=$mensagem");
    }
} catch (PDOException $e) {
    // Captura erros de conexão ou execução
    $mensagem = "Erro: " . $e->getMessage();
    header("Location: cadastro.php?msg=$mensagem");
} finally {
    $conexao = null; // Fecha a conexão
}
?>