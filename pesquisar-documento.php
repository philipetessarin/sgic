<?php

    require_once('doc-cabecalho.php');
    require_once ('banco-documento.php');
    require_once ('logica-usuario.php');

$pesquisar = $_POST['pesquisar'];
$result_pesquisas = "select * from documentos where titulo like '%$pesquisar%' LIMIT 5";
$resultado_pesquisas = mysqli_query($conexao, $result_pesquisas);

?>

            <!--Abas de navegação-->
            <ul class="tabs tabs-transparent" style="width:20em;" >
                <li class="tab"><a  class="active" href="#pesquisarDocumento">RESULTADO DA PESQUISA</a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br>

    <div id="pesquisarDocumento" class="col s12 container">
        <?php require_once('documento-pesquisa-lista.php');?>
    </div>


<?php require_once('rodape.php');?>