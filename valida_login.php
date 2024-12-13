<?php

    session_start();

    $usuario_autenticado = false;

    $usuarios_app =  array(
        array('email' => 'adm@tst.com','senha' => '123321'),
        array('email' => 'user@tst.com','senha' => '123321'),
    );

    foreach ($usuarios_app  as $user){

        $user['email'];
        $user['senha'];

        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
        }
    }

    if ($usuario_autenticado) {
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['x'] = '1';
        $_SESSION['y'] = '2';
        header('Location: home.php');
    } else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }
?>