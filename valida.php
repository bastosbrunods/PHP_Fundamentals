<?php

    //iniciando uma sessão
    session_start();

    //simulando um banco de usuários
    $usuarios = array(
        array('email' => "bastos@teste.com.br", 'senha' => "123"),
        array('email' => "musa@teste.com.br", 'senha' => "456"),
    );

    //capiturando os valores inputados no form/html e enviados via url/post
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //variavel de controle para redirecionamento de login
    $loginValido = false; 

    //percorendo o array simulção de banco de dados e comparando com o recebido via url/post 
    foreach($usuarios as $user){

        //caso encontrado, a variavel de controle de login vai ser true
        if($user['email'] == $email && $user['senha'] == $senha){
            $loginValido = true;
            break;
        }
    }
    
    //implementando logica para login com a variavél de controle sendo true ou false
    if($loginValido){
        $_SESSION['AUTENTICADO'] = 'SIM';
        header('Location: home.php');
    } else{
        /*ainda sendo falsa após a tentativa de login, seta uma superglobal com valor 'erro',
        para ser usada no HTML principal e informar o erro de forma amigavél ao usuário.*/
        $_SESSION['AUTENTICADO'] = 'NÃO';
        header('Location: index.php?login=erro');
        exit;
    }
?>

