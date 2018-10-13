<?php

?>
<form action="../controllers/form-handlers/cadastro-de-projetos.php" method="post">
      <input type="hidden" name="nome_do_projeto" value="<?=$_POST['nome_do_projeto']?>">
    <input type="hidden" name="turma_do_projeto" value="<?=$_POST['turma_do_projeto']?>">
    <input type="hidden" name="resumo_do_projeto" value="<?=$_POST['resumo_do_projeto']?>">

    <?php
    for ($i = 0; $i < filter_input(INPUT_POST, 'numero_de_participantes'); $i ++) {
        ?>
        <h3>participante <?= ($i + 1) ?></h3>
        <div class="form-group row">
            <label for="inputNomeParticipante" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  placeholder="nome do participante" name="nome_participante[]" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputNomeParticipante" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control"  placeholder="email do participante" name="email_participante[]" required>
            </div>
        </div>
        <?php
    }
    ?>


    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
</form>