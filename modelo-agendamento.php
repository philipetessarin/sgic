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
                    <input id="data_atual" type="text" class="validate" name="data_atual">
                    <label for="data_atual">Data</label>
                </div>
            </div>
            <div class="row">
                <!--<label for="about">About me</label>
                <input name="about" type="hidden">-->
                <textarea id="mensagem" name="mensagem">
                    <p style="text-align: center;"><strong><span style="font-size: 18px;">SOLICITA&Ccedil;&Atilde;O DE AGENDAMENTO</span></strong></p>

                    <table class="fr-alternate-rows" style="width: 100%;">
                        <tbody>
                            <tr>
                                <td style="width: 11.877%;"><strong>Pr&eacute;dio:</strong></td>
                                <td style="width: 38.4395%;">
                                    <br>
                                </td>
                                <td style="width: 10.654%;"><strong>Sala:</strong></td>
                                <td style="width: 38.7131%;">
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 11.877%; background-color: rgb(209, 213, 216);"><strong>Recorr&ecirc;ncia:</strong></td>
                                <td colspan="3" style="width: 87.6583%; background-color: rgb(209, 213, 216);">Semanal ( ) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Mensal( &nbsp;) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Trimestral ( &nbsp;) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Semestral ( ) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Anual( )</td>
                            </tr>
                            <tr>
                                <td style="width: 11.877%;"><strong>Data in&iacute;cio:</strong></td>
                                <td style="width: 38.4395%;">
                                    <br>
                                </td>
                                <td style="width: 10.654%;"><strong>Data final:</strong></td>
                                <td style="width: 38.7131%;">
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 11.877%; background-color: rgb(209, 213, 216);"><strong>Hora in&iacute;cio:</strong></td>
                                <td style="width: 38.4395%; background-color: rgb(209, 213, 216);">
                                    <br>
                                </td>
                                <td style="width: 10.654%; background-color: rgb(209, 213, 216);"><strong>Hora final:</strong></td>
                                <td style="width: 38.7131%; background-color: rgb(209, 213, 216);">
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 11.877%;"><strong>Coment&aacute;rios:</strong>&nbsp;</td>
                                <td colspan="3" style="width: 87.6583%;">
                                    <br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
                <button class="btn btn-primary #ff6f00 amber darken-4" type="submit">Salvar</button>
                <button class="btn btn-primary #ff6f00 amber darken-4" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>
<br>
<br>
