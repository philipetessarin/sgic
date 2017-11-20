<?php
require_once ('conecta.php');
require_once ('banco-usuario.php');
require_once ('banco-grupo.php');
require_once ('banco-documento.php');

$id = $_POST['id'];
$documento = buscaDocumento($conexao, $id);
$usuarios = listaUsuarios($conexao);


?>



    <div class="black-text">
        <div id="form-container">
            <form class="col s12" action="altera-documento.php" method="post">
                <input type="hidden" name="id" value="<?=$documento['id']?>">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="remetente" type="text" class="validate" name="remetente" value="<?=usuarioLogado()?>" required readonly>
                        <label for="remetente">De</label>
                    </div>
                    <div class="input-field col s6">
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
                        <label>Para</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="titulo" type="text" class="validate" name="titulo" value="<?=$documento['titulo']?>" required>
                        <label for="titulo">Título</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="data_atual" type="text" class="datepicker" name="data_atual" value="<?=$documento['data_atual']?>" required>
                        <label for="data_atual">Data</label>
                    </div>
                </div>
                <div class="row">
                    <textarea id="mensagem" name="mensagem">
                        <?=$documento['mensagem']?>
                    </textarea>
                    <label for="mensagem"></label>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select  name="autorizacao_id">
                            <option value="null" selected>Nenhum</option>
                            <?php foreach($usuarios as $usuario) :
                                $essaEhACategoria = $documento['autorizacao_id'] == $usuario['id'];
                                $selecao = $essaEhACategoria ? "selected='selected'" : "";
                                ?>
                                <option value="<?=$usuario['id']?>" <?=$selecao?>>
                                    <?=$usuario['nome']?>
                                </option>
                            <?php endforeach ?>
                        </select>
                        <label>Autorização</label>
                    </div>
                </div>
                <div class="row center">
                    <a href="usuario-principal.php" class="btn #ff6f00 amber darken-4">Cancelar</a>
                    <input class="btn btn-primary #ff6f00 amber darken-4" type="submit" name="save" value="Salvar">
                    <input class="btn btn-primary #ff6f00 amber darken-4" type="submit" name="autorize" value="Enviar para Autorização">
                    <input class="btn btn-primary #ff6f00 amber darken-4" type="submit" name="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>

