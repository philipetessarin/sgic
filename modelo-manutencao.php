<?php
    session_start();
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
                        <input id="titulo" type="text" class="validate" name="titulo" required>
                        <label for="titulo">Título</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="data_atual" type="text" class="validate" name="data_atual" required>
                        <label for="data_atual">Data</label>
                    </div>
                </div>
                <div class="row">
                    <!--<label for="about">About me</label>
                    <input name="about" type="hidden">-->
                    <textarea id="mensagem" name="mensagem">
                        <p style="text-align: center;"><strong><span style="font-size: 18px; font-family: Verdana, Geneva, sans-serif;">SOLICITA&Ccedil;&Atilde;O DE MANUTEN&Ccedil;&Atilde;O</span></strong></p>

                        <p>
                            <br>
                        </p>

                        <p><span style="font-family: Verdana,Geneva,sans-serif;"><span style="font-size: 14px;">Tipo de manuten&ccedil;&atilde;o:&nbsp;</span></span>
                        </p>

                        <p><span style="font-family: Verdana,Geneva,sans-serif;"><span style="font-size: 14px;"><strong>Corretiva () &nbsp; &nbsp;</strong></span></span><span style="font-family: Verdana,Geneva,sans-serif;"><span style="font-size: 14px;"><strong>Preventiva () &nbsp; &nbsp; Modifica&ccedil;&atilde;o ()</strong></span></span>
                        </p>
                        <hr>

                        <p><span style="font-family: Verdana,Geneva,sans-serif;"><span style="font-size: 14px;">Pr&eacute;dio:&nbsp;</span></span>
                        </p>
                        <hr>

                        <p>Sala:&nbsp;</p>
                        <hr>

                        <p>Setor:&nbsp;</p>
                        <hr>

                        <p>Telefone/Ramal:&nbsp;</p>
                        <hr>

                        <p>Especifica&ccedil;&atilde;o:&nbsp;</p>
                        <hr>
                    </textarea>
                    <label for="mensagem"></label>
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
                    <input class="btn btn-primary #ff6f00 amber darken-4" type="submit" name="save" value="Salvar">
                    <input class="btn btn-primary #ff6f00 amber darken-4" type="submit" name="submit" value="Enviar">
                    <!--<button class="btn btn-primary #ff6f00 amber darken-4" type="submit" name="save">Salvar</button>
                    <button class="btn btn-primary #ff6f00 amber darken-4" type="submit" name="submit">Enviar</button>-->
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
