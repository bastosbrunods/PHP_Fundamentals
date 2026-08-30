<?php
    session_start();

    //Se a variavél de sessão não existir significa que o usuário não passou pelo login
    //ou mesmo que a variavél exista, o valor dela deve ser 'SIM' para acessar essa página.

    if(!isset($_SESSION['AUTENTICADO']) || $_SESSION['AUTENTICADO'] == 'NÃO'){
        header('Location: index.php');
        exit;
    }
    //include('msg.php'); 
    /*
        include - em casa de erro, o include gera um warning (alerta), sem quebrar a aplicação;
        require - aqui é gerado um fatal error, assim quebrando a aplicação.

        include_once e require_once - se comportão da mesma forma como suas respectivas versões
        usadas acima como exemplo acima.
        
        O uso 'once' é para incluir / requerir o script desejado apenas uma vez,
        sem o once é feita várias inclusões / requisições.
    
    */
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Home - Help Desk</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Meus Chamados</a></li>
                <li><a href="#">Sair</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="menu-options">
            <a href="/novo.php">Novo</a>
            <a href="/consultar.php">Consultar</a>
        </div>
    </main>
</body>
</html>