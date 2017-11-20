<?php
    require_once('adm-cabecalho.php');
    require_once ('banco-usuario.php');
    require_once('banco-grupo.php');

    $id = $_POST['id'];

    $checarGrupo = "select distinct id from grupos g where not exists (select * from usuarios where u.grupo_id = g.id)";
    $resultadoGrupo = mysqli_query($conexao, $checarGrupo);

    if($resultadoGrupo == false) {?>

        <p class="center red-text">O grupo <?=$usuarios['grupo_nome'];?> não pode ser removido pois existem usuários cadastrados.</p>
    <?php
        header("Location: adm-principal.php#grupos");
        die();
    } else {
        removeGrupo($conexao, $id);?>
        <p class="center green-text">O grupo <?=$usuarios['grupo_nome'];?> foi removido com sucesso.</p>
    <?php
        header("Location: adm-principal.php#grupos");
        die();
    }
?>


