<?php require_once ('cabecalho-base.php'); ?>

        <div class="nav-content nav-center">
            <!--Novo Documento-->
            <a class="dropdown-button btn-floating btn-large halfway-fab  toolbar waves-effect waves-light teal #ff6f00 amber darken-4 left" data-beloworigin="true" data-constrainWidth='false' data-hover="true" data-gutter="-70"  data-activates='novo'>
                <i class="material-icons">add</i>
            </a>

            <!--Dropdown Novo Documento-->

            <ul id='novo' class='dropdown-content'>
                <li><a href="cadastro.php#criarUsuario" class="black-text left"><i class="material-icons"></i>Cadastrar Usuário</a></li>
                <li><a href="cadastro.php#criarGrupo" class="black-text left"><i class="material-icons"></i>Cadastrar Grupo</a></li>
            </ul>

            <!--Abas de navegação-->
            <ul class="tabs tabs-transparent" style="width:20em;" >
                <li class="tab"><a  class="active" href="#usuarios">USUÁRIOS</a></li>
                <li class="tab"><a href="#grupos">GRUPOS</a></li>
            </ul>
        </div>
    </div>
</nav>

<?php
    mostraAlerta("success");
    mostraAlerta("danger");
?>

