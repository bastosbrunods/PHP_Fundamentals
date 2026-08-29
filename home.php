<?php
    session_start();
    //Se a variavél de sessão não existir significa que o usuário não passou pelo login
    //ou mesmo que a variavél exista, o valor dela deve ser 'SIM' para acessar essa página.
    if(!isset($_SESSION['AUTENTICADO']) || $_SESSION['AUTENTICADO'] == 'NÃO'){
        header('Location: index.php');
        exit;
    }
    include('msg.php');
?>
