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
            <form class="col s12" action="executa-documento.php" method="post">
                <input type="hidden" name="id" value="<?=$documento['id']?>">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="remetente" type="text" class="validate" value="<?=$documento['remetente']?>" readonly>
                        <label for="remetente">De</label>
                    </div>
                    <div class="input-field col s6">
                        <select disabled name="destinatario_id">
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
                        <input id="titulo" type="text" class="validate" value="<?=$documento['titulo']?>" readonly>
                        <label for="titulo">Título</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="data_atual" type="text" class="validate" value="<?=$documento['data_atual']?>" readonly>
                        <label for="data_atual">Data</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <table class="tabs">
                            <th>
                                <td>
                                    <?=$documento['mensagem']?>
                                </td>
                            </th>
                        </table>
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
                    <a href="usuario-principal.php#recebidos" class="btn #ff6f00 amber darken-4">Voltar</a>
                    <!--<button class="btn #ff6f00 amber darken-4" type="submit">Executar</button>-->
                </div>
            </form>
        </div>
    </div>
