<?php
    $usuarios = listaUsuarios($conexao);
?>
<div class="black-text">
    <div id="form-container">
        <form class="col s12" action="adiciona-documento.php" method="post">
            <div class="row">
                <div class="input-field col s6">
                    <input id="remetente" type="text" class="validate" name="remetente"  value="<?=usuarioLogado()?>" readonly>
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
                    <input id="titulo" type="text" class="validate" name="titulo">
                    <label for="titulo">Título</label>
                </div>
                <div class="input-field col s6">
                    <input id="data_atual" type="text" class="datepicker" name="data_atual" required>
                    <label for="data_atual">Data</label>
                </div>
            </div>
            <div class="row">
                <textarea id="mensagem" name="mensagem">
                    <p style="text-align: center;"><strong>REQUISI&Ccedil;&Atilde;O DE MATERIAL</strong></p>

                    <table class="fr-alternate-rows" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="fr-thick" style="width: 15.0415%; background-color: rgb(209, 213, 216);">QUANTIDADE
                                    <br>
                                </th>
                                <th class="fr-thick" style="width: 84.853%; background-color: rgb(209, 213, 216);">
                                    <div style="text-align: center;">&nbsp;DISCRIMINA&Ccedil;&Atilde;O</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fr-thick" style="width: 15.0415%;">
                                    <div data-empty="true">
                                        <br>
                                    </div>
                                </td>
                                <td class="fr-thick" style="width: 84.853%;">
                                    <div data-empty="true">
                                        <br>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fr-thick" style="width: 15.0415%;">
                                    <div data-empty="true">
                                        <br>
                                    </div>
                                </td>
                                <td class="fr-thick" style="width: 84.853%;">
                                    <div data-empty="true">
                                        <br>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fr-thick" style="width: 15.0415%;">
                                    <div data-empty="true">
                                        <br>
                                    </div>
                                </td>
                                <td class="fr-thick" style="width: 84.853%;">
                                    <div data-empty="true">
                                        <br>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fr-thick" style="width: 15.0415%;">
                                    <div data-empty="true">
                                        <br>
                                    </div>
                                </td>
                                <td class="fr-thick" style="width: 84.853%;">
                                    <div data-empty="true">
                                        <br>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fr-thick" style="width: 15.0415%;">
                                    <div data-empty="true">
                                        <br>
                                    </div>
                                </td>
                                <td class="fr-thick" style="width: 84.853%;">
                                    <div data-empty="true">
                                        <br>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <p>
                        <br>
                    </p>

                    <p>
                        <br>
                    </p>

                    <p style="text-align: center;">
                        <br>
                    </p>

                </textarea>
                <label for="mensagem"></label>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <select name="autorizacao_id">
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
            <div class="row right">
                <input class="btn btn-primary #ff6f00 amber darken-4" type="submit" name="save" value="Salvar">
                <input class="btn btn-primary #ff6f00 amber darken-4" type="submit" name="autorize" value="Enviar para Autorização">
                <input class="btn btn-primary #ff6f00 amber darken-4" type="submit" name="submit" value="Enviar">
            </div>
        </form>
    </div>
</div>
<br>
<br>
