<?php

if ($acao == '' && $param == '') { echo json_encode(['ERRO' => 'Caminho não encontrado!']); exit; }

if ($acao == 'delete' && $param == '') { echo json_encode(['ERRO' => "É necessário informar um cliente."]); exit; }

if ($acao == 'delete' && $param != '') {

    $db = DB::connect();
    $rs = $db->prepare("DELETE FROM clientes WHERE id={$param}");
    $exec = $rs->execute();

    if ($exec) {
        echo json_encode(["dados" => 'Dados foram excluidos com sucesso.']);
    } else {
        echo json_encode(["dados" => 'Houve algum erro ao excluir os dados.']);
    }
}