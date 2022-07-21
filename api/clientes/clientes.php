<?php

if ($api == 'clientes') {

    if (Usuarios::verificar()) {
        if ($method == "GET") {
            include_once "get.php";
        }
    
        if ($method == "POST" && !isset($_POST['_method'])) {
            include_once "post.php";
        }

        if ($method == "POST" && isset($_POST['_method']) && $_POST['_method'] == "PUT") {
            include_once "put.php";
        }

        if ($method == "POST" && isset($_POST['_method']) && $_POST['_method'] == "DELETE") {
            include_once "delete.php";
        }
    } else {
        echo json_encode(['ERRO' => 'Você não está logado, ou seu token é inválido.']);
    }

}
