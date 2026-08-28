<?php

    $usuarios = array(
        array('email' => "bastos@teste.com.br", 'senha' => "123"),
        array('email' => "musa@teste.com.br", 'senha' => "456"),
    );

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $loginValido = false;

    foreach($usuarios as $user){

        if($user['email'] == $email && $user['senha'] == $senha){
            $loginValido = true;
            break;
        }
    }

    if($loginValido){
        echo 'Login realizado com sucesso!';
    } else{
        header('Location: index.php?login=erro');
        exit;
    }

?>

