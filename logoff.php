<?php

session_start();

//Remover indices do array de sessão
//unset()

//destruir a variável de sessão
//session_destroy()
session_destroy();
header("Location: index.php");
