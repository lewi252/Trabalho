<?php
    // Conexão com banco de dados
    $conexao = new PDO('mysql:host=localhost;dbname=trabalho', 'root', '');

    // Cria a SQL para Apagar o Produto
    $sql = "DELETE FROM clientes WHERE id = :id";

    // Verifica se existe ID na URL
    if (!isset($_POST['idCliente'])) {
        header("Location: index.php");
        exit;
    }

    // Preparar a SQL
    $con = $conexao->prepare($sql);

    // Executa a SQL com os parametros
    $con->execute([':id' => $_POST['idProduto']]);

    // Redireciona para a lista de produtos
    header("Location: listaProdutos.php?msg=Produto apagado com sucesso");
?>