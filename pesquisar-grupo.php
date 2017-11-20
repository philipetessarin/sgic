<?php

    require_once('cadastro-cabecalho.php');
    require_once ('banco-usuario.php');
    require_once ('logica-usuario.php');

$pesquisar = $_POST['pesquisar'];
$result_groups = "select * from  grupos  where nome like '%$pesquisar%' LIMIT 5";
$resultado_groups = mysqli_query($conexao, $result_groups);

?>

            <!--Abas de navegação-->
            <ul class="tabs tabs-transparent" style="width:20em;" >
                <li class="tab"><a  class="active" href="#pesquisarGrupo">RESULTADO DA PESQUISA</a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br>

    <div id="pesquisarGrupo" class="col s12 container">
        <?php require_once('grupo-pesquisa-lista.php');?>
    </div>


<?php require_once('rodape.php');?>