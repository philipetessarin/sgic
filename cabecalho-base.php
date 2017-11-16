<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once ('logica-usuario.php');
require_once('mostra-alerta.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SGIC</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Include CSS for icons. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
    <!--Materialize CSS-->
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body class="#e0e0e0 grey lighten-2">

<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!" class="#ff6f00 amber darken-4 white-text"><i class="material-icons">face</i>Perfil</a></li>
    <li class="divider"></li>
    <li><a href="logout.php" class="#ff6f00 amber darken-4 white-text"><i class="material-icons">exit_to_app</i>Sair</a></li>
</ul>

<!--Cabeçalho-->

<nav class="nav-extended navbar-fixed #212121 grey darken-4" style="padding-top: 20px">
    <div class="container">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"><img src="img/ceulp-logo.png"></a>

            <ul class="right hide-on-med-and-down">
                <!-- Dropdown Trigger -->
                <li>
                    <a class="dropdown-button" data-beloworigin="true" href="#!" data-activates="dropdown1"><i class="material-icons large left">person</i><?=usuarioLogado()?></a>
                </li>
            </ul>
        </div>