<?php

session_start();

$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil = null;

$perfis =  array(1 => 'Administrativo', 2 => 'Usuário');

$usuarios_app =  array(
    array('id' => 1, 'email' => 'adm@tst.com', 'senha' => '123', 'perfil_id' => 1),
    array('id' => 2, 'email' => 'user@tst.com', 'senha' => '123','perfil_id' => 2),
    array('id' => 3, 'email' => '1@tst.com', 'senha' => '123', 'perfil_id' => 2),
    array('id' => 123, 'email' => '2@tst.com', 'senha' => '123', 'perfil_id' => 2),
);

foreach ($usuarios_app  as $user) {

    $user['email'];
    $user['senha'];

    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil = $user['perfil_id'];
    }
}

if ($usuario_autenticado) {
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil;
    header('Location: home.php');
} else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
}
