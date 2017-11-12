<?php
require_once ('conecta.php');
require_once ('banco-usuario.php');
require_once ('banco-grupo.php');
require_once ('banco-documento.php');

$id = $_POST['id'];
$documento = buscaDocumento($conexao, $id);

$usuarios = listaUsuarios($conexao);
?>



    <div class="container black-text">
        <div id="form-container">
            <form class="col s12" action="altera-documento.php" method="post">
                <input type="hidden" name="id" value="<?=$documento['id']?>">
                <div class="row">
                    <div class="input-field col s5">
                        <input id="remetente" type="number" class="validate" value="<?=$documento['remetente_id']?>" required>
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
                                    <?=$usuario['email']?>
                                </option>
                            <?php endforeach ?>
                        </select>
                        <label>Destinatário</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="titulo" type="text" class="validate" value="<?=$documento['titulo']?>" required>
                        <label for="titulo">Título</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="data" type="text" class="validate" value="<?=$documento['data_atual']?>" disabled>
                        <label for="data">Data</label>
                    </div>
                </div>
                <div class="row form-group">
                    <!--<label for="about">About me</label>
                    <input name="about" type="hidden">-->
                    <div id="editor-container">
                        <?=$documento['mensagem']?>
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
                <div class="row center">
                    <a href="usuario-principal.php" class="btn #ff6f00 amber darken-4">Cancelar</a>
                    <button class="btn #ff6f00 amber darken-4" type="submit">Alterar</button>
                </div>
            </form>
        </div>
    </div>

<?php
require_once ('rodape.php');
?>