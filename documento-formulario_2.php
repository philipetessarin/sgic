<?php
    require_once ('conecta.php');
    require_once ('logica-usuario.php');
    require_once ('banco-usuario.php');
    require_once ('banco-grupo.php');
    require_once ('banco-documento.php');

    $usuarios = listaUsuarios($conexao);
?>



    <div class="container black-text">
        <div id="form-container">
            <form class="col s12" action="adiciona-documento.php" method="post">
                <div class="row">
                    <div class="input-field col s5">
                        <input id="remetente" type="text" class="validate"  value="<?=usuarioLogado()?>">
                        <label for="remetente">Nome</label>
                    </div>
                    <div class="input-field col s7">
                        <select required name="destinatario_id">
                            <option value="" disabled selected>Escolha uma opção</option>
                            <?php foreach($usuarios as $usuario) :
                                $essaEhACategoria = $documento['destinatario_id'] == $usuario['id'];
                                $selecao = $essaEhACategoria ? "selected='selected'" : "";
                                ?>
                                <option value="<?=$usuario['id']?>" <?=$selecao?>>
                                    <?=$usuario['nome']?>
                                </option>
                            <?php endforeach ?>
                        </select>
                        <label>Destinatário</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="titulo" type="text" class="validate">
                        <label for="titulo">Título</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="data" type="date" class="validate">
                    </div>
                </div>
                <div class="row form-group">
                    <!--<label for="about">About me</label>
                    <input name="about" type="hidden">-->
                    <div id="editor-container">
                        <?php require_once ('modelo-manutencao.php');?>
                    </div>
                </div>
                <div class="row">
                    <div class="switch col s6 inline">
                        Autorização:
                        <label>
                            Não
                            <input type="checkbox">
                            <span class="lever"></span>
                            Sim
                        </label>
                    </div>
                </div>
                <div class="row right">
                    <button class="btn btn-primary #ff6f00 amber darken-4" type="submit">Salvar</button>
                    <button class="btn btn-primary #ff6f00 amber darken-4" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>

<?php
    require_once ('rodape.php');
?>