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
                <!--<label for="about">About me</label>
                <input name="about" type="hidden">-->
                <textarea id="mensagem" name="mensagem">

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
            </div>
        </form>
    </div>
</div>
<br>
<br>
