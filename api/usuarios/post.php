<?php

if ($acao == '' && $param == '') {
    echo json_encode(['ERRO' => 'Caminho nao encontrado!']); exit; 
}

if ($acao == 'login' && $param == '') {
    if ($_POST) {
        if (!$_POST['login'] OR !$_POST['senha']) {
            echo json_encode(['ERRO' => 'Falta informacoes!']); exit; 
        } else {
            Usuarios::login($_POST['login'], $_POST['senha']);
        }
    } else {
        echo json_encode(['ERRO' => 'Falta informacoes!']); exit; 
    }
    exit;
}
