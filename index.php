<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>App Help Desk</title>
</head>
<body>
    <main>
        <form action="valida.php" method="POST">
            <div>
                <h1>Help Desk</h1>
            </div>
            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required>
            </div>
            <div>
                <input type="submit" value="LOGIN" class="btn-login">
            </div>
        </form>
        <?php
            //Condição para lançar login e senha inválidos:
            if(isset($_GET['login']) && $_GET['login'] == 'erro'){
                echo '<p class="erro">Usuário ou senha inválidos!</p>';
                }   
        ?>
    </main>
</body>
</html>