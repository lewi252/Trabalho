<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="Login_Estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <form action="processo.php" method="POST">
        <div class="nav-bar">
            <img src="d.png" alt="Logo">
            <img src="positivo.png" alt="Logo2">
        </div>

        <div class="formulario">
            <div class="form-group">
                <label for="Email">E-mail:</label>
                <input type="email" id="Email" name="Email" placeholder="Digite seu Email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Senha">Senha:</label>
                <input type="password" id="Senha" name="Senha" placeholder="Digite sua Senha" class="form-control" required>
            </div>

            <div class="Botão">
                <button type="submit" class="btn btn-success">Entrar</button>
            </div>

            <div class="Link">
                <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a></p>
            </div>
        </div>
    </form>
</body>

</html>