<h3 class="mb-3">Alterar estado do projeto</h3>
<form action="../controllers/form-handlers/alterar-estado.php" method="POST">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="selectEstado"><strong>Estado</strong></label>
        <div class="col-sm-3 mb-3">
            <select class="form-control" name="situacao">
                <option value="0">Pendente</option>
                <option value="1">Aprovado</option>
                <option value="2">Concluido</option>
                <option value="3">Reprovado</option>                
            </select>
        </div>
        <label class="col-sm-2 col-form-label" for="selectDataExposicao"><strong>Data de Exposição</strong></label>
        <div class="col-sm-3 mb-3">
           <input type="date" class="form-control"  <?= isset($project['project']["data_exposição"])? "value='".$project['project']["data_exposição"]."'": "" ?> name="data_exposicao" required>    
        </div>
        
        <div class="col-sm-2">
            <button type="submit" class="btn btn-danger btn-block">Alterar</button>
        </div> 
        
    </div>
</form>
<hr>