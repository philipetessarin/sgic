<?php
require_once ('conecta.php');
function listaDocumentos($conexao) {
    $documentos = array();
    $resultado = mysqli_query($conexao, "select d.*,u.nome as destinatario_nome  from documentos as d join usuarios as u on u.id = d.destinatario_id");

    while($documento = mysqli_fetch_assoc($resultado)) {
        array_push($documentos, $documento);
    }

    return $documentos;
}

function insereDocumento($conexao, $remetente, $destinatario, $data, $titulo, $mensagem, $btnStatus) {
    $remetente = mysqli_real_escape_string($conexao, $remetente);
    $destinatario = mysqli_real_escape_string($conexao, $destinatario);
    $data = mysqli_real_escape_string($conexao, $data);
    $titulo = mysqli_real_escape_string($conexao, $titulo);
    $mensagem = mysqli_real_escape_string($conexao, $mensagem);
    $query = "insert into documentos (remetente, destinatario_id, data_atual, titulo, mensagem, btn_status) values ('{$remetente}', {$destinatario}, '{$data}', '{$titulo}', '{$mensagem}', {$btnStatus})";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}


function buscaDocumento($conexao, $id) {
    $query = "select * from documentos where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}


function alteraDocumento($conexao, $id, $remetente, $destinatario, $data, $titulo, $mensagem, $btnStatus) {
    $query = "update documentos set remetente = '{$remetente}', destinatario_id = '{$destinatario}', data_atual = '{$data}', titulo = '{$titulo}', mensagem = '{$mensagem}', btn_status = '{$btnStatus}'  where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

function removeDocumento($conexao, $id) {
    $query = "delete from documentos where id = {$id}";
    return mysqli_query($conexao, $query);
}


