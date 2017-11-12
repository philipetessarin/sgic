<?php
require_once('conecta.php');


function listaUsuarios($conexao) {
    $usuarios = array();
    $resultado = mysqli_query($conexao, "select u.*, g.nome as grupo_nome from usuarios as u join grupos as g on u.grupo_id = g.id order by grupo_nome, nome");

    while($usuario = mysqli_fetch_assoc($resultado)) {
        array_push($usuarios, $usuario);
    }

    return $usuarios;
}


function insereUsuario($conexao, $nome, $setor, $email, $senha, $grupo_id) {
    $nome = mysqli_real_escape_string($conexao, $nome);
    $setor = mysqli_real_escape_string($conexao, $setor);
    $email = mysqli_real_escape_string($conexao, $email);
    $senha = mysqli_real_escape_string($conexao, $senha);

    $query = "insert into usuarios (nome, setor, email, senha, grupo_id) values ('{$nome}', '{$setor}', '{$email}', '{$senha}', {$grupo_id})";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;

}

function buscaUsuario($conexao, $id) {
    $query = "select * from usuarios where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function buscaUsuarioLogin($conexao, $email, $senha) {
    $senhaMd5 = md5($senha);
    $email = mysqli_real_escape_string($conexao, $email);
    $query = "select * from usuarios where email='{$email}' and senha='{$senha}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}

function alteraUsuario($conexao, $id, $nome, $setor, $email, $senha, $grupo_id) {
    $query = "update usuarios set nome = '{$nome}', setor = '{$setor}', email = '{$email}', senha = '{$senha}', grupo_id = {$grupo_id}  where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

function removeUsuario($conexao, $id) {
    $query = "delete from usuarios where id = {$id}";
    return mysqli_query($conexao, $query);
}