<?php $proj = $project['project']; ?>
<h3 class="mb-3">Alterar dados do projeto</h3>
<form action="../controllers/form-handlers/alterar-dados-projeto.php" method="POST">
    <input type="hidden" name="integrante_id" value="<?= $proj['id']?>"/>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"><strong>Nome do projeto</strong></label>
        <div class="col-sm-8 mb-3">
            <input type="text" class="form-control"  value="<?= $proj["nome"]?>" name="nome_do_integrante" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"><strong>Turma</strong></label>
        <div class="col-sm-8 mb-3">
            <input type="text" class="form-control" disabled value="<?= $proj["turma"]?>" name="email_do_integrante" required>
        </div>
        
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"><strong>Resumo</strong></label>
        <div class="col-sm-8">
            <textarea class="form-control " rows="8"  name="resumo_do_projeto" required><?= $proj["resumo"]?></textarea>    
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"><strong>Data de exposição</strong></label>
        <div class="col-sm-8 mb-3">
            <input type="text" class="form-control" disabled 
                    value="<?= $proj["data_exposicao"] 
                    ? (new DateTime($proj["data_exposição"]))->format('d/m/Y')
                    : "data ainda não registrada";?>" name="email_do_integrante" required>
        </div>
        
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"><strong>Data de cadastro</strong></label>
        <div class="col-sm-8 mb-3">
            <input type="text" class="form-control" disabled 
                    value="<?= (new DateTime($proj["data_cadastro"]))->format("d/m/Y")?>" name="email_do_integrante" required>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-danger btn-block">Alterar</button>
        </div>
    </div>
</form>

<hr>
