<h3 class="mb-3">Alterar dados dos participantes</h3>
<?php
foreach($project['members'] as $member){
?>
<form action="../controllers/form-handlers/alterar-dados-participantes.php" method="POST">
    <input type="hidden" name="integrante_id" value="<?= $member['id']?>"/>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"><strong>Nome do Integrante</strong></label>
        <div class="col-sm-8 mb-3">
            <input type="text" class="form-control"  value="<?= $member["nome"]?>" name="nome_do_integrante" required>
        </div>
        <?php
        if ($member["lider"] == '1'){
            ?>
        
        <label class="col-sm-2 col-form-label"><strong>Lider do projeto</strong></label> 
        
            <?php
        }
        ?>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"><strong>Email do Integrante</strong></label>
        <div class="col-sm-8 mb-3">
            <input type="email" class="form-control"  value="<?= $member["email"]?>" name="email_do_integrante" required>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-danger btn-block">Alterar</button>
        </div>
    </div>
</form>
<?php
}
?>
<hr>

