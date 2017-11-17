<?php
require_once('cadastro-cabecalho.php');
require_once ('banco-usuario.php');
require_once ('banco-grupo.php');
require_once ('logica-usuario.php');






$pesquisar = $_POST['pesquisar'];
$result_users = "select * from  usuarios  where nome like '%$pesquisar%' LIMIT 5";
$resultado_users = mysqli_query($conexao, $result_users);

?>

            <!--Abas de navegação-->
            <ul class="tabs tabs-transparent" style="width:20em;" >
                <li class="tab"><a  class="active" href="#pesquisarUsuario">RESULTADO DA PESQUISA</a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br>

    <div id="pesquisarUsuario" class="col s12 container">
        <?php require_once('usuario-grupo-pesquisa-lista.php');?>
    </div>


<?php require_once('rodape.php');?>