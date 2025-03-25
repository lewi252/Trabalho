<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Tela Inicial</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#Telefone').mask('(00) 00000-0000', {
                placeholder: '(__) _____-____'
            });
        });
    </script>
</head>

<body>

    <?php
    if (isset($_GET['msg'])) {
        $msg = htmlspecialchars($_GET['msg']); // Protege contra XSS
        echo "<div class='alert alert-info'>$msg</div>";
    }
    ?>

    <form action="armazena_clientes.php" method="POST">
        <div class="Barra-Inicial">
            <img src="d.png" alt="Logo">
            <img src="positivo.png" alt="Logo2">
        </div>

        <div class="formulario">
            <h1>Cadastro de Usuário</h1> <!-- Título do formulário -->
            <div class="form-group">
                <label for="Nome">Nome:</label>
                <input type="text" name="Nome" id="Nome" placeholder="Digite seu Nome" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" name="Email" id="Email" placeholder="Digite seu Email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Telefone">Telefone:</label>
                <input type="text" name="Telefone" id="Telefone" placeholder="Digite seu Telefone" class="form-control" maxlength="14" required>
            </div>

            <div class="form-group">
                <label for="Cidade">Cidade:</label>
                <input type="text" name="Cidade" id="Cidade" placeholder="Digite sua Cidade" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Senha">Senha:</label>
                <input type="password" name="Senha" id="Senha" placeholder="Digite sua Senha" class="form-control" required>
            </div>

            <div class="Botão">
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>

            <div class="Link">
                <p>Já tem uma conta? <a href="login.php">Faça login aqui</a></p>
            </div>
        </div>
    </form>
</body>

</html>