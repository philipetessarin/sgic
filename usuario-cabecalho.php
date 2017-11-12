<?php
    require_once ('cabecalho-base.php');
?>

        <div class="nav-content nav-center">
            <!--Novo Documento-->
            <a class="dropdown-button btn-floating btn-large halfway-fab  toolbar waves-effect waves-light teal #ff6f00 amber darken-4 left" data-beloworigin="true" data-constrainWidth='false' data-hover="true" data-gutter="-60"  data-activates='novo'>
                <i class="material-icons">add</i>
            </a>

            <!--Dropdown Novo Documento-->

            <ul id='novo' class='dropdown-content'>
                <li><a href="documento.php#agendamento" class="black-text"><i class="material-icons"></i>Agendamento</a></li>
                <li class="divider"></li>
                <li><a href="documento.php#requisicao" class="black-text">Requisição</a></li>
                <li class="divider"></li>
                <li><a href="documento.php#manutencao" class="black-text">Manutenção</a></li>
                <li class="divider"></li>
                <li><a href="documento.php#pbranco" class="black-text">Página em Branco</a></li>

            </ul>

            <!--Abas de navegação-->
            <ul class="tabs tabs-transparent" style="width:35em;" >
                <li class="tab"><a  class="active" href="#recebidos">RECEBIDOS</a></li>
                <li class="tab"><a href="#enviados">ENVIADOS</a></li>
                <li class="tab"><a href="#autorizados">AUTORIZADOS</a></li>
                <li class="tab"><a href="#rascunhos">RASCUNHOS</a></li>
              </ul>
        </div>
    </div>
</nav>
<br><br>


<?php require_once ('rodape.php');?>