<?php
require_once ('conecta.php');
function listaGrupos($conexao) {
    $grupos = array();
    $query = "select * from grupos order by nome";
    $resultado = mysqli_query($conexao, $query);
    while($grupo = mysqli_fetch_assoc($resultado)) {
        array_push($grupos, $grupo);
    }
    return $grupos;
}

function insereGrupo($conexao, $nome, $descricao) {
    $nome = mysqli_real_escape_string($conexao, $nome);
    $descricao = mysqli_real_escape_string($conexao, $descricao);
    $query = "insert into grupos (nome, descricao) values ('{$nome}', '{$descricao}')";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

function buscaGrupo($conexao, $id) {
    $query = "select * from grupos where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function alteraGrupo($conexao, $id, $nome, $descricao) {
    $query = "update grupos set nome = '{$nome}', descricao = '{$descricao}'  where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

function removeGrupo($conexao, $id) {
    $query = "delete from grupos where id = {$id}";
    return mysqli_query($conexao, $query);
}