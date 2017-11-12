<?php
    error_reporting(E_ALL ^ E_NOTICE);
    require_once('logica-usuario.php');
    require_once('mostra-alerta.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SGIC - Login</title>
	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Materialize CSS-->
	<link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" href="css/custom.css">
</head>

<?php
    mostraAlerta("success");
    mostraAlerta("danger");
?>



<?php if(usuarioEstaLogado()) {?>
    <p class="green-text center">Você está logado como <?=usuarioLogado()?>.</p>

<?php
    header( 'refresh: 1; url= "adm-principal.php"' );
    } else { ?>

<body class="#e0e0e0 grey lighten-2">

	<div class="container" style="padding-top: 100px">
	 <div class="row valign-wrapper">
         <div class="col s6 offset-s3 valign">
           <div class="card #212121 grey darken-4">
             <div class="card-content white-text">
             	<span class="card-title center"><strong>SGIC</strong></span>
             	<p class="center">Sistema de Gerenciamento Interno de Comunicação</p>
               <div class="row">
                   <form action="login.php" method="post" class="col s12">
                        <div class="row">
                            <div class="input-field col s12 white-text">
                                <input id="email" type="email" class="validate" name="email">
                                <label for="email" data-error="email incorreto. Ex. example@mail.com" data-success="Email válido">Seu email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate" name="senha">
                                <label for="password">Senha</label>
                            </div>
                        </div>
                        <a href="#" class="white-text">Esqueceu a senha?</a>
                        <div class="row">
                           <div class="card-action center">
                               <button class="btn #ff6f00 amber darken-4">Entrar</button>
                               <!--<a class="btn #ff6f00 amber darken-4">Entrar</a>-->
                           </div>
                        </div>
                   </form>
                </div>

             </div>

           </div>
         </div>
   	</div>
   </div>


<!--Materialize JS-->
  <script src="js/jquery-3.2.1.js"></script>
  <script src="js/materialize.js"></script>
  
  <script>
    $(document).ready(function(){
       $('.collapsible').collapsible();

     });
  </script>
  </body>
</html>

<?php }?>