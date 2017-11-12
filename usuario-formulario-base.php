<div class="row ">
    <div class="input-field col s6">
        <input id="first_name" type="text" class="validate" name="nome" value="<?=$usuario['nome']?>" required>
        <label class="active" for="first_name">Nome</label>
    </div>
    <div class="input-field col s6">
        <select required name="grupo_id">
            <option value="" disabled selected>Escolha uma opção</option>
            <?php foreach($grupos as $grupo) :
                $essaEhACategoria = $usuario['grupo_id'] == $grupo['id'];
                $selecao = $essaEhACategoria ? "selected='selected'" : "";
                ?>
                <option value="<?=$grupo['id']?>" <?=$selecao?>>
                    <?=$grupo['nome']?>
                </option>
            <?php endforeach ?>
        </select>
        <label>Grupo</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s6">
        <input id="email" type="email" class="validate" name="email" value="<?=$usuario['email']?>" required>
        <label for="email">Email</label>
    </div>
    <div class="input-field col s6">
        <input id="password" type="password" class="validate" name="senha" value="<?=$usuario['senha']?>" required>
        <label for="password">Senha</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s6">
        <input id="setor" type="text" class="validate" name="setor" value="<?=$usuario['setor']?>" required>
        <label for="setor">Setor</label>
    </div>
</div>