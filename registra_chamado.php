<?php

session_start();

$texto = str_replace('#', '-', $_POST);
$texto = implode('#', $texto);

$arquivo = fopen('arquivo.txt', 'a');

fwrite($arquivo, $_SESSION['id']. '#' . $texto . PHP_EOL);
fclose($arquivo);

header('Location: abrir_chamado.php');
